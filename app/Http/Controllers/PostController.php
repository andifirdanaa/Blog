<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use File;


class PostController extends Controller
{
    public function index(Post $model)
    {
    	
    	return view('post.index',['posts'=>$model->paginate(5)]);

   }
   public function create(){
      return view('post.create');
   }
    public function store(Request $request)
    {
        $posts = new Post;
        $posts->tittle     = $request->tittle;
        $posts->user_id = auth()->user()->id;
        $posts->content    = $request->content;
        $posts->slug  = $request->slug;

        if($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $file->move($destinationPath , $fileName);
            $posts->thumbnail = $fileName;
        }
        $posts->save();

        return redirect()->route('post.index')->withStatus(__('Post successfully created.'));
    }
   
  
   
}
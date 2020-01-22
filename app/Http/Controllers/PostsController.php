<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use File;

class PostsController extends Controller
{
      public function index(Post $model)
    {	
    	
    	return view('post.index',['posts'=>$model->paginate(5)]);
   }
   public function create()
   {
   	 return view('post.create');
   }
   public function store(Request $request,Post $model)
   {
   		$posts = new Post;
   		$posts->user_id = auth()->user()->id;
        $posts->tittle = $request->tittle;
        $posts->content = $request->content;
        $posts->slug = $request->slug;

       if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('/images' .$filename);
            Image::make($image)->resize(500, 350)->save($location);

            $posts->image = $filename;
        }
        $posts->save();

        return redirect()->route('post.index')->withStatus(__('Post successfully created.'));
   }
}

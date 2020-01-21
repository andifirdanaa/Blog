<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	
    	return view('post.index', compact(['posts']));

   }
   public function create(){

   	return view('post.create');
   }
   public function save(Request $request){
   	dd($request->all());
   // $post = \App\Post::create($request->all());
   // 	// $post = Post::create([
   // 	// 	'tittle'=> $request->tittle,
   // 	// 	'content'=> $request->content,
   // 	// 	'user_id'=> auth()->user()->id,
   // 	// 	'slug'=> $request->slug,
   // 	// 	'thumbnail'=> $request->thumbnail

   // 	// ]);
   // 	return redirect()->route('posts.index')->with('sukses','Data Berhasil Diinput');

   }
}
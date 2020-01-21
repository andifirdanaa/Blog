<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Post;
use App\User;

class SiteController extends Controller
{
	public function home(){
		$posts = Post::all();
		return view('welcome',compact('posts'));
	}
    public function singlepost(Post $post){
    	
    	return view('site.singlepost',compact('post'));
    }
}

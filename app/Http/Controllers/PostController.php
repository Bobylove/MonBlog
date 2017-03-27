<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
	public function index(){
		$posts = Post::paginate(5);
		return view('posts.index',compact('posts'));
	}
	public function show($slug){
		$post = Post::where('slug',$slug)->FirstOrFail();
		$author = $post->user;
		$comments = $post->comments;

		return view('posts.show',compact('post','author','comments')); 

	}
}


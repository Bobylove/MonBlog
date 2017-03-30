<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
	public function admin(){
		$posts = Post::all();
		return view('posts.admin',compact('posts'));
	}

	public function edit($id){
		$post = Post::find($id);
		return view('posts.edit',compact('post'));

	}

	public function delete($id){
		$post = Post::find($id);
		$post->destroy($post->id);
		return Redirect::back()->with('success','Votre poste a bien été supprimé');

	}
}


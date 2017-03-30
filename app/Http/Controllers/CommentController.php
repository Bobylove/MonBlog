<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

	public function admin(){
		$comments = Comment::all();
		return view('comments.admin',compact('comments'));
	}
	
	public function create($id){
		$post = Post::find($id);
		$inputs = Input::all();
		Comment::create([
			'user_id'=> Auth::user()->id,
			'post_id'=> $post->id,
			'content'=> $inputs['comment'],
			]);
		return Redirect::back()->with('success','Votre commentaire a bien été crée');
	}


	public function delete($id){
		$comment = Comment::find($id);
		$comment->delete();
		return Redirect::back()->with('success','Le commentaire a bien été supprimé');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{
	protected $rules = [
	'name'=>'required | min:3',
	'content'=>'required | min:5'];

	

	
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
		if($post){

			return view('posts.edit',compact('post'));
		}
		else {
			return view('posts.create');
		}

	}

	public function delete($id){
		$post = Post::find($id);
		$post->destroy($post->id);
		return Redirect::back()->with('success','Votre poste a bien été supprimé');

	}
	public function update($id){
		$inputs = Input::all();
		$validation = Validator::make($inputs,$this->rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation);
		}
		else {
			$post = Post::find('id');
			if ($post) {
				$post = Post::find($id);
				$post->name = $inputs['name'];
				$post->content = $inputs['content'];
				$post->slug = Str::slug($inputs['name']);
				$post->save();
				return Redirect::back()->with('success','Votre post a bien été modifié');
			}
			else {
				$post = Post::create([
					'name'=>$inputs['name'],
					'content'=>$inputs['content'],
					'slug'=>Str::slug($inputs['name']),
					'user_id'=>Auth::user()->id,
					]);
				$post->save();
				return Redirect::route('posts.edit',$post->id)->with('success','Votre poste a bien été crée');

			}
		}
	}

}


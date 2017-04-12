<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use Illuminate\Support\Str;
use App\Post;


class PostController extends Controller
{
	protected $rules = [
	'name'=>'required | min:3',
	'content'=>'required | min:5'];

	

	
	public function index(){
		Carbon::setLocale('fr');
		$datePost = Post::latest()->where('publier','=',1)->paginate(2);
		$name = 1; // besoin de débuge la relation user /post */
		$post = Post::where('user_id',$name)->FirstOrFail();
		$user = $post->user;
		
		return view('posts.index',compact('user','datePost'));
	}
	public function show($slug){
		$post = Post::where('slug',$slug)->FirstOrFail();
		Carbon::setLocale('fr');
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
		if(Input::get('publier')){
			$check = 0;
		}else{
			$check = 1;
		}
		

		$validation = Validator::make($inputs,$this->rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation);
		}
		else {
			
			
			$post = Post::find($id);
			$post->name = $inputs['name'];
			$post->content = $inputs['content'];
			$post->slug = Str::slug($inputs['name']);
			$post->save();

			return Redirect::back()->with('success','Votre poste a bien été modifié');
		}

		
	}

	public function create(){
		$inputs = Input::all();
		if(Input::get('publier')){
			$check = 0;
		}else{
			$check = 1;
		}
		

		$validation = Validator::make($inputs,$this->rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation);
			$post = Post::create([
				'name'=>$inputs['name'],
				'content'=>$inputs['content'],
				'publier'=>$check,
				'slug'=>Str::slug($inputs['name']),
				'user_id'=>Auth::user()->id,
				]);
			$post->save();
			return Redirect::route('posts.admin')->with('success','Votre poste a bien été crée');

		}
	}

	public function publier($id){
		$post = Post::find($id);
		if($post->publier == 1){
			$post->publier = 0;
			$post->save();
			return Redirect::back()->with('success','Le poste ne seras pas affiché');
		}
		else {
			$post->publier = 1;
			$post->save();
			return Redirect::back()->with('success','le poste est en ligne');
		}
	}


}


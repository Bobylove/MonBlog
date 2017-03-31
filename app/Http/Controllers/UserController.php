<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{

	protected $rules = [
	'firstname'=>'required | min:3',
	'lastname'=>'required | min:3',
	'email'=>'required | min:3',
	'password'=>'required | min:5'
	];

	public function admin(){
		$users = User::all();
		return view('users.admin',compact('users'));
	}
	public function delete($id){
		$user = User::find($id);
		$user->delete();
		return Redirect::back()->with('success','L\'utilisateur a bien été supprimé');
	}
	public function permission($id){
		$user = User::find($id);
		if($user->is_admin){
			$user->is_admin = 0;
			$user->save();
		}
		else {
			$user->is_admin = 1;
			$user->save();
		}
		return Redirect::back()->with('success','La permission a bien été modifié');
	}

	public function login(){
		return view('users.login');
	}

	public function check(){
		$inputs = Input::all();
		if(Input::get('remember')){
			$remember = true;
		}
		else {
			$remember = false;
		}
		$inputs['email'] = e($inputs['email']);
		$inputs['password'] = e($inputs['password']);
		$validation = Validator::make($inputs,[
			'email'=>'required',
			'password'=>'required',
			]); 
		if($validation->fails()){
			return Redirect::back()->withErrors($validation);
		}
		else {
			if(Auth::attempt(['email'=>$inputs['email'],'password'=>$inputs['password']],$remember)) {
				Auth::attempt(['email'=>$inputs['email'],'password'=>$inputs['password']],$remember);
				return Redirect::route('home')->with('success','Vous êtes bien connecté');
			}
			else {
				return Redirect::back()->with('error',"Le mot de passe ou le mail est incorrect");
			}
		}
		
	}
	public function profil(){
		$users = User::all();
		return view('users.profil',compact('users'));
		
	}
	public function show($id){
		$users = User::find($id);
		return view('users.profil',compact('users'));
	}
	public function logout(){
		Auth::logout();
		return Redirect::route('home')->with('success','Vous êtes maintenant déconnecté');
	}
	
	public function register(){
		return view('users.register');
	}

	public function store(){
		$inputs['email'] = e(Input::get('email'));
		$inputs['password'] = e(Input::get('password'));
		$inputs['password_confirm'] = e(Input::get('password_confirm'));
		$validation = Validator::make($inputs,[
			'email'=>'required|min:3|unique:users',
			'password'=>'required|min:4',
			'password_confirm'=>'same:password']);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation);
		}
		else {
			$user = User::create([
				'email'=> $inputs['email'],
				'password'=> Hash::make($inputs['password']),
				]);
			$user->save();
			return Redirect::route('users.login')->with('success','Vous pouvez maintenant vous connectez');
		}
	}
	public function update($id){
		$inputs = Input::all();

		$users = User::find($id);
		$users->firstname = $inputs['firstname'];
		$users->lastname = $inputs['lastname'];
		$users->email = $inputs['email'];
		$users->password = Hash::make($inputs['password']);

		$users->save();
		return view('users.profil');

		
	}
	public function edit($id){
		$users = User::find($id);

		return view('users.edit',compact('users'));
		
	}
}



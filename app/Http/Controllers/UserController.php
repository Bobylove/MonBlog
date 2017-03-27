<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
	public function login(){
		return view('users.login');
	}
	public function check(){
		$inputs = Input::all();
		$inputs['username'] = e($inputs['username']);
		$inputs['password'] = e($inputs['password']);
		$validation = Validator::make($inputs,[
			'username'=>'required',
			'password'=>'required',
			]); 
		if($validation->fails()){
			return Redirect::back()->withErrors($validation);
		}
		else {
			if(Auth::attempt(['username'=>$inputs['username'],'password'=>$inputs['password']])) {
				Auth::attempt(['username'=>$inputs['username'],'password'=>$inputs['password']]);
				return Redirect::route('home')->with('success','Vous êtes bien connecté');
			}
			else {
				return Redirect::back()->with('error',"Le mot de passe ou le nom d'utilisateur est incorrect");
			}
		}
	}
}

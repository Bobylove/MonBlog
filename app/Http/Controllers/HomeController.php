<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Home;

class HomeController extends Controller
{

    

    public function admin(){
    	if(Auth::check()){
    		return "Administration";
    	}
    	else {
    		return Redirect::route('users.login')->with('error','Vous devez être connecté pour accéder à cette page');
    	}
    }
}

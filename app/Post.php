<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = ['id','created_at'];


	public function user(){
		return $this->belongsTo('App\User');

	}

	public function comments(){
		return $this->hasMany('App\Comment');
	}
}



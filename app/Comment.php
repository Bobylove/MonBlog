<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = ['id','created_at'];

	public function post(){
		return $this->belongsTo('Post');
	}
	public function user(){
		return $this->belongsTo('User');
	}
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
	protected $guarded = ['id','created_at'];

	public static function boot(){
		parent::boot();
		self::created(function($comment){
			$comment->post->counts_comment = $comment->post->comments->count();
			$comment->post->save();
		});
		parent::boot();
		self::deleted(function($comment){
			$comment->post->counts_comment = $comment->post->comments->count();
			$comment->post->save();
		});


		return true;
	}

	public function post(){
		return $this->belongsTo('App\Post');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}
}


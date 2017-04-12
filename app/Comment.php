<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
	

	public static function boot(){
		parent::boot();
		self::created(function($comment){
			$comment->post->counts_comment = $comment->post->comments->count();
			$comment->post->save();
		});
		parent::boot();
		self::deleted(function($comment){
			if($comment->post){
				$comment->post->counts_comment = $comment->post->comments->count();
				$comment->post->save();
				
			}
		});


		return true;
	}

	
}


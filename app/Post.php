<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	

	public static function boot(){
		parent::boot();
		self::created(function($post){

			$post->counts_comment = 0;

		});
		self::deleted(function($post){
			$comments = $post->comments;
			foreach ($comments as $comment) {
				$comment->delete();
			}
		});
		return true;
	}

	
}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = ['id','created_at'];

	protected $fillable = ['name','content','user_id'];

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

	public function user(){
		return $this->belongsTo('App\User');

	}

	public function comments(){
		return $this->hasMany('App\Comment');
	}
}



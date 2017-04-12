<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $cast = [
    'is_admin' => 'boolean',
    ];
    protected $guarded = ['id','created_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];
    public static function boot(){
        parent::boot();
        
        self::deleted(function($users){
            $comments = $users->comments;
            foreach ($comments as $comment) {
                $comment->delete();
            }
        });
        return true;
    }
    public function post(){
        return $this->belongsTo('App\Post','foreign_key');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function isAdmin(){
        return $this->admin;
    }
}

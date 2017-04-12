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
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
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
   

    
}

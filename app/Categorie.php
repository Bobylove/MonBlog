<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = ['id','created_at'];

    public function posts(){
    	return $this->hasMany('App\Post');
    }
}

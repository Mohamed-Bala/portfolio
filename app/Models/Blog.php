<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model 
{

    protected $table = 'blogs';
    public $timestamps = true;
    protected $guarded = [];


    public function comment(){

     

        return $this-> hasMany('App\Models\Comment','blog_id','id');
    
    }

}
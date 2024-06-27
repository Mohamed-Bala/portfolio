<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;
    protected $guarded = [];


    public function blog(){



        return $this-> belongsTo('App\Models\Blog','blog_id','id');
    
    }



    public function user(){



        return $this-> belongsTo('App\Models\User','user_id','id');
    
    }


}
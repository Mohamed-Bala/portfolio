<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model 
{

    protected $table = 'likes';
    public $timestamps = true;
    protected $guarded = [];



    public function user(){



        return $this-> belongsTo('App\Models\User','user_id','id');
    
    }
}
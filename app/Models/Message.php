<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model 
{

    protected $table = 'messages';
    public $timestamps = true;
    protected $guarded = [];



    public function user(){



        return $this-> belongsTo('App\Models\User','user_id','id');
    
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clientSays';
    public $timestamps = true;
    protected $guarded = [];

    public function user(){



        return $this-> belongsTo('App\Models\User','user_id','id');
    
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    public function skill(){
    	return $this->belongsTo('App\User');
    }
}

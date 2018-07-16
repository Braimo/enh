<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelouro extends Model
{
    //



    public function projectos(){

    	return $this->belongsToMany('App\Projecto');
    }
}

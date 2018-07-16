<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    //
    

public function pelouro(){

    return $this->belongsToMany('App\Pelouro');
}
}
    


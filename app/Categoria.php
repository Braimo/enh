<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public function Ficheiros(){
    	return $this->hasMany('App\Ficheiro');
    }
}

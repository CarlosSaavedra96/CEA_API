<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    //
    protected $table = 'atleta';

    public function persona(){
        return $this->belongsTo('App\Persona','idpersona','idpersona');
    }
}

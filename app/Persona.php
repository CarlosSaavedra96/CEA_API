<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'persona';
    protected $primaryKey = 'idpersona';

    public function atleta(){
        return $this->hasOne('App\Atleta','idpersona','idpersona');
    }
}

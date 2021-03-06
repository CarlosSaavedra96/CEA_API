<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competencias;
use App\Http\Resources\CompetenciasCollection;

class CompetenciasController extends Controller
{
    //

    public function get($id){
        $competencias = Competencias::join('atleta','competencias.atleta_idpersona', '=', 'atleta.idpersona')
                                    ->join('persona','persona.idpersona','=','atleta.idpersona')
                                    ->where('persona.idpersona',$id)
                                    ->get();
        return new CompetenciasCollection($competencias);
    }

    public function resultados(Request $request){
        Competencias::where('atleta_idpersona',$request->idpersona)
                    ->where('idcompetencias',$request->idcompetencia)
                    ->update(['resultadocompetencia'=>$request->resultado]);
    }
}

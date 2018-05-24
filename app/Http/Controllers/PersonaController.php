<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Http\Resources\Atleta as AtletaResource;

class PersonaController extends Controller
{
    //

    public function atleta($id){
        $atleta = Persona::join('atleta','persona.idpersona','=','atleta.idpersona')
                        ->join('disciplina','atleta.disciplina_iddisciplina', '=', 'disciplina.iddisciplina')
                        ->join('municipio','persona.municipio_idmunicipio', '=', 'municipio.idmunicipio')
                        ->where('persona.idpersona',$id)
                        ->get();
        
        return new AtletaResource($atleta);
    }

    public function entrenador($id){

    }

    public function entrenadorAtleta($id){
        $entrenador = Persona::join('entrenador_has_atleta','entrenador_has_atleta.entrenador_persona_idpersona','=','persona.idpersona')
                            ->where('entrenador_has_atleta.atleta_persona_idpersona',$id)
                            ->pluck('persona.nombrecompleto');
        return response()->json([
            'data'=>[
                'nombre'=> $entrenador
            ]
        ]);
    }
}

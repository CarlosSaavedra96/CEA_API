<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Persona;
use App\Entrenador;
use App\Municipio;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $user=Login::join('persona','login.idlogin', '=', 'persona.login_idlogin')
                    ->where('login.user',$request->user)
                    ->where('login.password',$request->password)
                    ->get();
        if($user->count()){
            $data = [
                'data'=>[
                    'id'=>$user[0]->idpersona,
                    'type'=>$user[0]->rango
                ]
            ];
        }
        else{
            $data = "Error";
        }
        return $data;
    }

    public function createUser(Request $request){
        $data = $request;
        switch($data->rango){
            case 'superadmin': $rango = 1; break;
            case 'admin': $rango = 2; break;
            case 'superusuario': $rango = 3; break;
            case 'usuario': $rango = 4; break;
        }
        $id = Login::insertGetId([
            'user'=>$data->user,
            'password'=>$data->password,
            'email'=>$data->email,
            'rango'=>$rango
        ]);

        $time = strtotime($data->fechaNacimiento);
        $date = date('Y-m-d',$time);

        $idpersona = Persona::insertGetId([
            'login_idlogin' => $id,
            'perfil_idperfil' => 1,
            'nombrecompleto' => $data->nombre,
            'edad' => 0,
            'genero' => $data->genero,
            'curp' => $data->curp,
            'rfc' => $data->rfc,
            'fechaNacimiento' => $date,
            'estadoCivil' => $data->edoCivil,
            'ciudadNacimiento' => $data->ciudad,
            'direccion' => $data->direccion,
            'municipio_idmunicipio' => Municipio::where('municipio',$data->municipio)->pluck('idmunicipio')->first(),
        ]);

        Entrenador::insert([
            'persona_idpersona'=> $idpersona,
            'car_idcar'=> 1,
        ]);
        return $idpersona;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

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
}

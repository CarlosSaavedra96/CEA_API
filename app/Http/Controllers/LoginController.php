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
                    ->pluck('persona.idpersona');
        if($user->count()){
            $data = [
                'id'=>$user[0]
            ];
        }
        else{
            $data = "Error";
        }
        return $data;
    }
}

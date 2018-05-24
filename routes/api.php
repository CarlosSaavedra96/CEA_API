<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'LoginController@login');

Route::get('perfil/atleta/{id}','PersonaController@atleta');
Route::get('perfil/entrenador/{id}','PersonaController@entrenador');
Route::get('entrenador/{id}','PersonaController@entrenadorAtleta');
Route::get('atletas/{id}','PersonaController@atletasEntrenador');

Route::get('competencias/{id}','CompetenciasController@get');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

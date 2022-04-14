<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
});

Route::apiResource('curso', 'App\Http\controllers\CursoController');
Route::apiResource('alumno', 'App\Http\controllers\AlumnoController');

Route::apiResource('alumno_curso', 'App\Http\controllers\AlumnoCursoController');

// Route::apiResource('pais', 'App\Http\controllers\PaisController');
Route::apiResource('departamento', 'App\Http\controllers\DepartamentoController');
Route::apiResource('ciudad', 'App\Http\controllers\CiudadController');

Route::get('/pais/{id}', 'App\Http\controllers\PaisController@show');
Route::get('/pais', 'App\Http\controllers\PaisController@index');

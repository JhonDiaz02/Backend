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

// Route::get('/curso', 'App\Http\controllers\CursoController@index');
// Route::post('/curso', 'App\Http\controllers\CursoController@store');
// Route::put('/curso/{id}', 'App\Http\controllers\CursoController@update');
// Route::delete('/curso/{id}', 'App\Http\controllers\CursoController@destroy');
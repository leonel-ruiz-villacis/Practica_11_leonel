<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEjercicio1;
use App\Http\Controllers\controladorEjercicio2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','controladorEjercicio1@arrel' );
Route::get('/ej1/{controlador}', [controladorEjercicio1::class,'ej1']);
Route::get('/ej2/{leo1}/{leo2}/{leo3}/{leo4}', [controladorEjercicio2::class,'ej2']);


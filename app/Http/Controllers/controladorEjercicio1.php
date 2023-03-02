<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller{
  
    public function arrel(){
        return 'Metode arrel';
        }

    public function ej1($controlador){
        return view('mensaje') -> with (['text'=>$controlador]);
    }    

    public function hola($persona = ''){
        $textoFinal = 'hola, ';
        $textoFinal .= ($persona == '')?'mundo':$persona;
        return view('mensaje') -> with(['texto => $textoFinal']);
    }
}
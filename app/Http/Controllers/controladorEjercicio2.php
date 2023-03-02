<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class controladorEjercicio2 extends Controller{
    public function ej2($leo1,$leo2,$leo3,$leo4){
        $leo = 'leo1' .$leo1 .'leo2' .$leo2 .'leo3' .$leo3 .'leo4' .$leo4; /*metemos todos los parametros en uno*/ 
        return view('mensaje') -> with (['text'=>$leo]);
    }
}
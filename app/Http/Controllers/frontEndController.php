<?php

namespace App\Http\Controllers;
//php artisan make:controller UserController
use Illuminate\Http\Request;
//controlador de usuario-cliente
class frontEndController extends Controller{
    //devuelve la vista que esta en views/web/ el archivo index
    public function InicioHome(){
        //creando listado (proveniente de la base)
        $lista=['algebra','quimica','matematicas','informatica'];
        $titulo='este es el titulo';
    	return view('web.index',['listado'=>$lista,'titulo'=>$titulo]);//vista llevando datos
    }
    //seccion introducion a la programacion
    public function introProgra(){
    	return view('web.introProgra',['nombre'=>'eduardo']);//correjir
    }

    public function CapituloIntroProgra($capitulo){
    	return "numero de capitulo : {$capitulo}";
    }

    public function capituloEspecialIntroProgra(){
    	return "capitulo especial";
    }
}

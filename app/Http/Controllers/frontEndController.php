<?php

namespace App\Http\Controllers;
//php artisan make:controller UserController
use Illuminate\Http\Request;
//controlador de usuario-cliente
class frontEndController extends Controller{
    //devuelve la vista que esta en views/web/ el archivo index
    public function InicioHome(){
    	return view('web.index');//vista principal
    }
    //seccion introducion a la programacion
    public function introProgra(){
    	return "vacio";//correjir
    }

    public function CapituloIntroProgra($capitulo){
    	return "numero de capitulo : {$capitulo}";
    }

    public function capituloEspecialIntroProgra(){
    	return "capitulo especial";
    }
}

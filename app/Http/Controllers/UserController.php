<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registroUsuario($nombre,$apellido=NULL){
    	if($apellido){
    	return "nombre: {$nombre}, apellido: {$apellido}";
	    }
	    else{
	    	return "sin apellido: {$nombre}";
	    }
    }
}

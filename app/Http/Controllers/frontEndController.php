<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller{
    //devuelve la vista que esta en views/web/ el archivo index
    public function index(){
    	return view('web.index');//vista principal
    }

}

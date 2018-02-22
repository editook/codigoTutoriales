<?php
//Route::get('/','frontEndController@index');

Route::get('/', function () {
    return view('web.index');
});

Route::get('/introducionProgramacion',function (){
   return view('web.homeIntroProgra');
});
//dirijir introprogra un capitulo numerico
Route::get('/introducionProgramacion/{capitulo}',function ($capitulo){
   return "numero de capitulo de intro a la progra: {$capitulo}";
})->where('capitulo','[0-9]+');//expresion regular

Route::get('/introducionProgramacion/especial',function (){
   return 'capitulo especial de intro a la progra';
});

Route::get('usuario/{nombre}/{apellido?}', function ($nombre,$apellido=null) {
    if($apellido){
    	return "nombre: {$nombre}, apellido: {$apellido}";
    }
    else{
    	return "sin apellido: {$nombre}";
    }

});
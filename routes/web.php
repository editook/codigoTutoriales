<?php
//Route::get('/','frontEndController@index');

Route::get('/','frontEndController@InicioHome');


Route::get('/ip','frontEndController@introProgra');


//dirijir introprogra un capitulo numerico
Route::get('/ip/{capitulo}','frontEndController@CapituloIntroProgra')->where('capitulo','[0-9]+');//expresion regular


Route::get('/ip/especial','frontEndController@capituloEspecialIntroProgra');


Route::get('usuario/{nombre}/{apellido?}', 
			'UserController@registroUsuario');
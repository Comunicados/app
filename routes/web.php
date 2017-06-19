<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
	return view ('login');
});

Route::get('/padres',function(){
	return view ('parents/index');
});

Route::get('/escuelas',function(){
	return view ('schools/index');
});

Route::get('/admin',function(){
	return view ('admins/estadisticas');
});

Route::get('/calendario',function(){
	return view ('commons/calendario');
});

Route::get('/crear/mensaje',function(){
	return view ('commons/crear_mensaje');
});

Route::get('/leer/mensajes',function(){
	return view ('commons/leer_mensajes');
});

Route::get('/ver/mensajes',function(){
	return view ('commons/ver_mensajes');
});

Route::get('/configuracion',function(){
	return view ('commons/configuracion');
});

Route::get('/perfil',function(){
	return view ('commons/perfil');
});

Route::get('/padres/justificativo',function(){
	return view ('parents/justificativo');
});

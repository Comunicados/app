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
	return view ('auth/login');
});



Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@index');
    Route::get('/perfil', 'AdminController@showProfile');
    Route::get('/personal', 'AdminController@showStaff');
    Route::get('/personal/editar/{dni}', 'AdminController@editStaff');
    Route::get('/personal/actualizar/{dni}', 'AdminController@updateStaff');
    Route::get('/personal/eliminar/{dni}', 'AdminController@deleteStaff');
    Route::resource('/usuarios', 'UsuarioController');
    Route::resource('/materias', 'MateriaController');
    Route::resource('/roles', 'RoleController');
});

Route::prefix('tutor')->group(function () {

	Route::get('/perfil', function () {
        return view ('commons/perfil');
    });

    Route::get('/', function () {
        return view ('parents/index');
    });

    Route::get('asistencias', 'AsistenciaController@index');

    Route::get('/justificativo',function(){
		return view ('parents/justificativo');
	});

    Route::get('/calificaciones', function () {
        return view ('commons/calificaciones');
    });
    
    Route::get('/permisos', function () {
        return view ('parents/permisos');
    });
    
    Route::get('/calendario', function () {
        return view ('commons/calendario');
    });

    Route::resource('/mensajes', 'MensajeController');
	
	Route::get('/comportamiento', function () {
        return view ('commons/comportamiento');
    });

});

Route::prefix('alumno')->group(function () {

	Route::get('/perfil', function () {
        return view ('commons/perfil');
    });

    Route::get('/', function () {
        return view ('students/index');
    });

    Route::get('/asistencias', function () {
        return view ('commons/asistencias');
    });

    Route::get('/calificaciones', function () {
        return view ('commons/calificaciones');
    });
    
    Route::get('/calendario', function () {
        return view ('commons/calendario');
    });

    Route::resource('/mensajes', 'MensajeController');
	
	Route::get('/comportamiento', function () {
        return view ('commons/comportamiento');
    });

});

Route::prefix('personal')->group(function () {
	Route::get('/perfil', function () {
        return view ('commons/perfil');
    });

    Route::get('/', function () {
        return view ('schools/index');
    });

    Route::resource('/mensajes', 'MensajeController');

    Route::resource('/evaluaciones', 'EvaluacionController');

    Route::resource('/temario', 'TemarioController');

    Route::resource('/asistencia', 'AsistenciaController');

    Route::resource('/calendario', 'CalendarioController');

});




Auth::routes();


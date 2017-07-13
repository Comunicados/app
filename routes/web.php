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

Route::get('/perfil', function () {
        return view ('commons/perfil');
    });
Route::get('/configuracion', function () {
        return view ('commons/configuracion');
    });

Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@index');
    Route::get('/personal', 'AdminController@showStaff');
    Route::get('/personal/editar/{dni}', 'AdminController@editStaff');
    Route::get('/personal/actualizar/{dni}', 'AdminController@updateStaff');
    Route::get('/personal/eliminar/{dni}', 'AdminController@deleteStaff');
	Route::get('/escuelas', 'EscuelaController@index');
	Route::get('/escuelas/show/{id}', 'EscuelaController@show');
    Route::resource('/usuarios', 'UsuarioController');
    Route::resource('/materias', 'MateriaController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/escuelas', 'EscuelaController');	
});

Route::prefix('tutor')->group(function () {

    Route::get('/', function () {
        return view ('parents/index');
    });

    Route::get('/asistencias', function(){
		return view ('commons/asistencias');
	});

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

    Route::prefix('calificaciones')->group(function() {
            Route::get('/mat1', function () {
                return view ('students/mat1');
            });
            Route::get('/lenguaylit', function () {
                return view ('students/lenguaylit');
            });
            Route::get('/cssociales2', function () {
                return view ('students/cssociales2');
            });
            Route::get('/culturayartecont', function () {
                return view ('students/culturayartecont');
            });
        });

});

Route::prefix('alumno')->group(function () {


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
        
        Route::prefix('calificaciones')->group(function() {
            Route::get('/mat1', function () {
                return view ('students/mat1');
            });
            Route::get('/lenguaylit', function () {
                return view ('students/lenguaylit');
            });
            Route::get('/cssociales2', function () {
                return view ('students/cssociales2');
            });
            Route::get('/culturayartecont', function () {
                return view ('students/culturayartecont');
            });
        });
});

Route::prefix('personal')->group(function () {


    Route::get('/', function () {
        return view ('schools/index');
    });

    Route::resource('/mensajes', 'MensajeController');

    Route::resource('/evaluaciones', 'EvaluacionController');

    Route::resource('/temario', 'TemarioController');

    Route::resource('/asistencias', 'AsistenciaController');

    Route::resource('/calendario', 'CalendarioController');

});




Auth::routes();


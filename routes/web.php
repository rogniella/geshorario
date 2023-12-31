<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AsistenciasController;
use App\Http\Controllers\SedeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





//PROFESORES
    Route::controller(ProfesoresController::class)->group(function () {
        Route::get('profesores/registro', 'registro')->name('profesores.registro');
        Route::post('profesores/registro_graba', 'registro_graba')->name('profesores.registro_graba');
        
    });

// REQUIEREN ESTAR LOGUEADO	
Route::group( ['middleware' => ['auth'] ], function() {

    //ASISTENCIAS
    Route::controller(AsistenciasController::class)->group(function () {
    Route::get('asistencias/index', 'index')->name('asistencias.index');
    Route::resource('users','App\Http\Controllers\UserController');
    Route::get('user/password', 'App\Http\Controllers\UserController@password');
    Route::post('user/updatepassword', 'App\Http\Controllers\UserController@updatePassword');
    // la defino asi para llamarla directamente


    // SEDES
    Route::get('/sedes', [SedeController::class, 'index'])->name('sedes.index');
    //Route::resource('sedes', SedeController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']); este hiciste vos (rodri) solo le deje todo en una linea

    Route::get('/sedes/mostrar_asistencias/{id}', [SedeController::class, 'mostrarAsistencias'])->name('sedes.mostrar_asistencias');

    //Route::get('sedes/asist_x_sede', 'index')->name('sedes.asist_x_sede'); supuestamente seria para la funcinon que busca por sedes.id


    Route::get('user/{id}/destroy', [
            'uses' => 'App\Http\Controllers\UserController@destroy' ,  // nombreControlador@metodo
            'as' => 'user.destroy' ]);

    });
    
}); //FIN Requiere estar conectado

    // MANTENIMIENTO DE USUARIOS
    


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

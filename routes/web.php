<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/perito', function () {
    return view('perito'); 
});
Route::get('/4toperito', function () {
    return view('4toperito');
});
Route::get('/6toperito', function () {
    return view('6toperito'); 
});




Route::get('/4tomagisterio', function () {
    return view('4tomagisterio'); 
});
Route::get('/magisterio', function () {
    return view('magisterio');
});
Route::get('/6tomagisterio', function () {
    return view('6tomagisterio'); 
});






Route::get('/4tosecretariado', function () {
    return view('4tosecretariado'); 
});
Route::get('/secretariado', function () {
    return view('secretariado');
});
Route::get('/6tosecretariado', function () {
    return view('6tosecretariado'); 
});




Route::get('/4tocomputacion', function () {
    return view('4tocomputacion'); // Carga la vista sin los datos (Vue se encargará de pedirlos)
});






// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'getCursos']);


// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'computacion']);


// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'cuartoPerito']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'quintoPerito']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'sextoPerito']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'cuartoMagisterio']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'quintoMagisterio']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'cuartoPerito']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'cuartoPerito']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'cuartoPerito']);

// Ruta para la API que devuelve los cursos en JSON
Route::get('/api/cursos/{year}/{carrera}', [\App\Http\Controllers\CursoController::class, 'cuartoPerito']);


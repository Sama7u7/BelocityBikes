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
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('inicio-sesion');
});

Route::post('/login', [LoginController::class, 'valida'])->name('login'); 

// Rutas para las vistas de los distintos roles
Route::view('/cliente', 'inicio-cliente')->name('cliente');
Route::view('/contador', 'inicio-contador')->name('contador');
Route::view('/encargado', 'inicio-encargado')->name('encargado');
Route::view('/supervisor', 'inicio-supervisor')->name('supervisor');
Route::view('/vendedor', 'inicio-vendedor')->name('vendedor');

// Ruta por defecto en caso de que no se encuentre un rol específico para el usuario
Route::view('/default', 'default')->name('default');
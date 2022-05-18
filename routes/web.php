<?php

use App\Http\Controllers\trabajadorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('ver');
})->name('inicio');







Route::get('/agregar', [trabajadorController::class, 'create'])->name('agregar');
Route::post('/agregar', [trabajadorController::class, 'store'])->name('create');
Route::post('/buscar', [trabajadorController::class, 'buscar'])->name('buscar');




//ruta que se encarga de gestionar los datos de los trabajadores
Route::get('/gestion', [trabajadorController::class, 'gestion'])->name('gestion');

//ruta que se encarga de borrar a los trabajadores
Route::delete('/gestion/{trabajador}', [trabajadorController::class, 'delete'])->name('borrar');
//ruta que nos lleva al formulario de editar con los datos
Route::get('/gestion/editar/{trabajador}', [trabajadorController::class, 'editar'])->name('editar');
//ruta que nos actualiza los datos
Route::patch('/gestion/editar/{trabajador}', [trabajadorController::class, 'actualizar'])->name('actualizar');
//ruta que se encarga de la ogica del codigo
Route::post('/codigo/send', [trabajadorController::class, 'codigo'])->name('codigo');
//ruta que confirma que el codigo este correcto y realiza la actualización de la base de datos
Route::patch('/codigo/send/verify/{trabajador}', [trabajadorController::class, 'celular'])->name('celular');
//ruta del login 
Route::get('/login', [trabajadorController::class, 'login'])->name('login');
//ruta que verifica la contraseña y el usuario
Route::post('/login/entrar', [trabajadorController::class, 'entrar'])->name('entrar');
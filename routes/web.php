<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController; /**Ruta del controlador */

/* Route::get('/', function () {
    return view('welcome');
}); */


 
Route::get('/', [TareasController::class, 'index']); /**Cuando llegue una solicitud a '/' va acceder a la clase 'TareasController' y va ejecutar la funcion 'index' */

/* Route::post('/', function () {
  return view('tareas'); /**si tareas estuviera pr ejemplo dentro de la carpeta tarea se utilizaria "tarea.tareas" */
/*}); */
Route::post('/', [TareasController::class, 'store']);

Route::delete('/{id}', [TareasController::class, 'destroy'] )->name('destroy'); /**  Ruta para eliminar una tarea, utilizando "delete" y declarando la variable que envio desde la url "/{id}". "name('tarea.destroy')" nombre de la ruta */



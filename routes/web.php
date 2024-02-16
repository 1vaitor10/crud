<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Rutas CRUD
/* Crear */
Route::get('admin/incidencies/crear', 'App\Http\Controllers\IncidenciaController@crear')->name('admin/incidencies/crear');
Route::put('admin/incidencies/store', 'App\Http\Controllers\IncidenciaController@store')->name('admin/incidencies/store');
 
/* Leer */ 
Route::get('admin/incidencies/detalles/{id}', 'App\Http\Controllers\IncidenciaController@show')->name('admin/incidencies/detalles'); 
 
/* Actualizar */
Route::get('admin/incidencies/actualizar/{id}', 'App\Http\Controllers\IncidenciaController@actualizar')->name('admin/incidencies/actualizar');
Route::put('admin/incidencies/update/{id}', 'App\Http\Controllers\IncidenciaController@update')->name('admin/incidencies/update');
 
/* Eliminar */
Route::post('admin/incidencies/eliminar/{id}', 'App\Http\Controllers\IncidenciaController@eliminar')->name('admin/incidencies/eliminar'); 
 
/* Vista Principal */
Route::get('admin/incidencies', 'App\Http\Controllers\IncidenciaController@index')->name('admin/incidencies');

require __DIR__.'/auth.php';

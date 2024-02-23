<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

Route::get('',[IncidenciaController::class,'index'])->name('admin.incidencies.index');

Route::resource('users','UserController')->names('admin.users');   


Route::resource('categories',[IncidenciaController::class])->names('admin.incidencies');
Route::resource('tags',[IncidenciaController::class])->names('admin.tags');
Route::resource('posts',[IncidenciaController::class])->names('admin.posts');




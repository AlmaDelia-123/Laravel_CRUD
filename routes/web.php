<?php
use App\Http\Controllers\Catalogo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio',[Catalogo::class,'inicio'])->name('home');
Route::get('/listado',[Catalogo::class,'listado'])->name('list');
Route::get('/agregar',[Catalogo::class,'agregar'])->name('agre');
Route::get('/editar',[Catalogo::class,'editar'])->name('edit');
// Agregar nueva película (formulario + envío)

Route::get('/agregar', [Catalogo::class, 'agregar'])->name('catalogo.agregar');
Route::post('/guardar', [Catalogo::class, 'guardar'])->name('catalogo.guardar');

// Editar película
Route::get('/editar/{id}', [Catalogo::class, 'editar'])->name('catalogo.editar');
Route::put('/actualizar/{id}', [Catalogo::class, 'actualizar'])->name('catalogo.actualizar');

// Eliminar película
Route::delete('/eliminar/{id}', [Catalogo::class, 'eliminar'])->name('catalogo.eliminar');

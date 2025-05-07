<?php
use App\Http\Controllers\Catalogo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio',[Catalogo::class,'inicio'])->name('home');
Route::get('/listado',[Catalogo::class,'listado'])->name('list');
Route::get('/agregar',[Catalogo::class,'agregar'])->name('agre'); 
Route::get('/editar/{id}',[Catalogo::class,'editar'])->name('edit');
Route::put('/edicion/{pelicula}',[Catalogo::class,'actualizar'])->name('actualizar');
Route::post('/insertar',[Catalogo::class,'insertar_pelicula'])->name('insertar');
Route::get('/eliminar/{id}', [Catalogo::class, 'eliminar_pelicula'])->name('eliminar');
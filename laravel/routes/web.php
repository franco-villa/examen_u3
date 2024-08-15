<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

Route::view('/', 'home')->name('home');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('proyectos', 'proyectos')->name('proyectos');
Route::view('blog', 'blog')->name('blog');
Route::view('contacto', 'contacto')->name('contacto');


Route::get('clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('clientes/crear', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('clientes/{cliente}/editar', [ClientesController::class, 'edit'])->name('clientes.edit');

Route::patch('clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
//Route::post('clientes/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
//Route::post('clientes/destroy', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::delete('clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('clientes/{id}', [ClientesController::class, 'show'])->name('clientes.show');


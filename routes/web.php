<?php

use App\Http\Controllers\AcercaController;
use App\Http\Controllers\AltaProductoController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\DetalleProveedor;
use App\Http\Controllers\DetalleUsuarioController;
use App\Http\Controllers\RegistroProveedor;
use App\Http\Controllers\RegistroUsuarioController;
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
    return view('welcome');
});

Route::get('/dashboard/registroUsuario',[RegistroUsuarioController::class, 'index']);
Route::get('/dashboard/detalleUsuario',[DetalleUsuarioController::class, 'index'])->name('Usuario');
Route::get('/dashboard/altaProducto',[AltaProductoController::class, 'index']);
Route::get('/dashboard/detalleProducto',[DetalleProductoController::class, 'index'])->name('Producto');
Route::get('/dashboard/detalleProveedor',[DetalleProveedor::class,'index'])->name('Proveedor');
Route::get('/dashboard/altaProveedor',[RegistroProveedor::class,'index']);
Route::get('/dashboard/acerca',[AcercaController::class, 'index'])->name('Acerca');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

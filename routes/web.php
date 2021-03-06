<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', function () {
	return redirect()->to('/');
});

Route::get('/', 'HomeController@index');
Route::get('/haz-tu-pedido', 'HomeController@hazTuPedido');

Route::prefix('/admin')->group(function () {
	Route::get('/', 'Admin\DashboardController@index');
	Route::resource('/usuario', 'Admin\UsuarioController');
	Route::resource('/categoria', 'Admin\CategoriaController');
	Route::resource('/producto', 'Admin\ProductoController');
	Route::resource('/paquete', 'Admin\PaqueteController');
});
<?php

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

Route::get('/saludo',function(){
	return "HOLA MUNDO LARAVEL 2";
});

Route::get('/contacto/{nombre}/{edad}/{telefono}', function($nombre, $edad,$telefono){
	return $nombre." ".$edad." ".$telefono;
});

//Route::get('/producto','ProductoController@index');

Route::get('/producto','ProductoController@listar')->name('listarproductos');

Route::get('/producto/crear','ProductoController@crear')->name('crear_productos');

Route::post('/producto','ProductoController@guardar')->name('guardar_productos');

Route::get('/producto/{id}/editar','ProductoController@editar')->name('editar_productos');

Route::put('/producto/{id}','ProductoController@modificar')->name('modificar_productos');

Route::delete('producto/{id}','ProductoController@eliminar')->name('eliminar_producto');

Route::resource('/categorias','CategoriaController');
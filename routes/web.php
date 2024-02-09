<?php

use Illuminate\Support\Facades\Route;



/* Estos metodos de ruta llevan dos parametros por default primero la ruta y segundo elcontrolador que se 
asocia a esa ruta

Route::view();
Route::get('mi/ruta', ContraladorDeLaRuta);
Route::post();
Route::put();
Route::delete();
Route::patch(); */

/* cuando se requiera pintar la vista sin rocesar datos no se invoca a ningun controlador sino que lo hacemos
llamando a la vista directamente, las vistas siempr comienzan desde el directorio views y  por suuesto precedido de
la raiz que se indica con la barra / y ademas es importante añadirles un nombre a la ruta ya que en un futuro si
el projecto crece mucho y hay que modificar una ruta no hay que mdificar mucho codigo en las vistas si se le llama
por su nombre */


/* Route::get('/', function () {
    return view('welcome');
}); */

//Route::view('/', 'welcome')->name('welcome');
Route::view('/', 'welcome')->name('welcome');
Route::view('/admin', 'admin.index')->name('admin');
Route::view('/admin/administrativos', 'admin.administrativo.index')->name('admin.administrativos');
Route::view('/admin/users', 'admin.users')->name('users');

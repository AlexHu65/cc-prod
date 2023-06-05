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

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/{slug}', 'HomeController@interiorBlog')->name('blog.interior');
Route::get('/accion/{slug}', 'HomeController@accionInterior')->name('accion.interior');
Route::get('/sintesis/{slug?}', 'HomeController@sintesisInterior')->name('sintesis.interior');
Route::get('/accion', 'HomeController@accion')->name('acciones');
Route::get('/formulario/{form}', 'HomeController@formType')->name('acciones');
Route::get('/contacto/{form}', 'HomeController@contacto')->name('msg.contacto');
Route::post('/contacto', 'HomeController@sendContacto')->name('send.contacto');
Route::post('/comentario', 'HomeController@sendComentario')->name('send.comentario');
Route::post('/ciudades', 'HomeController@ciudades')->name('ciudades');
Route::get('/contactame', 'HomeController@formulario')->name('formulario');
Route::post('/denuncia','HomeController@doDenuncia')->name('denuncia.send');
Route::post('/form-type','HomeController@typeForm')->name('form.type');





Route::group(['prefix' => 'admTemplate'], function () {
  Voyager::routes();
});

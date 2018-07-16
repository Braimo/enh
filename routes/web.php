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

#Route::get('/','PagesController@getIndex');
#Route::get('/ficheiros','PagesController@getFicheiros');
Route::get('/testes','PagesController@getTeste');
Route::get('/search','ProjectoController@getSearch');
#Route::post('/','PagesController@getTeste');
#Route::get('/ficheiros/create','PagesController@getCreate');
Route::resource('ficheiros','FicheiroController');
Route::resource('projectos','ProjectoController');
Route::resource('areas','AreaController');
Route::resource('pelouros','PelouroController');
Route::resource('categorias','CategoriaController');
Route::resource('files','DocumentoController');
Route::resource('queries', 'QueryController@search');
Route::resource('blogs', 'BlogController');
Route::resource('documentos', 'DocumentoController');
Route::get('/download/{ficheiros}','FicheiroController@download');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

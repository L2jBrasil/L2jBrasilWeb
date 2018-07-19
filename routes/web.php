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

/* Index Routes */
Route::get('/', 'IndexController@getData');
Route::get('/post/{idNews}', 'IndexController@showPost')->where('idNews', '[0-9]+');

Route::get('/testes', function(){
	return view('modules.dashboard.addPost');
});

Route::get('/dashboard/posts/novo', 'DashController@novoPost');
Route::get('/dashboard/posts/adiciona', 'DashController@sendData');


/* Sistema de Login e Autenticação */

Route::group(['middleware' => 'accounts'], function()
{

	/* GET */
	Route::get('/login', 'Auth\LoginController@fmrLogin');
	Route::get('/logout', 'Auth\LoginController@logout');

	/* POST */
	Route::post('/login', 'Auth\LoginController@cLogin')->name('login');
});
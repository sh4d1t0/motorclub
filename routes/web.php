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
/*
 * Users
 */
/* Route::get('usuarios', 'UserController@index');

Route::get('usuarios/nuevo', 'UserController@create');

Route::post('usuarios', 'UserController@store');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

Route::get('/usuarios/{id}/editar', 'UserController@edit')
     ->where('id', '[0-9]+');

Route::patch('/usuarios/{id}', 'UserController@update')
     ->where('id', '[0-9]+');

Route::delete('/usuarios/{id}', 'UserController@destroy')
     ->where('id', '[0-9]+');*/

/*
 * Data User
 */
Route::get('saludo/{name}/{nickname?}', 'WelcomeUserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UserController');
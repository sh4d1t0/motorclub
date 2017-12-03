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

Route::get('/home', 'HomeController@index')->name('home'); //url, function, name method

Route::resource('users', 'UserController');

/*
 * Files
 */
//Route::resource('files', 'filesController');
Route::get('el-club/documentos', 'filesController@index')->name('files');
Route::get('el-club/documentos/crear', 'filesController@create')->name('files/create');
Route::post('el-club/documentos', 'filesController@store')->name('files');
Route::get('el-club/documentos/{id}/ver', 'filesController@show')->name('files/{id}/view');
Route::get('el-club/documentos/{id}/editar', 'filesController@edit')->name('files/{id}/edit');
Route::patch('el-club/documentos/{id}', 'filesController@update')->name('files/{id}');
Route::delete('el-club/documentos/{id}', 'filesController@destroy')->name('files/{id}');
Route::get('el-club/documentos/{id}/descargar', 'filesController@download')->name('files/{id}/download');
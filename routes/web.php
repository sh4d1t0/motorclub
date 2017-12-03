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
 * Data User
 */
Route::get('saludo/{name}/{nickname?}', 'WelcomeUserController');// __invoke for only one function
Auth::routes();
/*
 * Users
 */
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')
        ->name('home');//url, function, name method
    Route::resource('users', 'UserController');
});
/*
 * Files
 */
//Prefix
Route::prefix('el-club')->group(function () {
    Route::get('/documentos', 'filesController@index')
        ->name('files');
    Route::get('/documentos/{id}/ver', 'filesController@show')
        ->name('files/{id}/view')
        ->where('id', '[0-9]+');
    Route::get('/documentos/{id}/descargar', 'filesController@download')
        ->name('files/{id}/download')
        ->where('id', '[0-9]+');
    //authenticate
    Route::middleware(['auth'])->group(function () {
        Route::get('/documentos/crear', 'filesController@create')
            ->name('files/create');
        Route::post('/documentos', 'filesController@store')
            ->name('files');
        Route::get('/documentos/{id}/editar', 'filesController@edit')
            ->name('files/{id}/edit')
            ->where('id', '[0-9]+');
        Route::patch('/documentos/{id}', 'filesController@update')
            ->name('files/{id}')
            ->where('id', '[0-9]+');
        Route::delete('/documentos/{id}', 'filesController@destroy')
            ->name('files/{id}')
            ->where('id', '[0-9]+');
    });
});
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
    return view('/home');
});

Auth::routes();

Route::get('/', 'HomeController@index');
//Quand l'utilisateur va aller sur l'url /home, on va utiliser le Controller qui se nomme HomeController et utiliser une méthode qui se nomme index.



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@first' )->name('test');
Route::get('/movies', 'MovieController@showMovies' )->name('movies');

Route ::group(['middleware'=>['auth']],function(){
    Route::get('/createMovie', 'MovieController@create' )->name('createMovie');

    Route::post('/storeMovie', 'MovieController@store' )->name('storeMovie');


    Route::post('/editMovie/{id}', 'MovieController@edit' )->name('editMovie');
    Route::post('/updateMovie/{id}', 'MovieController@update' )->name('updateMovie');
    Route::post('/deleteMovie/{id}', 'MovieController@delete' )->name('deleteMovie');



});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api/v1'], function() {    
    Route::get('todos/active', 'TodoController@getAllActiveTodos');
    Route::get('todos/completed', 'TodoController@getAllCompletedTodos');
    Route::resource('todos', 'TodoController');
});
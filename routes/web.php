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
Route::get('/logout', 'Auth\LoginController@logout');

//User managemant
Route::get('/user/create', 'Backend\UserController@create');
Route::post('/user/create', 'Backend\UserController@store');
Route::get('/user', 'Backend\UserController@index');
Route::get('/user/show/{id}', 'Backend\UserController@show');
Route::get('/user/edit/{id}', 'Backend\UserController@edit');
Route::post('/user/edit/{id}', 'Backend\UserController@update');
Route::get('/user/destroy/{id}', 'Backend\UserController@destroy');

//Student managemant
Route::get('/student/create', 'Backend\StudentController@create');
Route::post('/student/create', 'Backend\StudentController@store');
Route::get('/student', 'Backend\StudentController@index');
Route::get('/student/show/{id}', 'Backend\StudentController@show');
Route::get('/student/edit/{id}', 'Backend\StudentController@edit');
Route::post('/student/edit/{id}', 'Backend\StudentController@update');
Route::get('/student/destroy/{id}', 'Backend\StudentController@destroy');
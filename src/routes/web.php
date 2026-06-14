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
// ギズテックsection2
Route::get('/todo', 'TodoController@index')->name('todo.index');
Route::get('/todo/create', 'TodoController@create')->name('todo.create');
Route::post('/todo', 'TodoController@store')->name('todo.store');

// /{id} /todo/1や/todo/2の「1」や「2」のような変数の部分をルートパラメータ
// idなどその情報を特定するためにしている
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');
Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');
Route::delete('/todo/{id}', 'TodoController@delete')->name('todo.delete');

Route::get('/study', 'studyController@index')->name('study.index');
Route::get('/study/create', 'studyController@create')->name('study.create');
Route::post('/study', 'studyController@store')->name('study.store');

Route::get('/', function () {});

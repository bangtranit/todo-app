<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodoController@index')->name('todos.index');
Route::get('todos/create', 'TodoController@create')->name('todos.create');
Route::get('todos/{todo}', 'TodoController@show')->name('todos.show');
Route::post('todos/store-todo', 'TodoController@store')->name('todos.store');
Route::get('todos/{todo}/edit', 'TodoController@edit')->name('todos.edit');
Route::post('todos/{todo}/update', 'TodoController@update')->name('todos.update');
Route::get('todos/{todo}/delete', 'TodoController@delete')->name('todos.delete');


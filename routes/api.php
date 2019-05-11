<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Get all Tasks
Route::get('/tasks', 'TaskController@all')->name('tasks.all');
//Add one task
Route::post('/tasks', 'TaskController@store')->name('tasks.storer');
//Get one Task
Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');
//Update Task
Route::put('/tasks/{task}', 'TaskController@update')->name('tasks.update');
//Delete Task
Route::delete('/tasks/{task}', 'TaskController@destroy')->name('tasks.destroy');


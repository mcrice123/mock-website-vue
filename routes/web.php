<?php

use Illuminate\Support\Facades\Route;

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

Route::get('skills', function() {
    return ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
});

Route::get('projects/list', 'ProjectsController@list');
Route::get('projects/new', function() {
    return view('projects');
});

Route::get('projects/create', 'ProjectsController@create');

Route::post('projects/store', 'ProjectsController@store');
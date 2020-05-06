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

// Get Home view
Route::get('/', function () {
    return view('welcome');
});

// Return list 
Route::get('skills', function() {
    return ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
});

// All Projects routes
// Return list
Route::get('projects/list', 'ProjectsController@list');
// Go to projects page
Route::get('projects/new', function() {
    return view('projects');
});
// Get projects view
Route::get('projects/create', 'ProjectsController@create');
// POST new project
Route::post('projects/store', 'ProjectsController@store');

// Get Shared State 101 view 
Route::get('/shared-state-101', function() {
    return view('shared-state-101');
});
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

Route::get('/home', function () {
    return view('template/home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('template/about', [
        "title" => "About",
    ]);
});

Route::get('/education', function () {
    return view('template/edu', [
        "title" => "Education",
    ]);
});

Route::get('/projects', function () {
    return view('template/project', [
        "title" => "Projects",
    ]);
});

Route::resource('posts',
'App\Http\Controllers\PostController');
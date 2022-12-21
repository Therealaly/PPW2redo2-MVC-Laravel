<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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

Auth::routes([
    'reset' => false,
    ]);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('auth/login');
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
    return view('template/project', ["title" => "Projects",]);
});

Route::resource('posts',
'App\Http\Controllers\PostController');

Route::resource('gallery', 'App\Http\Controllers\GalleryController');
/*
Route::get('/send-email',function(){
    $data = [
        'name' => 'Anthonio Adley',
        'body' => 'Testing Kirim Email'
    ];

    Mail::to('aadley85@gmail.com')->send(new SendMail($data));

    dd("Email Berhasil dikirim.");

});
*/

Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('kirim-email');
Route::get('/gallery2', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
Route::post('/post-email', [App\Http\Controllers\SendEmailController::class, 'store'])->name('post-email');

/*
Auth::routes();

Route::get('/projects', [App\Http\Controllers\PageController::class, 'index'])->name('projects');

/*
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/


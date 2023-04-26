<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dasbor', function () {
    return view('dasbor');
});

Route::get('/search', function () {
    return view('search');
});


Route::resource("/datas", DataController::class);

route::get('/login', [LoginController::class, 'create']);
route::get('/register', [RegisterController::class, 'create']);
route::post('/register', [RegisterController::class, 'store']);

// Route::post('/image/create', 'ImageController@create')->name('image.create');
// Route::get('/image', 'ImageController@index')->name('image.index');
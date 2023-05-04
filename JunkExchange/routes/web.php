<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;

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

Route::get('/home', function () {
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
})->middleware('auth');

Route::get('/kirimpengajuan', function () {
    return view('kirimpengajuan');
});


Route::get('/product/{id}', [ProductController::class, 'index']);


Route::resource("/catalog", CatalogController::class)->middleware('auth');


Route::resource("/datas", DataController::class)->middleware('auth');


route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);


route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

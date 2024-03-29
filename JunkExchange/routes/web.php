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

// Route::get('/dasbor', function () {
//     return view('dasbor');
// })->middleware('auth');

Route::get('/kirimpengajuan', function () {
    return view('kirimpengajuan');
});


Route::get('/product/detail/{id}', [ProductController::class, 'index']);
Route::post('/product/detail/{id}/store', [ProductController::class, 'store']); 

Route::resource("/catalog", CatalogController::class);


Route::resource("/datas", DataController::class)->middleware('auth');
// Route::resource("/dasbor", DataController::class)->middleware('auth');
Route::get("/dasbor", [DataController::class, 'dash'])->middleware('auth');
Route::get("/dasbor/approve{id}", [DataController::class, 'approval'])->middleware('auth');
Route::get("/dasbor/reject{id}", [DataController::class, 'rejected'])->middleware('auth');
// Route::get("/dasbor/reject", [DataController::class, 'rejecting'])->middleware('auth');



route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);


route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

Route::resource("/product", ProductController::class)->middleware('auth');
Route::get("/detailbarang", [ProductController::class, 'detail'])->middleware('auth');
<?php

use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/taisan', function () {
    return view('layout');
})->name('taisan');

Route::get('/phieunhap', function () {
    return view('layout');
})->name('phieunhap');

Route::get('/capphat', function () {
    return view('layout');
})->name('capphat');

Route::get('/baohanh', function () {
    return view('layout');
})->name('baohanh');
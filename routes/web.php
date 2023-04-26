<?php

use App\Http\Controllers\AssetDetailController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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

Route::get('/quanlytaisan', [AssetDetailController::class, 'index'])->name('quanlytaisan');

Route::get('/phieunhap', function () {
  return view('quanlyphieunhap');
})->name('phieunhap');

Route::get('/get-asset-detail', [AssetDetailController::class, 'index']);
Route::get('/fetch-data-asset/{ma_tai_san}', [AssetDetailController::class, 'asset_detail']);

Route::get('/search?ma_tai_san={ma_tai_san}?ma_phieu_nhap={ma_phieu_nhap}?
loai_tai_san={loai_tai_san}?ncc={ncc}?start_date={from_date}?end_date={end_date}?han_bao_hanh={han_bao_hanh}',
  [AssetDetailController::class, 'search']);

Route::get('/searchByName/{ten_tai_san}', [AssetDetailController::class, 'searchByName'])->name('searchByName');

Route::post('/updateAsset', [AssetDetailController::class, 'updateAsset'])->name('updateAsset');

Route::delete('/deleteAsset/{ma_tai_san}', [AssetDetailController::class, 'deleteAsset'])->name('deleteAsset');

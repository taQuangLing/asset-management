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

//Route::get('/fetch-data-asset/{ma_tai_san}', function ($ma_tai_san) {
//    $data = DB::table('asset_detail')
//        ->join('assets', 'asset_detail.ma_tai_san', '=', 'assets.ma_tai_san')
//        ->join('coupons', 'asset_detail.ma_phieu_nhap', '=', 'coupons.ma_phieu_nhap')
//        ->join('providers', 'assets.ma_ncc', '=', 'providers.ma_ncc')
//        ->join('guarantee_info', 'asset_detail.ma_tai_san', '=', 'guarantee_info.ma_tai_san')
//        ->join('liquidation_list', 'asset_detail.ma_tai_san', '=', 'liquidation_list.ma_tai_san')
//        ->select('asset_detail.ma_tai_san', 'asset_detail.ma_phieu_nhap', 'assets.ten_tai_san',
//            'assets.loai_tai_san', 'asset_detail.don_gia', 'assets.han_bao_hanh', 'assets.hang_san_xuat',
//            'providers.ten_ncc', 'providers.dia_chi', 'providers.sdt', 'providers.ma_ncc',
//            'coupons.ngay_nhap', 'assets.mo_ta', 'guarantee_info.trang_thai', 'liquidation_list.trnag_thai')
//        ->where('asset_detail.ma_tai_san', '=', $ma_tai_san)
//        ->get();
//    return response()->json($data);
//});



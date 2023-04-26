<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDO;

class AssetDetailController extends Controller
{
  public function index(): Factory|View|Application
  {
    $data = DB::table('asset_detail')
      ->join('assets', 'asset_detail.ma_tai_san', '=', 'assets.ma_tai_san')
      ->join('coupons', 'asset_detail.ma_phieu_nhap', '=', 'coupons.ma_phieu_nhap')
      ->join('providers', 'assets.ma_ncc', '=', 'providers.ma_ncc')
      ->select('asset_detail.ma_tai_san as Mã tài sản', 'asset_detail.ma_phieu_nhap as mã phiếu nhập',
        'assets.ten_tai_san as Tên tài sản', 'assets.loai_tai_san as Loại tài sản ',
        'asset_detail.don_gia as Đơn giá (VND)', 'asset_detail.so_luong as Số lượng',
        'assets.han_bao_hanh as Hạn bảo hành', 'providers.ten_ncc as Tên NCC')
      ->groupBy('asset_detail.ma_tai_san', 'asset_detail.ma_phieu_nhap', 'asset_detail.don_gia', 'asset_detail.so_luong')
      ->distinct()
      ->get();
    return view('layout', ['data' => $data]);
  }

  public function asset_detail($ma_tai_san): JsonResponse
  {
    try {
      $data = DB::table('asset_detail')
        ->join('assets', 'asset_detail.ma_tai_san', '=', 'assets.ma_tai_san')
        ->join('coupons', 'asset_detail.ma_phieu_nhap', '=', 'coupons.ma_phieu_nhap')
        ->join('providers', 'providers.ma_ncc', '=', 'assets.ma_ncc')
        ->join('guarantee_info', 'asset_detail.ma_tai_san', '=', 'guarantee_info.ma_tai_san')
        ->join('liquidation_list', 'asset_detail.ma_tai_san', '=', 'liquidation_list.ma_tai_san')
        ->select('asset_detail.ma_tai_san', 'asset_detail.ma_phieu_nhap', 'assets.ten_tai_san',
          'assets.loai_tai_san', 'asset_detail.don_gia', 'assets.han_bao_hanh', 'assets.hang_san_xuat',
          'providers.ten_ncc', 'providers.dia_chi_ncc', 'providers.sdt_ncc', 'providers.ma_ncc',
          'coupons.ngay_nhap', 'assets.mo_ta', 'guarantee_info.trang_thai as tinh_trang', 'liquidation_list.trang_thai')
        ->where('asset_detail.ma_tai_san', '=', $ma_tai_san)
        ->limit(1)
        ->get();
      return response()->json($data);
    } catch (\Exception $e) {
      echo $e;
    }
  }

  public function search($ma_tai_san, $ma_phieu_nhap, $loai_tai_san, $ncc, $start_date, $end_date, $han_bao_hanh)
  {

  }

  public function searchByName($ten_tai_san)
  {

  }

  public function updateAsset(Request $request)
  {
//    $name = $request->input('name');
//    $email = $request->input('email');
  }

  public function deleteAsset($ma_tai_san)
  {

  }

}

<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Asset;
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

  public function search($ma_tai_san = null, $ma_phieu_nhap = null, $loai_tai_san = null, $ncc = null, $from_date = null, $end_date = null, $han_bao_hanh = null)

  {
    $query = DB::table('asset_detail')
      ->join('assets', 'asset_detail.ma_tai_san', '=', 'assets.ma_tai_san')
      ->join('providers', 'assets.ma_ncc', '=', 'providers.ma_ncc');

    if ($ma_tai_san) {
      $query->where('asset_detail.ma_tai_san', '=', $ma_tai_san);
    }
    if ($ma_phieu_nhap) {
      $query->where('asset_detail.ma_phieu_nhap', '=', $ma_phieu_nhap);
    }
    if ($loai_tai_san) {
      $query->where('assets.loai_tai_san', '=', $loai_tai_san);
    }
    if ($ncc) {
      $query->where('providers.ten_ncc', 'like', '%' . $ncc . '%');
    }
    if ($from_date) {
      $query->where('assets.han_bao_hanh', '>=', $from_date);
    }
    if ($end_date) {
      $query->where('assets.han_bao_hanh', '<=', $end_date);
    }

    $query
      ->select('asset_detail.ma_tai_san as Mã tài sản', 'asset_detail.ma_phieu_nhap as mã phiếu nhập',
        'assets.ten_tai_san as Tên tài sản', 'assets.loai_tai_san as Loại tài sản ',
        'asset_detail.don_gia as Đơn giá (VND)', 'asset_detail.so_luong as Số lượng',
        'assets.han_bao_hanh as Hạn bảo hành', 'providers.ten_ncc as Tên NCC');

    $result = $query->get();
    return response()->json($result);
  }

  public function searchByName($ten_tai_san)
  {

  }

  public function updateAsset(Request $request)
  {
    $ma_tai_san = $request->json('ma_tai_san');
    $ten_tai_san = $request->json('ten_tai_san');
    $gia_tien = $request->json('gia_tien');
    $loai_tai_san = $request->json('loai_tai_san');
    $hang_sx = $request->json('hang_sx');
    $han_bao_hanh = $request->json('han_bao_hanh');
    $kich_hoat = $request->json('kich_hoat');
    $tinh_trang = $request->json('tinh_trang');
    $mota = $request->json('mota');
    try {
      $asset = DB::table('asset_detail')
        ->join('assets', 'asset_detail.ma_tai_san', '=', 'assets.ma_tai_san')
        ->join('coupons', 'asset_detail.ma_phieu_nhap', '=', 'coupons.ma_phieu_nhap')
        ->join('providers', 'providers.ma_ncc', '=', 'assets.ma_ncc')
        ->join('guarantee_info', 'asset_detail.ma_tai_san', '=', 'guarantee_info.ma_tai_san')
        ->join('liquidation_list', 'asset_detail.ma_tai_san', '=', 'liquidation_list.ma_tai_san')
        ->where('asset_detail.ma_tai_san', '=', $ma_tai_san)
        ->update([
          'ten_tai_san' => $ten_tai_san,
          'don_gia' => $gia_tien,
          'loai_tai_san' => $loai_tai_san,
          'hang_san_xuat' => $hang_sx,
          'han_bao_hanh' => $han_bao_hanh,
          'guarantee_info.trang_thai' => $kich_hoat,
          'liquidation_list.trang_thai' => $tinh_trang,
          'assets.mo_ta' => $mota
        ]);
      return response()->json(['message' => 'Asset updated']);
    } catch (\Exception $exception) {
      return response()->json(['message' => 'Asset fail'], 500);
    }
  }

  public function deleteAsset($ma_tai_san)
  {
    $data = DB::table('assets')
      ->where('ma_tai_san', '=', $ma_tai_san)
      ->delete();
    return response()->json(['message' => 'Asset deleted'], 200);
  }

}

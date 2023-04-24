<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetDetail extends Model
{
    use HasFactory;
    protected $table = 'asset_detail';

    public $incrementing = false;

    protected $fillable = [
        'ma_phieu_nhap',
        'ma_tai_san',
        'don_gia',
        'so_luong',
    ];

    public function taiSan()
    {
        return $this->belongsTo(Asset::class, 'ma_tai_san', 'ma_tai_san');
    }

    public function phieuNhap()
    {
        return $this->belongsTo(Coupon::class, 'ma_phieu_nhap', 'ma_phieu_nhap');
    }
}

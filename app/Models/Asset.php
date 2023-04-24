<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'assets';

    protected $primaryKey = 'ma_tai_san';

    public $incrementing = false;

    protected $fillable = [
        'ma_tai_san',
        'ma_ncc',
        'ten_tai_san',
        'loai_tai_san',
        'hang_san_xuat',
        'han_bao_hanh',
        'mo_ta',
    ];

    public function nhaCungCap()
    {
        return $this->belongsTo(Provider::class, 'ma_ncc', 'ma_ncc');
    }

    public function chiTietTaiSans()
    {
        return $this->hasMany(AssetDetail::class, 'ma_tai_san', 'ma_tai_san');
    }

    public function thongTinBaoHanhs()
    {
        return $this->hasMany(GuaranteeInfo::class, 'ma_tai_san', 'ma_tai_san');
    }

    public function thongTinCapPhats()
    {
        return $this->hasMany(DispensingInfo::class, 'ma_tai_san', 'ma_tai_san');
    }

    public function danhSachThanhLys()
    {
        return $this->hasMany(LiquidationList::class, 'ma_tai_san', 'ma_tai_san');
    }
}

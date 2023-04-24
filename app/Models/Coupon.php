<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';

    protected $primaryKey = 'ma_phieu_nhap';

    public $incrementing = false;

    protected $fillable = [
        'ma_phieu_nhap',
        'tong_gia',
        'ngay_nhap',
        'ma_nhan_vien',
    ];

    public function chiTietTaiSans()
    {
        return $this->hasMany(AssetDetail::class, 'ma_phieu_nhap', 'ma_phieu_nhap');
    }

    public function nhanVien()
    {
        return $this->belongsTo(Staffs::class, 'ma_nhan_vien', 'ma_nhan_vien');
    }
}

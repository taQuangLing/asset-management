<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiquidationList extends Model
{
    use HasFactory;

    protected $table = 'liquidation_list';
    protected $primaryKey = 'ma_ds';
    public $incrementing = false;

    protected $fillable = [
        'ma_ds',
        'ma_tai_san',
        'gia_tri_sau_khau_hao',
        'trang_thai',
        'ngay_lap',
        'ma_nhan_vien',
    ];

    public function nhanVien()
    {
        return $this->belongsTo(Staffs::class, 'ma_nhan_vien', 'ma_nhan_vien');
    }

    public function taiSan()
    {
        return $this->belongsTo(Asset::class, 'ma_tai_san', 'ma_tai_san');
    }
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuaranteeInfo extends Model
{
    use HasFactory;

    protected $table = 'guarantee_info';
    protected $primaryKey = 'ma_bao_hanh';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ma_bao_hanh',
        'ma_tai_san',
        'ma_nhan_vien',
        'ngay_tiep_nhan_BH',
        'ngay_du_kien_ban_giao',
        'ngay_ban_giao',
        'tinh_trang_TS_truoc_BH',
        'tinh_trang_TS_sau_BH',
        'trang_thai',
        'chi_phi_BH',
        'mo_ta',
    ];

    public function taiSan()
    {
        return $this->belongsTo(Asset::class, 'ma_tai_san', 'ma_tai_san');
    }

    public function nhanVien()
    {
        return $this->belongsTo(Staff::class, 'ma_nhan_vien', 'ma_nhan_vien');
    }
}

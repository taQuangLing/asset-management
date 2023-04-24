<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispensingInfo extends Model
{
    use HasFactory;

    protected $table = 'dispensing_info';
    protected  $primaryKey = 'ma_cap_nhat';
    public $incrementing = false;

    protected $fillable = [
        'ma_cap_nhat',
        'ma_tai_san',
        'ngay_cap',
        'ma_nhan_vien',
        'doi_tuong',
    ];

    public function taiSan()
    {
        return $this->belongsTo(Asset::class, 'ma_tai_san', 'ma_tai_san');
    }

    public function nhanVien()
    {
        return $this->belongsTo(Staffs::class, 'ma_nhan_vien', 'ma_nhan_vien');
    }
}

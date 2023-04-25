<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';
    protected $primaryKey = 'ma_nhan_vien';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ma_nhan_vien',
        'ten',
        'ngay_sinh',
        'cccd',
        'chuc_vu',
        'phong_ban',
        'sdt',
        'email',
        'ma_tai_khoan'
    ];

    public function taiKhoan()
    {
        return $this->hasMany(Account::class, 'ma_tai_khoan', 'ma_tai_khoan');
    }
}

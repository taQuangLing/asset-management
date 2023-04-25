<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';

    protected $primaryKey = 'ma_ncc';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ma_ncc',
        'ten_ncc',
        'dia_chi_ncc',
        'sdt_ncc',
    ];

    public function taiSan()
    {
        return $this->hasMany(Asset::class, 'ma_ncc', 'ma_ncc');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_detail', function (Blueprint $table) {
            $table->char('ma_phieu_nhap', 10);
            $table->char('ma_tai_san', 10);
            $table->bigInteger('don_gia');
            $table->integer('so_luong');
            $table->primary(['ma_phieu_nhap', 'ma_tai_san']);
            $table->foreign('ma_phieu_nhap')->references('ma_phieu_nhap')->on('coupons');
            $table->foreign('ma_tai_san')->references('ma_tai_san')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_detail');
    }
};

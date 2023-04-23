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
        Schema::create('liquidation_list', function (Blueprint $table) {
            $table->char('ma_ds', 10)->primary();
            $table->char('ma_tai_san', 10);
            $table->bigInteger('gia_tri_sau_khau_hao');
            $table->tinyInteger('trang_thai');
            $table->dateTime('ngay_lap');
            $table->char('ma_nhan_vien', 10);
            $table->foreign('ma_tai_san')->references('ma_tai_san')->on('assets');
            $table->foreign('ma_nhan_vien')->references('ma_nhan_vien')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liquidation_list');
    }
};

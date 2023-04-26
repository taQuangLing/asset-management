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
        Schema::create('coupons', function (Blueprint $table) {
            $table->char('ma_phieu_nhap', 10)->primary();
            $table->bigInteger('tong_gia');
            $table->dateTime('ngay_nhap');
            $table->char('ma_nhan_vien', 10);
            $table->foreign('ma_nhan_vien')->references('ma_nhan_vien')->on('staffs')->onDelete('cascade')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};

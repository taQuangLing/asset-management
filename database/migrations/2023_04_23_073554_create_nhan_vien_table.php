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
        Schema::create('staffs', function (Blueprint $table) {
            $table->char('ma_nhan_vien', 10)->primary();
            $table->string('ten', 100);
            $table->date('ngay_sinh');
            $table->string('cccd', 20);
            $table->string('chuc_vu', 30);
            $table->string('phong_ban', 20);
            $table->char('sdt', 10);
            $table->string('email', 100);
            $table->string('ma_tai_khoan', 50);
            $table->foreign('ma_tai_khoan')->references('ma_tai_khoan')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
};

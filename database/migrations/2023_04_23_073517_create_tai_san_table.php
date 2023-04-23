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
        Schema::create('assets', function (Blueprint $table) {
            $table->char('ma_tai_san', 10)->primary();
            $table->char('ma_ncc', 10);
            $table->string('ten_tai_san', 100);
            $table->string('loai_tai_san', 30);
            $table->string('hang_san_xuat', 100);
            $table->dateTime('han_bao_hanh');
            $table->text('mo_ta');
            $table->foreign('ma_ncc')->references('ma_ncc')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
};

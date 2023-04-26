<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('guarantee_info', function (Blueprint $table) {
      $table->char('ma_bao_hanh', 10)->primary();
      $table->char('ma_tai_san', 10);
      $table->char('ma_nhan_vien', 10);
      $table->dateTime('ngay_tiep_nhan_BH');
      $table->dateTime('ngay_du_kien_ban_giao');
      $table->dateTime('ngay_ban_giao');
      $table->text('tinh_trang_TS_truoc_BH');
      $table->text('tinh_trang_TS_sau_BH');
      $table->tinyInteger('trang_thai');
      $table->bigInteger('chi_phi_BH');
      $table->text('mo_ta');
      $table->foreign('ma_tai_san')->references('ma_tai_san')->on('assets')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->foreign('ma_nhan_vien')->references('ma_nhan_vien')->on('staffs')
        ->onDelete('cascade')
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
    Schema::dropIfExists('guarantee_info');
  }
};

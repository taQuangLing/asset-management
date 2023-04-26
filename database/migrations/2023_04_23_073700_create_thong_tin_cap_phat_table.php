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
    Schema::create('dispensing_info', function (Blueprint $table) {
      $table->char('ma_cap_phat', 10)->primary();
      $table->char('ma_tai_san', 10);
      $table->dateTime('ngay_cap');
      $table->char('ma_nhan_vien', 10);
      $table->string('doi_tuong', 100);
      $table->foreign('ma_tai_san')->references('ma_tai_san')->on('assets')->onDelete('cascade')
        ->onUpdate('cascade');
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
    Schema::dropIfExists('dispensing_info');
  }
};

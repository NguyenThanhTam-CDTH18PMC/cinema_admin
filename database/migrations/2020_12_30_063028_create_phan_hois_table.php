<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanHoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_hois', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Noidung');
            $table->date('Ngaydang');
            $table->integer('taikhoan_id')->unsigned()->index();
            $table->integer('binhluan_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('binhluan_id')->references('id')->on('binh_luans');
            $table->foreign('taikhoan_id')->references('id')->on('tai_khoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phan_hois');
    }
}

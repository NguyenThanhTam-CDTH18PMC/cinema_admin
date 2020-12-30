<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhLuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Noidung');
            $table->datetime('Ngaydang');
            $table->integer('taikhoan_id')->unsigned()->index();
            $table->integer('phim_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('taikhoan_id')->references('id')->on('tai_khoans');
            $table->foreign('phim_id')->references('id')->on('phims');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binh_luans');
    }
}

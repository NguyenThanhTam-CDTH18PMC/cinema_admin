<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tenphim');
            $table->string('Hinhanh')->unique();
            $table->integer('Diem')->unsigned()->default(0);
            $table->text('Mota');
            $table->text('Ds_dienvien');
            $table->string('Trailer');
            $table->time('ThoiLuong');
            $table->integer('dinhdang_id')->unsigned()->index();
            $table->integer('daodien_id')->unsigned()->index();
            $table->integer('trangthai_id')->unsigned()->index();
            $table->integer('theloai_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('dinhdang_id')->references('id')->on('dinh_dangs');
            $table->foreign('daodien_id')->references('id')->on('dao_diens');
            $table->foreign('trangthai_id')->references('id')->on('trang_thais');
            $table->foreign('theloai_id')->references('id')->on('the_loais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phims');
    }
}

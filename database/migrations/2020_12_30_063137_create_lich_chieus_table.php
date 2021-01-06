<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichChieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_chieus', function (Blueprint $table) {
            $table->integer('phim_id')->unsigned()->index();
            $table->integer('rap_id')->unsigned()->index();
            $table->integer('suatchieu_id')->unsigned()->index();
            $table->date('NgayChieu');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('suatchieu_id')->references('id')->on('suat_chieus');
            $table->foreign('phim_id')->references('id')->on('phims');
            $table->foreign('rap_id')->references('id')->on('raps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_chieus');
    }
}

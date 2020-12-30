<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiGhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_ghes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tenloaighe')->unique();
            $table->integer('gia_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('gia_id')->references('id')->on('gias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_ghes');
    }
}

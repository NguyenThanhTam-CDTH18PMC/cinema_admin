<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinhDangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinh_dangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Loaidinhdang')->unique();
            $table->integer('Gia_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('Gia_id')->references('id')->on('gias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dinh_dangs');
    }
}

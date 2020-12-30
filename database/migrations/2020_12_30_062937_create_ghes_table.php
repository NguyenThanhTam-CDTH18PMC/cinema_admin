<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Soghe');
            $table->integer('Loaighe_id')->unsigned()->index();
            $table->integer('Trangthai');
            $table->integer('rap_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('Loaighe_id')->references('id')->on('loai_ghes');
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
        Schema::dropIfExists('ghes');
    }
}

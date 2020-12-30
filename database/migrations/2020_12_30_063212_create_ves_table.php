<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dsve_id')->unsigned()->index();
            $table->integer('ghe_id')->unsigned()->index();
            $table->integer('phim_id')->unsigned()->index();
            $table->double('Thanhtien')->unsigned()->defalt(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ghe_id')->references('id')->on('ghes');
            $table->foreign('phim_id')->references('id')->on('phims');
            $table->foreign('dsve_id')->references('id')->on('ds_ves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ves');
    }
}

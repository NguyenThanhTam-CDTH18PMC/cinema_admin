<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDsVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ds_ves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Soluong')->unsigned()->default(0);
            $table->double('Tongtien')->unsigned()->default(0);
            $table->integer('taikhoan_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('ds_ves');
    }
}

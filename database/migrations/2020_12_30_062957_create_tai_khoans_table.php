<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten_TK');
            $table->string('HoTen');
            $table->string('Matkhau',200);
            $table->string('Email')->unique();
            $table->date('Ngaysinh');
            $table->string('Phai',5);
            $table->string('SDT',10)->unique();
            $table->text('Diachi');
            $table->integer('Admin')->default(0);
            $table->integer('Tien_TK')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoans');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorezTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksesoris', function (Blueprint $table) {
            $table->increments('acc_id');
            $table->string('nama')->unique();
            $table->string('deskripsi');
            $table->integer('harga');
            $table->string('type');
            $table->string('brand');
            $table->string('inserter');
            $table->timestamps();
        });
        Schema::create('komponen', function (Blueprint $table) {
            $table->increments('kom_id');
            $table->string('nama')->unique();
            $table->string('type');
            $table->string('brand');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->string('inserter');
            $table->timestamps();
        });
        Schema::create('member', function (Blueprint $table){
            $table->increments('member_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('pin');
            $table->timestamps();
        });
        Schema::create('notebook', function (Blueprint $table) {
            $table->increments('laptop_id');
            $table->string('nama')->unique();
            $table->string('prosesor');
            $table->string('os');
            $table->string('storage');
            $table->string('ram');
            $table->string('graphic');
            $table->string('koneksi');
            $table->string('kamera');
            $table->string('display');
            $table->string('warna');
            $table->integer('harga');
            $table->string('brand');
            $table->string('inserter');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aksesoris');
        Schema::dropIfExists('komponen');
        Schema::dropIfExists('member');
        Schema::dropIfExists('notebook');
    }
}

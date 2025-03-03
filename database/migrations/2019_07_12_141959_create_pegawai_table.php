<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nomor_pegawai')->unique()->nullable();
            $table->string('nama_pegawai');
            $table->string('password')->nullable();
            $table->string('foto_profil')->default("");
            $table->string('jenis_kelamin');
            $table->enum('validitas', ['valid','tidak valid'])->default('tidak valid');
            $table->string('email')->unique()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('pegawai');
    }
}

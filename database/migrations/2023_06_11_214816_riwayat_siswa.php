<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RiwayatSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nis');
            $table->integer('semester');
            $table->integer('nilai_rata');
            $table->string('kelas', 10);
            $table->enum('status_siswa', ['Naik Kelas', 'Tinggal Kelas']);
        });
        Schema::table('riwayat_siswa', function (Blueprint $table) {
            $table->foreign('nis')->references('nis')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_siswa');
        Schema::disableForeignKeyConstraints();
    }
}

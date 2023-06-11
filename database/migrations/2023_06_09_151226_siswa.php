<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            // Data Pribadi Siswa
            $table->string('nis', 15)->primary();
            $table->string('nama_lengkap', 255);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->enum('agama', ['Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindhu', 'Budha', 'Konghucu']);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->enum('status_anak', ['-', 'Yatim', 'Piatu', 'Yatim Piatu'])->default('-');
            // Keterangan Tempat Tinggal
            $table->string('alamat', 255);
            $table->integer('kodepos');
            $table->string('no_telp', 16);
            $table->string('email', 100);
            $table->integer('jarak');
            // Keterangan Kesehatan
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            // Keterangan Pendidikan
            $table->string('lulusan_dari', 100);
            $table->integer('lama_belajar');
            $table->string('pindahan_dari')->default('-');
            $table->string('alasan')->default('-');
            $table->string('kelas', 10);
            $table->string('program');
            $table->date('tanggal_diterima');
            // Data Ayah Kandung
            $table->string('nama_ayah', 255);
            $table->string('tempat_lahir_ayah', 100);
            $table->date('tanggal_lahir_ayah');
            $table->enum('agama_ayah', ['Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindhu', 'Budha', 'Konghucu']);
            $table->string('kewarganegaraan_ayah', 100);
            $table->enum('pendidikan_ayah', [
                'Tidak / Belum Sekolah', 'SD / Sederajat', 'Belum Tamat SD / Sederajat', 'SLTP / Sederajat', 'SLTA / Sederajat', 'Diploma IV / Strata I', 'Diploma I / II', 'Akademi / Diploma III / S. Muda', 'Strata II', 'Strata III'
            ])->default('SLTA / Sederajat');
            $table->string('profesi_ayah', 255);
            $table->string('alamat_ayah');
            $table->string('no_telp_ayah');
            // Data Ibu Kandung
            $table->string('nama_ibu', 255);
            $table->string('tempat_lahir_ibu', 100);
            $table->date('tanggal_lahir_ibu');
            $table->enum('agama_ibu', ['Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindhu', 'Budha', 'Konghucu']);
            $table->string('kewarganegaraan_ibu', 100);
            $table->enum('pendidikan_ibu', [
                'Tidak / Belum Sekolah', 'SD / Sederajat', 'Belum Tamat SD / Sederajat', 'SLTP / Sederajat', 'SLTA / Sederajat', 'Diploma IV / Strata I', 'Diploma I / II', 'Akademi / Diploma III / S. Muda', 'Strata II', 'Strata III'
            ])->default('SLTA / Sederajat');
            $table->string('profesi_ibu', 255);
            $table->string('alamat_ibu');
            $table->string('no_telp_ibu');

            // Keterangan Lain
            $table->enum('status', ['Tamat', 'Belum Tamat']);
            $table->string('avatar', 255)->default('avatar.png');
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
        Schema::dropIfExists('siswa');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            // Data Pribadi Siswa
            'nis' => 20002011434,
            'nama_lengkap' => 'Aditya Wira Utama',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Sidoarjo',
            'tanggal_lahir' => Carbon::now(),
            'agama' => 'Islam',
            'anak_ke' => 2,
            'jumlah_saudara' => 1,
            'status_anak' => '-',
            // Keterangan Tempat tinggal
            'alamat' => 'Ds. Kejapanan Gang Harum Manis RT.01 RW.26, Gempol, Pasuruan',
            'kodepos' => 67155,
            'no_telp' => '085157127155',
            'email' =>  'wiraaditya@gmail.com',
            'jarak' => 13,
            // Keterangan kesehatan
            'golongan_darah' => 'O',
            'tinggi_badan' => 175,
            'berat_badan' => 91,
            // keterangan pendidikan
            'lulusan_dari' => 'SMPN 1 Gempol',
            'lama_belajar' => 3,
            'pindahan_dari' => '-',
            'alasan' => '-',
            'kelas' => 'X-IPS-1',
            'program' => 'Ilmu Pengetahuan Sosial',
            'tanggal_diterima' => Carbon::now(),
            // Data Ayah Kandung
            'nama_ayah' => 'Tejo Wibowo',
            'tempat_lahir_ayah' => 'Semarang',
            'tanggal_lahir_ayah' => Carbon::now(),
            'agama_ayah' => 'Islam',
            'kewarganegaraan_ayah' => 'INDONESIA',
            'pendidikan_ayah' => 'SLTA / Sederajat',
            'profesi_ayah' => 'TNI-AL',
            'alamat_ayah' => 'Ds. Kejapanan Gang Harum Manis RT.01 RW.26, Kec. Gempol, Kab. Pasuruan',
            'no_telp_ayah' => '08888080808',
            // Data Ibu Kandung
            'nama_ibu' => 'Suryawati',
            'tempat_lahir_ibu' => 'Pasuruan',
            'tanggal_lahir_ibu' => Carbon::now(),
            'agama_ibu' => 'Islam',
            'kewarganegaraan_ibu' => 'INDONESIA',
            'pendidikan_ibu' => 'Diploma IV / Strata I',
            'profesi_ibu' => 'PNS',
            'alamat_ibu' => 'Ds. Kejapanan Gang Harum Manis RT.01 RW.26, Kec. Gempol, Kab. Pasuruan',
            'no_telp_ibu' => '08888080808',
            // Keterangan Lain
            'status' => 'Belum Tamat',
            'avatar' => 'default.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

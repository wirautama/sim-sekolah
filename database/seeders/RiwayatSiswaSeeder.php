<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riwayat_siswa')->insert([
            'nis' => 20002011434,
            'semester' => 1,
            'nilai_rata' => 80,
            'kelas' => 'X-IPS-1',
            'status_siswa' => 'Naik Kelas'
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RiwayatSiswaModel extends Model
{
    use HasFactory;
    protected $table = 'riwayat_siswa';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nis',
        'semester',
        'nilai_rata',
        'kelas',
        'status'
    ];

    public function getRiwayat($nis)
    {
        return DB::table('riwayat_siswa')
            ->join('siswa', 'riwayat_siswa.nis', '=', 'siswa.nis')
            ->where('siswa.nis', '=', $nis)->get();
    }
}

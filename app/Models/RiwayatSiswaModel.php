<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatSiswaModel extends Model
{
    use HasFactory;
    protected $table = 'riwayat_siswa';
    protected $primaryKey = 'nis';
    public $timestamps = true;
    protected $fillable = [
        'nis',
        'semester',
        'nilai_rata',
        'kelas',
        'status'
    ];
}

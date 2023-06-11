<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    public $timestamps = true;
    protected $fillable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'anak_ke',
        'jumlah_saudara',
        'status_anak',
        'alamat',
        'kodepos',
        'no_telp',
        'email',
        'jarak',
        'golongan_darah',
        'tinggi_badan',
        'berat_badan',
        'lulusan_dari',
        'lama_belajar',
        'pindahan_dari',
        'alasan',
        'kelas',
        'program',
        'tanggal_diterima',
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'agama_ayah',
        'kewarganegaraan_ayah',
        'pendidikan_ayah',
        'profesi_ayah',
        'alamat_ayah',
        'no_telp_ayah',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'agama_ibu',
        'kewarganegaraan_ibu',
        'pendidikan_ibu',
        'profesi_ibu',
        'alamat_ibu',
        'no_telp_ibu',
        'status',
        'avatar'

    ];

    public function addData($siswa)
    {

        DB::table('siswa')->insert($siswa);
    }
}

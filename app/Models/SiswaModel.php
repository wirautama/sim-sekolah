<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_siswa';
    protected $primaryKey = 'nis';
    public $timestamps = true;

    public function allData()
    {
        return DB::table('tbl_siswa')->get();
    }

    public function detailData($nis)
    {
        return DB::table('tbl_siswa')->where('nis', $nis)->first();
    }
}

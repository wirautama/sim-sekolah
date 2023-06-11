<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    protected $SiswaModel;
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'siswa' => SiswaModel::all(),
        ];
        return view('siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // Data Diri
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'status_anak' => 'required',
            // Keterangan tempat tinggal
            'alamat' => 'required',
            'kodepos' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'jarak' => 'required',
            // Keterangan Kesehatan
            'golongan_darah' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            // Keterangan Pendidikan
            'lulusan_dari' => 'required',
            'lama_belajar' => 'required',
            'pindahan_dari',
            'alasan',
            'kelas' => 'required',
            'program' => 'required',
            'tanggal_diterima' => 'required',
            // Data Ayah Kandung
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'agama_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'profesi_ayah' => 'required',
            'alamat_ayah' => 'required',
            'no_telp_ayah' => 'required',
            // Data Ayah Kandung
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'agama_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'profesi_ibu' => 'required',
            'alamat_ibu' => 'required',
            'no_telp_ibu' => 'required',
        ]);

        $siswa = SiswaModel::create([
            // Data diri
            'nis' => Request()->nis,
            'nama_lengkap' => Request()->nama_lengkap,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'agama' => Request()->agama,
            'anak_ke' => Request()->anak_ke,
            'jumlah_saudara' => Request()->jumlah_saudara,
            'status_anak' => Request()->status_anak,
            // Keterangan Tempat Tinggal
            'alamat' => Request()->alamat,
            'kodepos' => Request()->kodepos,
            'no_telp' => Request()->no_telp,
            'email' => Request()->email,
            'jarak' => Request()->jarak,
            // Keterangan Kesehatan
            'golongan_darah' => Request()->golongan_darah,
            'tinggi_badan' => Request()->tinggi_badan,
            'berat_badan' => Request()->berat_badan,
            // Keterangan Pendidikan
            'lulusan_dari' => Request()->lulusan_dari,
            'lama_belajar' => Request()->lama_belajar,
            'pindahan_dari' => Request()->pindahan_dari,
            'alasan' => Request()->alasan,
            'kelas' => Request()->kelas,
            'program' => Request()->program_studi,
            'tanggal_diterima' => Request()->tanggal_diterima,
            // Data Ayah Kandung
            'nama_ayah' => Request()->nama_ayah,
            'tempat_lahir_ayah' => Request()->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => Request()->tanggal_lahir_ayah,
            'agama_ayah' => Request()->agama_ayah,
            'kewarganegaraan_ayah' => Request()->kewarganegaraan_ayah,
            'pendidikan_ayah' => Request()->pendidikan_ayah,
            'profesi_ayah' => Request()->profesi_ayah,
            'alamat_ayah' => Request()->alamat_ayah,
            'no_telp_ayah' => Request()->no_telp_ayah,
            // Data ibu Kandung
            'nama_ibu' => Request()->nama_ibu,
            'tempat_lahir_ibu' => Request()->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => Request()->tanggal_lahir_ibu,
            'agama_ibu' => Request()->agama_ibu,
            'kewarganegaraan_ibu' => Request()->kewarganegaraan_ibu,
            'pendidikan_ibu' => Request()->pendidikan_ibu,
            'profesi_ibu' => Request()->profesi_ibu,
            'alamat_ibu' => Request()->alamat_ibu,
            'no_telp_ibu' => Request()->no_telp_ibu,

        ]);

        if ($siswa) {
            return redirect()->route('siswa.index')->with(['success' => 'Data Baru Berhasil Dibuat']);
        } else {
            return redirect()->route('siswa.index')->with(['error' => 'Data Baru Gagal Dibuat']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {

        $siswa = SiswaModel::find($nis);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        $siswa = SiswaModel::findOrFail($nis);
        $siswa->delete();

        if ($siswa) {
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect()->route('siswa.index')->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}

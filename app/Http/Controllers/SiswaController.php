<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

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

        $formFields = $request->validate([
            // Data Diri
            'nis' => 'required|unique:siswa',
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
            'avatar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ]);

        $this->SiswaModel->save();
        dd($this->SiswaModel->save());
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
        $siswa = SiswaModel::find($nis);

        return view('siswa.edit', compact('siswa'));
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

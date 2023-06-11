<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SiswaController extends Controller
{
    protected $SiswaModel;
    // public function __construct()
    // {
    //     $this->SiswaModel = new SiswaModel();
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $siswa = SiswaModel::all();
        return view('siswa.index', compact('siswa'));
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

        // $request->validate([
        //     // Data Diri
        //     'nis' => 'required|unique:siswa',
        //     'nama_lengkap' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'agama' => 'required',
        //     'anak_ke' => 'required',
        //     'jumlah_saudara' => 'required',
        //     'status_anak' => 'required',
        //     // Keterangan tempat tinggal
        //     'alamat' => 'required',
        //     'kodepos' => 'required',
        //     'no_telp' => 'required',
        //     'email' => 'required',
        //     'jarak' => 'required',
        //     // Keterangan Kesehatan
        //     'golongan_darah' => 'required',
        //     'tinggi_badan' => 'required',
        //     'berat_badan' => 'required',
        //     // Keterangan Pendidikan
        //     'lulusan_dari' => 'required',
        //     'lama_belajar' => 'required',
        //     'pindahan_dari',
        //     'alasan',
        //     'kelas' => 'required',
        //     'program' => 'required',
        //     'tanggal_diterima' => 'required',
        //     // Data Ayah Kandung
        //     'nama_ayah' => 'required',
        //     'tempat_lahir_ayah' => 'required',
        //     'tanggal_lahir_ayah' => 'required',
        //     'agama_ayah' => 'required',
        //     'kewarganegaraan_ayah' => 'required',
        //     'pendidikan_ayah' => 'required',
        //     'profesi_ayah' => 'required',
        //     'alamat_ayah' => 'required',
        //     'no_telp_ayah' => 'required',
        //     // Data Ayah Kandung
        //     'nama_ibu' => 'required',
        //     'tempat_lahir_ibu' => 'required',
        //     'tanggal_lahir_ibu' => 'required',
        //     'agama_ibu' => 'required',
        //     'kewarganegaraan_ibu' => 'required',
        //     'pendidikan_ibu' => 'required',
        //     'profesi_ibu' => 'required',
        //     'alamat_ibu' => 'required',
        //     'no_telp_ibu' => 'required',
        //     'avatar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:1024'
        // ]);

        SiswaModel::create([
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'jumlah_saudara' => $request->jumlah_saudara,
            'status_anak' => $request->status_anak,
            'alamat' => $request->alamat,
            'kodepos' => $request->kodepos,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'jarak' => $request->jarak,
            'golongan_darah' => $request->golongan_darah,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'lulusan_dari' => $request->lulusan_dari,
            'lama_belajar' => $request->lama_belajar,
            'pindahan_dari' => $request->pindahan_dari,
            'alasan' => $request->alasan,
            'kelas' => $request->kelas,
            'program' => $request->program,
            'tanggal_diterima' => $request->tanggal_diterima,
            'nama_ayah' => $request->nama_ayah,
            'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'agama_ayah' => $request->agama_ayah,
            'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'profesi_ayah' => $request->profesi_ayah,
            'alamat_ayah' => $request->alamat_ayah,
            'no_telp_ayah' => $request->no_telp_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'agama_ibu' => $request->agama_ibu,
            'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'profesi_ibu' => $request->profesi_ibu,
            'alamat_ibu' => $request->alamat_ibu,
            'no_telp_ibu' => $request->no_telp_ibu,
            'avatar' => $request->avatar
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Disimpan');
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
        $update = [
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'jumlah_saudara' => $request->jumlah_saudara,
            'status_anak' => $request->status_anak,
            'alamat' => $request->alamat,
            'kodepos' => $request->kodepos,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'jarak' => $request->jarak,
            'golongan_darah' => $request->golongan_darah,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'lulusan_dari' => $request->lulusan_dari,
            'lama_belajar' => $request->lama_belajar,
            'pindahan_dari' => $request->pindahan_dari,
            'alasan' => $request->alasan,
            'kelas' => $request->kelas,
            'program' => $request->program,
            'tanggal_diterima' => $request->tanggal_diterima,
            'nama_ayah' => $request->nama_ayah,
            'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'agama_ayah' => $request->agama_ayah,
            'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'profesi_ayah' => $request->profesi_ayah,
            'alamat_ayah' => $request->alamat_ayah,
            'no_telp_ayah' => $request->no_telp_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'agama_ibu' => $request->agama_ibu,
            'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'profesi_ibu' => $request->profesi_ibu,
            'alamat_ibu' => $request->alamat_ibu,
            'no_telp_ibu' => $request->no_telp_ibu,
            'avatar' => $request->avatar
        ];
        SiswaModel::where('nis', $nis)->update($update);
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        $siswa = SiswaModel::destroy($nis);

        if ($siswa) {
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect()->route('siswa.index')->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}

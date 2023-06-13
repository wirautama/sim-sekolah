<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use App\Models\RiwayatSiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RiwayatSiswa;

class RiwayatSiswaController extends Controller
{
    protected $RiwayatSiswaModel;
    public function __construct()
    {
        $this->RiwayatSiswaModel = new RiwayatSiswaModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = SiswaModel::all();
        $riwayat = RiwayatSiswaModel::all();
        $riwayatSiswa = DB::table('siswa')->leftJoin('riwayat_siswa', 'siswa.nis', '=', 'riwayat_siswa.nis')->get();

        return view('riwayat.index', compact('siswa', 'riwayat', 'riwayatSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $riwayat = $this->RiwayatSiswaModel->getRiwayat($nis);
        return view('riwayat.show', compact('siswa', 'riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

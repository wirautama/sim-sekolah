@extends('templates.template')
@section('content')

@section('title', 'Detail Siswa')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <table class="table table-striped">
                <h3>A. Data Pribadi Siswa</h3>
            @if($siswa->avatar)
            <tr>
                <th width="20%">Profile</th>
                <td width="1%">:</td>
                <td><img src="{{Storage::url($siswa->avatar)}}" width="10%" class="img-fluid" alt=""></td>
            </tr>
                {{-- <img src="{{asset('storage/. $siswa->avatar')}}" class="img-fluid mt-3" alt=""> --}}
            @else
            <tr>
                <img src="{{asset('img')}}/default.svg" class="img-fluid mt-3" alt="">
            @endif
            <tr>
                <th width="20%">NIS</th>
                <td width="1%">:</td>
                <td>{{ $siswa->nis }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap Siswa</th>
                <td>:</td>
                <td>{{ $siswa->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>:</td>
                <td>{{ $siswa->tempat_lahir }}, {{date('d-m-Y', strtotime($siswa->tanggal_lahir))}}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    {{ $siswa->agama }}
                </td>
            </tr>
            <tr>
                <th>Anak Ke</th>
                <td>:</td>
                <td>
                    {{ $siswa->anak_ke }}
                </td>
            </tr>
            <tr>
                <th>Jumlah Saudara</th>
                <td>:</td>
                <td>
                    {{ $siswa->jumlah_saudara }}
                </td>
            </tr>
            <tr>
                <th>Status Anak (Yatim / Piatu / Yatim Piatu)</th>
                <td>:</td>
                <td>
                    {{ $siswa->status_anak }}
                </td>
            </tr>
            </table>
            
            <table class="table table-striped">
                <h3>B. Keterangan Tempat Tinggal</h3>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->alamat }}
                    </td>
                </tr>
                <tr>
                    <th>Kode Pos</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->kodepos }}
                    </td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->no_telp }}
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->email }}
                    </td>
                </tr>
                <tr>
                    <th width="20%">Jarak Tempat Tinggal ke Sekolah</th>
                    <td width="1%">:</td>
                    <td>
                        {{ $siswa->jarak }} Km
                    </td>
                </tr>
            </table>
            <table class="table table-striped">
                <h3>C. Keterangan Kesehatan</h3>
                <tr>
                    <th width="20%">Golongan Darah</th>
                    <td width="1%">:</td>
                    <td>
                        {{ $siswa->golongan_darah }}
                    </td>
                </tr>
                <tr>
                    <th>Tinggi Badan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->tinggi_badan }} Cm
                    </td>
                </tr>
                <tr>
                    <th>Berat Badan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->berat_badan }} Kg
                    </td>
                </tr>
            </table>
            <table class="table table-striped">
                <h3>D. Keterangan Pendidikan</h3>
                <tr>
                    <th>Pendidikan Sebelumnya</th>
                    
                </tr>
                <tr>
                    <th width="20%">Lulusan Dari</th>
                    <td width="1%">:</td>
                    <td>
                        {{ $siswa->lulusan_dari }}
                    </td>
                </tr>
                <tr>
                    <th>Lama Belajar</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->lama_belajar }} Tahun
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <th>Pindahan</th>
                    
                </tr>
                <tr>
                    <th>Dari Sekolah</th>
                    <td>:</td>
                    <td>{{ $siswa->pindahan_dari }}</td>
                </tr>
                <tr>
                    <th>Alasan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->alasan }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <th>Diterima di Sekolah ini</th>
                    
                </tr>
                <tr>
                    <th>Di Kelas</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->kelas }}
                    </td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->program }}
                    </td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->tanggal_diterima }}
                    </td>
                </tr>
                
            </table>
            <table class="table table-striped">
                <h3>E. Data Ayah Kandung</h3>
                <tr>
                    <th width="20%">Nama Ayah</th>
                    <td width="1%">:</td>
                    <td>
                        {{ $siswa->nama_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->tempat_lahir_ayah }}, {{ $siswa->tanggal_lahir_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->agama_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->kewarganegaraan_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>Pendidikan (Terakhir)</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->pendidikan_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->profesi_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->alamat_ayah }}
                    </td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->no_telp_ayah }}
                    </td>
                </tr>
                
            </table>
            <table class="table table-striped">
                <h3>E. Data Ibu Kandung</h3>
                <tr>
                    <th width="20%">Nama Ibu</th>
                    <td width="1%">:</td>
                    <td>
                        {{ $siswa->nama_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->tempat_lahir_ibu }}, {{ $siswa->tanggal_lahir_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->agama_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->kewarganegaraan_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>Pendidikan (Terakhir)</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->pendidikan_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->profesi_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->alamat_ibu }}
                    </td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td>:</td>
                    <td>
                        {{ $siswa->no_telp_ibu }}
                    </td>
                </tr>
                
            </table>
            <table class="table table-striped">
                <h3>F. Keterangan Lain</h3>
                <tr>
                    <th width="20%">Status Siswa</th>
                    <td width="1%">:</td>
                    <td>
                        {{ $siswa->status }}
                    </td>
                </tr>
                <tr>
                    <th width="20%">Diinput</th>
                    <td width="1%">:</td>
                    <td>{{ $siswa->created_at }}</td>
                </tr>
                <tr>
                    <th>Diperbaharui</th>
                    <td>:</td>
                    <td>{{ $siswa->updated_at }}</td>
                </tr>
                <tr>
            </table>
        </div>  
    </div>
    
</div>

        <a href="/siswa" class="btn btn-success btn-large">Kembali</a>
</table>

@endsection
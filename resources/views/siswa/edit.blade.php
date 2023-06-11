@extends('templates.template')
@section('content')

@section('title', 'Edit Siswa')
<div class="container-fluid">
    <form action="{{route('siswa.update', $siswa->nis)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h4 class="text-bold">A. Data Pribadi Siswa</h4>
        <br>
        <div class="box-body">
            <div class="form-group @error('nis') has-error @enderror">
            <label for="nis">@error('nis')<i class="fa fa-times-circle-o"></i> @enderror NIS</label>
            <input type="number" class="form-control" value="{{$siswa->nis}}" name="nis" id="nis" placeholder="Nomor Induk Siswa">
            @error('nis')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-group @error('nama_lengkap') has-error @enderror">
            <label for="nama_lengkap">@error('nama_lengkap')<i class="fa fa-times-circle-o"></i> @enderror Nama Lengkap</label>
            <input type="text" class="form-control" value="{{$siswa->nama_lengkap}}" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
            @error('nama_lengkap')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-group @error('jenis_kelamin') has-error @enderror">
                <label for="jenis_kelamin">@error('jenis_kelamin')<i class="fa fa-times-circle-o"></i> @enderror Jenis Kelamin</label><br>
                <div class="radio">
                    <label>
                      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" >
                      Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                        Perempuan
                      </label>
                </div>
                @error('jenis_kelamin')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group @error('tempat_lahir') has-error @enderror">
                <label for="tempat_lahir">@error('tempat_lahir')<i class="fa fa-times-circle-o"></i> @enderror Tempat Lahir</label>
                <input type="text" class="form-control" value="{{$siswa->tempat_lahir}}" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                @error('tempat_lahir')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-group @error('tanggal_lahir') has-error @enderror">
                <label for="tanggal_lahir">@error('tanggal_lahir')<i class="fa fa-times-circle-o"></i> @enderror Tanggal Lahir:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" data-date-format="yyyy-mm-dd" name="tanggal_lahir" value="{{$siswa->tanggal_lahir}}" class="form-control pull-right" id="datepicker">
                </div>
                @error('tanggal_lahir')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('agama') has-error @enderror">
                <label for="agama">@error('agama')<i class="fa fa-times-circle-o"></i> @enderror Agama</label>
                <select class="form-control select2"  name="agama" style="width: 100%;">
                  <option value="{{$siswa->agama}}" selected>- {{$siswa->agama}} -</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Katholik">Kristen Katholik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindhu">Hindhu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                @error('agama')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

            <div class="form-group @error('anak_ke') has-error @enderror">
                <label for="anak_ke">@error('anak_ke')<i class="fa fa-times-circle-o"></i> @enderror Anak Ke</label>
                <input type="number" class="form-control" value="{{$siswa->anak_ke}}" name="anak_ke" id="anak_ke" placeholder="Anak Ke">
                @error('anak_ke')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('jumlah_saudara') has-error @enderror">
                <label for="jumlah_saudara">@error('jumlah_saudara')<i class="fa fa-times-circle-o"></i> @enderror Jumlah Saudara</label>
                <input type="number" class="form-control" value="{{$siswa->jumlah_saudara}}" name="jumlah_saudara" id="jumlah_saudara" placeholder="Jumlah Saudara">
                @error('jumlah_saudara')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('status_anak') has-error @enderror">
                <label for="status_anak">@error('status_anak')<i class="fa fa-times-circle-o"></i> @enderror Status Anak (Yatim / Piatu / Yatim Piatu)</label>
                <select class="form-control select2" value="{{old('status_anak')}}" name="status_anak" style="width: 100%;">
                  <option value="{{$siswa->status_anak}}" selected="selected">( {{$siswa->status_anak}} )</option>
                  <option value="-">-</option>
                  <option value="Yatim">Yatim</option>
                  <option value="Piatu">Piatu</option>
                  <option value="Yatim Piatu">Yatim Piatu</option>
                </select>
                @error('status_anak')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>
            <h4>B. Keterangan Tempat Tinggal</h4>
            <br>

            <div class="form-group @error('alamat') has-error @enderror">
                <label for="alamat">@error('alamat')<i class="fa fa-times-circle-o"></i> @enderror Alamat</label>
                <input type="text" class="form-control" value="{{$siswa->alamat}}" name="alamat" id="alamat" placeholder="Alamat Lengkap">
                @error('alamat')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('kodepos') has-error @enderror">
                <label for="kodepos">@error('kodepos')<i class="fa fa-times-circle-o"></i> @enderror Kode Pos</label>
                <input type="number" class="form-control" value="{{$siswa->kodepos}}" name="kodepos" id="kodepos" placeholder="Kode Pos">
                @error('kodepos')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('no_telp') has-error @enderror">
                <label for="no_telp">@error('no_telp')<i class="fa fa-times-circle-o"></i> @enderror No. Telepon</label>
                <input type="number" class="form-control" name="no_telp" value="{{$siswa->no_telp}}" id="no_telp" placeholder="No.Telepon">
                @error('no_telp')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('email') has-error @enderror">
                <label for="email">@error('email')<i class="fa fa-times-circle-o"></i> @enderror Email</label>
                <input type="email" class="form-control" value="{{$siswa->email}}" name="email" id="email" placeholder="Email">
                @error('email')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('jarak') has-error @enderror">
                <label for="jarak">@error('jarak')<i class="fa fa-times-circle-o"></i> @enderror Jarak Tempat Tinggal Ke Sekolah</label>
                <div class="input-group">
                    <input type="number" name="jarak" value="{{$siswa->jarak}}" class="form-control" placeholder="Jarak (Km)">
                    <span class="input-group-addon">Km</span>
                </div>
                @error('jarak')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>
            <h4>C. Keterangan Kesehatan</h4>
            <br>

            <div class="form-group @error('golongan_darah') has-error @enderror">
                <label for="golongan_darah">@error('golongan_darah')<i class="fa fa-times-circle-o"></i> @enderror Golongan Darah</label>
                <select class="form-control select2" value="{{old('golongan_darah')}}" name="golongan_darah" style="width: 100%;">
                  <option value="{{$siswa->golongan_darah}}" selected="selected">- {{$siswa->golongan_darah}} -</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
                @error('golongan_darah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('tinggi_badan') has-error @enderror">
                <label for="tinggi_badan">@error('tinggi_badan')<i class="fa fa-times-circle-o"></i> @enderror Tinggi Badan</label>
                <div class="input-group">
                    <input type="number" name="tinggi_badan" value="{{$siswa->tinggi_badan}}" class="form-control" placeholder="Tinggi (Cm)">
                    <span class="input-group-addon">Cm</span>
                </div>
                @error('tinggi_badan')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('berat_badan') has-error @enderror">
                <label for="berat_badan">@error('berat_badan')<i class="fa fa-times-circle-o"></i> @enderror Berat Badan</label>
                <div class="input-group">
                    <input type="number" name="berat_badan" value="{{$siswa->berat_badan}}" class="form-control" placeholder="Berat (Kg)">
                    <span class="input-group-addon">Kg</span>
                </div>
                @error('berat_badan')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>
            <h4>D. Keterangan Pendidikan</h4>
            <br>

            <div class="form-group @error('lulusan_dari') has-error @enderror">
                <label for="lulusan_dari">@error('lulusan_dari')<i class="fa fa-times-circle-o"></i> @enderror Pendidikan Sebelumnya</label>
                <input type="text" name="lulusan_dari" value="{{$siswa->lulusan_dari}}" class="form-control" id="lulusan_dari" placeholder="Lulusan dari">
                @error('lulusan_dari')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group @error('lama_belajar') has-error @enderror">
                <label for="lama_belajar">@error('lama_belajar')<i class="fa fa-times-circle-o"></i> @enderror Lama Belajar</label>
                <div class="input-group">
                    <input type="number" name="lama_belajar" value="{{$siswa->lama_belajar}}" class="form-control" placeholder="Lama Belajar dari Sekolah Sebelumnya (Tahun)">
                    <span class="input-group-addon">Tahun</span>
                </div>
                @error('lama_belajar')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('pindahan_dari') has-error @enderror">
                <label for="pindahan_dari">@error('pindahan_dari')<i class="fa fa-times-circle-o"></i> @enderror Pindahan dari Sekolah</label>
                <input type="text" class="form-control" value="{{$siswa->pindahan_dari}}" name="pindahan_dari" id="pindahan_dari" placeholder="Sekolah Sebelumnya">
                @error('pindahan_dari')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('alasan') has-error @enderror">
                <label for="alasan">@error('alasan')<i class="fa fa-times-circle-o"></i> @enderror Alasan Pindah</label>
                <input type="text" class="form-control" id="alasan" value="{{$siswa->alasan}}" name="alasan" placeholder="Alasan Pindah dari Sekolah Sebelumnya">
                @error('alasan')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('kelas') has-error @enderror">
                <label for="kelas">@error('kelas')<i class="fa fa-times-circle-o"></i> @enderror Diterima di Sekolah Ini</label>
                <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}" id="kelas" placeholder="Di Kelas">
                @error('kelas')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('program') has-error @enderror">
                <label for="program">@error('program')<i class="fa fa-times-circle-o"></i> @enderror Program Studi</label><br>
                <div class="radio">
                    <label>
                      <input type="radio" name="program" id="program" value="Ilmu Pengetahuan Alam">
                      IPA
                    </label>
                    <label>
                        <input type="radio" name="program" id="program" value="Ilmu Pengetahuan Sosial">
                        IPS
                    </label>
                    <label>
                        <input type="radio" name="program" id="program" value="Bahasa">
                        Bahasa
                    </label>
                </div>
                @error('program')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('tanggal_diterima') has-error @enderror">
                <label for="tanggal_diterima">@error('tanggal_lahir_ayah')<i class="fa fa-times-circle-o"></i>@enderror Tanggal diterima:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_diterima" value="{{$siswa->tanggal_diterima}}" data-date-format="yyyy-mm-dd" class="form-control pull-right" id="datepicker3">
                </div>
                @error('tanggal_diterima')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <br>
            <h4>E. Data Ayah Kandung</h4>
            <br>

            <div class="form-group @error('nama_ayah') has-error @enderror">
                <label for="nama_ayah">@error('nama_ayah')<i class="fa fa-times-circle-o"></i> @enderror Nama Ayah</label>
                <input type="text" class="form-control" value="{{$siswa->nama_ayah}}" name="nama_ayah" id="nama_ayah" placeholder="Nama Lengkap Ayah">
                @error('nama_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('tempat_lahir_ayah') has-error @enderror">
                <label for="tempat_lahir_ayah">@error('tempat_lahir_ayah')<i class="fa fa-times-circle-o"></i> @enderror Tempat Lahir</label>
                <input type="text" class="form-control" value="{{$siswa->tempat_lahir_ayah}}" name="tempat_lahir_ayah" id="tempat_lahir_ayah" placeholder="Tempat Lahir">
                @error('tempat_lahir_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-group @error('tanggal_lahir_ayah') has-error @enderror">
                <label for="tanggal_lahir_ayah">@error('tanggal_lahir_ayah')<i class="fa fa-times-circle-o"></i>@enderror Tanggal Lahir Ayah:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_lahir_ayah" value="{{$siswa->tanggal_lahir_ayah}}" data-date-format="yyyy-mm-dd" class="form-control pull-right" id="datepicker1">
                </div>
                @error('tanggal_lahir_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group @error('agama_ayah') has-error @enderror">
                <label for="agama">@error('agama_ayah')<i class="fa fa-times-circle-o"></i>@enderror Agama</label>
                <select class="form-control select2" value="{{old('agama_ayah')}}" name="agama_ayah" style="width: 100%;">
                  <option value="{{$siswa->agama_ayah}}" selected="selected">- {{$siswa->agama_ayah}} -</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Katholik">Kristen Katholik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindhu">Hindhu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                @error('agama_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('kewarganegaraan_ayah') has-error @enderror">
                <label for="kewarganegaraan_ayah">@error('kewarganegaraan_ayah')<i class="fa fa-times-circle-o"></i>@enderror Kewarganegaraan</label>
                <input type="text" class="form-control" value="{{$siswa->kewarganegaraan_ayah}}" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" placeholder="Kewarganegaraan">
                @error('kewarganegaraan')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

            <div class="form-group @error('pendidikan_ayah') has-error @enderror">
                <label for="pendidikan_ayah">@error('pendidikan_ayah')<i class="fa fa-times-circle-o"></i>@enderror Pendidikan Terakhir</label>
                <select class="form-control select2" value="{{old('pendidikan_ayah')}}" name="pendidikan_ayah" style="width: 100%;">
                  <option value="{{$siswa->pendidikan_ayah}}" selected="selected">- {{$siswa->pendidikan_ayah}} -</option>
                  <option value="Tidak / Belum Sekolah">Tidak / Belum Sekolah</option>
                  <option value="SD Sederajat">SD Sederajat</option>
                  <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                  <option value="SLTP / Sederajat">SLTP / Sederajat</option>
                  <option value="SLTA / Sederajat">SLTA / Sederajat</option>
                  <option value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                  <option value="Diploma I / Diploma II">Diploma I / Diploma II</option>
                  <option value="Akademi / Diploma III / S. Muda">Akademi / Diploma III / S. Muda</option>
                  <option value="Strata II">Strata II</option>
                  <option value="Strata III">Strata III</option>
                </select>
                @error('pendidikan_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('profesi_ayah') has-error @enderror">
                <label for="profesi_ayah">@error('profesi_ayah')<i class="fa fa-times-circle-o"></i>@enderror Pekerjaan</label>
                <input type="text" class="form-control" value="{{$siswa->profesi_ayah}}" name="profesi_ayah" id="profesi_ayah" placeholder="Pekerjaan">
                @error('profesi_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('alamat_ayah') has-error @enderror">
                <label for="alamat_ayah">@error('alamat_ayah')<i class="fa fa-times-circle-o"></i>@enderror Alamat</label>
                <input type="text" class="form-control" value="{{$siswa->alamat_ayah}}" name="alamat_ayah" id="alamat_ayah" placeholder="Alamat Lengkap">
                @error('alamat_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('no_telp_ayah') has-error @enderror">
                <label for="no_telp_ayah">@error('no_telp_ayah')<i class="fa fa-times-circle-o"></i>@enderror No. Telepon</label>
                <input type="text" class="form-control" value="{{$siswa->no_telp_ayah}}" name="no_telp_ayah" id="no_telp_ayah" placeholder="No. Telepon / HP">
                @error('no_telp_ayah')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <br>
              <h4>F. Data Ibu Kandung</h4>
              <br>
  
              <div class="form-group @error('nama_ibu') has-error @enderror">
                  <label for="nama_ibu">@error('nama_ibu')<i class="fa fa-times-circle-o"></i>@enderror Nama Ibu</label>
                  <input type="text" class="form-control" value="{{$siswa->nama_ibu}}" name="nama_ibu" id="nama_ibu" placeholder="Nama Lengkap Ibu">
                  @error('nama_ibu')
                  <div class="invalid-feedback text-danger">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
  
              <div class="form-group @error('tempat_lahir_ibu') has-error @enderror">
                  <label for="tempat_lahir_ibu">@error('tempat_lahir_ibu')<i class="fa fa-times-circle-o"></i>@enderror Tempat Lahir</label>
                  <input type="text" class="form-control" value="{{$siswa->tempat_lahir_ibu}}" name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="Tempat Lahir">
                  @error('tempat_lahir_ibu')
                  <div class="invalid-feedback text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="form-group @error('tanggal_lahir_ibu') has-error @enderror">
                  <label for="tanggal_lahir">@error('tanggal_lahir_ibu')<i class="fa fa-times-circle-o"></i>@enderror Tanggal Lahir :</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tanggal_lahir_ibu" value="{{$siswa->tanggal_lahir_ibu}}" data-date-format="yyyy-mm-dd" class="form-control pull-right" id="datepicker2">
                  </div>
                  @error('tanggal_lahir_ibu')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
  
              <div class="form-group @error('agama_ibu') has-error @enderror">
                  <label for="agama_ibu">@error('agama_ibu')<i class="fa fa-times-circle-o"></i>@enderror Agama</label>
                  <select class="form-control select2" value="{{old('agama_ibu')}}" name="agama_ibu" style="width: 100%;">
                    <option value="{{$siswa->agama_ibu}}" selected="selected">- {{$siswa->agama_ibu}} -</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen Katholik">Kristen Katholik</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                  </select>
                  @error('agama_ibu')
                  <div class="invalid-feedback text-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="form-group @error('kewarganegaraan_ibu') has-error @enderror">
                  <label for="kewarganegaraan_ibu">@error('kewarganegaraan_ibu')<i class="fa fa-times-circle-o"></i>@enderror Kewarganegaraan</label>
                  <input type="text" class="form-control" value="{{$siswa->kewarganegaraan_ibu}}" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" placeholder="Kewarganegaraan">
                  @error('kewarganegaraan')
                  <div class="invalid-feedback text-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
              <div class="form-group @error('pendidikan_ibu') has-error @enderror">
                  <label for="pendidikan_ibu">@error('pendidikan_ibu')<i class="fa fa-times-circle-o"></i>@enderror Pendidikan Terakhir</label>
                  <select class="form-control select2" value="{{old('pendidikan_ibu')}}" name="pendidikan_ibu" style="width: 100%;">
                    <option value="{{$siswa->pendidikan_ibu}}" selected="selected">- {{$siswa->pendidikan_ibu}} -</option>
                    <option value="Tidak / Belum Sekolah">Tidak / Belum Sekolah</option>
                    <option value="SD Sederajat">SD Sederajat</option>
                    <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                    <option value="SLTP / Sederajat">SLTP / Sederajat</option>
                    <option value="SLTA / Sederajat">SLTA / Sederajat</option>
                    <option value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                    <option value="Diploma I / Diploma II">Diploma I / Diploma II</option>
                    <option value="Akademi / Diploma III / S. Muda">Akademi / Diploma III / S. Muda</option>
                    <option value="Strata II">Strata II</option>
                    <option value="Strata III">Strata III</option>
                  </select>
                  @error('pendidikan_ibu')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>
  
                <div class="form-group @error('profesi_ibu') has-error @enderror">
                  <label for="pekerjaan_ibu">@error('profesi_ibu')<i class="fa fa-times-circle-o"></i>@enderror Pekerjaan</label>
                  <input type="text" class="form-control" value="{{$siswa->profesi_ibu}}" name="profesi_ibu" id="profesi_ibu" placeholder="Pekerjaan">
                  @error('profesi_ibu')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>
  
                <div class="form-group @error('alamat_ibu') has-error @enderror">
                  <label for="alamat_ibu">@error('alamat_ibu')<i class="fa fa-times-circle-o"></i>@enderror Alamat</label>
                  <input type="text" class="form-control" value="{{$siswa->alamat_ibu}}" name="alamat_ibu" id="alamat_ibu" placeholder="Alamat Lengkap">
                  @error('alamat_ibu')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>
  
                <div class="form-group @error('no_telp_ibu') has-error @enderror">
                  <label for="no_telp_ibu">@error('no_telp_ibu')<i class="fa fa-times-circle-o"></i>@enderror No. Telepon</label>
                  <input type="text" class="form-control" value="{{$siswa->no_telp_ibu}}" name="no_telp_ibu" id="no_telp_ibu" placeholder="No. Telepon / HP">
                  @error('no_telp_ibu')
                  <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="form-group @error('avatar') has-error @enderror">
                    <label for="no_telp_ibu">@error('avatar')<i class="fa fa-times-circle-o"></i>@enderror Avatar</label><br>
                    <img class="img-preview img-fluid mb-3 col-md-4">  
                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" value="{{$siswa->avatar}}" id="avatar" name="avatar" onchange="previewImage()">
                
                    @error('avatar')
                    <div class="invalid-feedback text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{route('siswa.index')}}" class="btn btn-primary">Kembali</a>   

    </form>
</div>

@endsection

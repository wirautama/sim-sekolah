@extends('templates.template')
@section('content')

@section('title', 'Tambah Data Siswa')
<div class="container-fluid">
    <form action="{{route('siswa.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <h4 class="text-bold">A. Data Pribadi Siswa</h4>
        <br>
        <div class="box-body">
            <div class="form-group">
            <label for="nis">NIS</label>
            <input type="email" class="form-control" name="nis" id="nis" placeholder="Nomor Induk Siswa">
            @error('nis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="password" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
            @error('nama_lengkap')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                <div class="radio">
                    <label>
                      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
                      Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                        Perempuan
                      </label>
                </div>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_lahir" class="form-control pull-right" id="datepicker">
                </div>
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Agama</label>
                <select class="form-control select2" name="agama" style="width: 100%;">
                  <option selected="selected">- Pilih Agama -</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Katholik">Kristen Katholik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindhu">Hindhu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                @error('agama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

            <div class="form-group">
                <label for="anak_ke">Anak Ke</label>
                <input type="number" class="form-control" name="anak_ke" id="anak_ke" placeholder="Anak Ke">
                @error('anak_ke')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jumlah_saudara">Jumlah Saudara</label>
                <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara" placeholder="Jumlah Saudara">
                @error('jumlah_saudara')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Status Anak (Yatim / Piatu / Yatim Piatu)</label>
                <select class="form-control select2" name="status_anak" style="width: 100%;">
                  <option selected="selected">- Pilih Status -</option>
                  <option value="-">-</option>
                  <option value="Yatim">Yatim</option>
                  <option value="Piatu">Piatu</option>
                  <option value="Yatim Piatu">Yatim Piatu</option>
                </select>
                @error('status_anak')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>
            <h4>B. Keterangan Tempat Tinggal</h4>
            <br>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Lengkap">
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kodepos">Kode Pos</label>
                <input type="number" class="form-control" name="kodepos" id="kodepos" placeholder="Kode Pos">
                @error('kodepos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="No.Telepon">
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jarak">Jarak Tempat Tinggal Ke Sekolah</label>
                <div class="input-group">
                    <input type="number" name="jarak" class="form-control" placeholder="Jarak (Km)">
                    <span class="input-group-addon">Km</span>
                </div>
                @error('jarak')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>
            <h4>C. Keterangan Kesehatan</h4>
            <br>

            <div class="form-group">
                <label>Golongan Darah</label>
                <select class="form-control select2" name="golongan_darah" style="width: 100%;">
                  <option selected="selected">- Pilih Golongan Darah -</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
                @error('golongan_darah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan</label>
                <div class="input-group">
                    <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi (Cm)">
                    <span class="input-group-addon">Cm</span>
                </div>
                @error('tinggi_badan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <div class="input-group">
                    <input type="number" name="berat_badan" class="form-control" placeholder="Berat (Kg)">
                    <span class="input-group-addon">Kg</span>
                </div>
                @error('berat_badan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>
            <h4>D. Keterangan Pendidikan</h4>
            <br>

            <div class="form-group">
                <label for="lulusan_dari">Pendidikan Sebelumnya</label>
                <input type="text" name="lulusan_dari" class="form-control" id="lulusan_dari" placeholder="Lulusan dari">
                @error('lulusan_dari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="lama_belajar">Lama Belajar</label>
                <div class="input-group">
                    <input type="number" name="lama_belajar" class="form-control" placeholder="Lama Belajar dari Sekolah Sebelumnya (Tahun)">
                    <span class="input-group-addon">Tahun</span>
                </div>
                @error('lama_belajar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="pindahan_dari">Pindahan dari Sekolah</label>
                <input type="text" class="form-control" name="pindahan_dari" id="pindahan_dari" placeholder="Sekolah Sebelumnya">
                @error('pindahan_dari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alasan">Alasan Pindah</label>
                <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Pindah dari Sekolah Sebelumnya">
                @error('alasan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kelas">Diterima di Sekolah Ini</label>
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Di Kelas">
                @error('kelas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Program Studi</label><br>
                <div class="radio">
                    <label>
                      <input type="radio" name="program_studi" id="program_studi" value="IPA" checked>
                      IPA
                    </label>
                    <label>
                        <input type="radio" name="program_studi" id="program_studi" value="IPS">
                        IPS
                    </label>
                    <label>
                        <input type="radio" name="program_studi" id="program_studi" value="BAHASA">
                        Bahasa
                    </label>
                </div>
                @error('program_studi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <br>
            <h4>E. Data Ayah Kandung</h4>
            <br>

            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="password" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Lengkap Ayah">
                @error('nama_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tempat_lahir_ayah">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" placeholder="Tempat Lahir">
                @error('tempat_lahir_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Tanggal Lahir Ayah:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_lahir_ayah" class="form-control pull-right" id="datepicker1">
                </div>
                @error('tanggal_lahir_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Agama</label>
                <select class="form-control select2" name="agama_ayah" style="width: 100%;">
                  <option selected="selected">- Pilih Agama -</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Katholik">Kristen Katholik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindhu">Hindhu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                @error('agama_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="kewarganegaraan_ayah">Kewarganegaraan</label>
                <input type="text" class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" placeholder="Kewarganegaraan">
                @error('kewarganegaraan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <select class="form-control select2" name="pendidikan_ayah" style="width: 100%;">
                  <option selected="selected">- Pilih Pendidikan -</option>
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
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan">
                @error('pekerjaan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="alamat_ayah">Alamat</label>
                <input type="text" class="form-control" name="alamat_ayah" id="alamat_ayah" placeholder="Alamat Lengkap">
                @error('alamat_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="no_telp_ayah">No. Telepon</label>
                <input type="text" class="form-control" name="no_telp_ayah" id="no_telp_ayah" placeholder="No. Telepon / HP">
                @error('no_telp_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <br>
              <h4>F. Data Ibu Kandung</h4>
              <br>
  
              <div class="form-group">
                  <label for="nama_ibu">Nama Ibu</label>
                  <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Lengkap Ibu">
                  @error('nama_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
  
              <div class="form-group">
                  <label for="tempat_lahir_ibu">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="Tempat Lahir">
                  @error('tempat_lahir_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="form-group">
                  <label>Tanggal Lahir :</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tanggal_lahir_ibu" class="form-control pull-right" id="datepicker2">
                  </div>
                  @error('tanggal_lahir_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
  
              <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control select2" name="agama_ibu" style="width: 100%;">
                    <option selected="selected">- Pilih Agama -</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen Katholik">Kristen Katholik</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                  </select>
                  @error('agama_ibu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="form-group">
                  <label for="kewarganegaraan_ibu">Kewarganegaraan</label>
                  <input type="text" class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" placeholder="Kewarganegaraan">
                  @error('kewarganegaraan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
              <div class="form-group">
                  <label>Pendidikan Terakhir</label>
                  <select class="form-control select2" name="pendidikan_ibu" style="width: 100%;">
                    <option selected="selected">- Pilih Pendidikan -</option>
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
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
  
                <div class="form-group">
                  <label for="pekerjaan_ibu">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan">
                  @error('pekerjaan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
  
                <div class="form-group">
                  <label for="alamat_ibu">Alamat</label>
                  <input type="text" class="form-control" name="alamat_ibu" id="alamat_ibu" placeholder="Alamat Lengkap">
                  @error('alamat_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
  
                <div class="form-group">
                  <label for="no_telp_ibu">No. Telepon</label>
                  <input type="text" class="form-control" name="no_telp_ibu" id="no_telp_ibu" placeholder="No. Telepon / HP">
                  @error('no_telp_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>   

    </form>
</div>
@endsection


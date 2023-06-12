@extends('templates.template')
@section('content')

@section('title', 'Detail Riwayat Siswa')

<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Induk Siswa</th>
    <td width="1%">:</td>
    <td>{{ $siswa->nis }}</td>
  </tr>
  <tr>
    <th width="20%">Nama Siswa</th>
    <td width="1%">:</td>
    <td>{{ $siswa->nama_lengkap }}</td>
  </tr>
  <tr>
    <th width="20%">Nomor Induk Siswa</th>
    <td width="1%">:</td>
    <td>{{ $siswa->kelas }}</td>
  </tr>
  
  </tbody>
</table>

<h3>D. Data Riwayat</h3>
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID</th>
      <th>NIS</th>
      <th>Semester</th>
      <th>Kelas</th>
      <th>Nilai Rata-rata</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>

    <tr>
      <td>{{ $nomor++ }} .</td>
      <td>{{ $riwayat->id }}</td>
      <td>{{ $riwayat->nis }}</td>
      <td>{{ $riwayat->semester }}</td>
      <td>{{ $riwayat->kelas }}</td>
      <td>{{ $riwayat->nilai_rata }}</td>
      <td>{{ $riwayat->status }}</td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="">
                <span class="glyphicon glyphicon-sunglasses"></span> Detail
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
  </tbody>
</table>

@endsection
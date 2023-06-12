@extends('templates.template')
@section('content')

@section('title', 'Riwayat Siswa')

<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No.</th>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>
    </thead>
    <?php 
    $no = 1 
    ?>
    @foreach ($siswa as $data)
    @foreach ($riwayat as $data1)
    <tbody>
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->nis }}</td>
      <td>{{ $data->nama_lengkap }}</td>
      <td>{{ $data->kelas }}</td>
      <td><div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right" role="menu">
          <li>
            <a href="{{route('riwayat.show', $data1->nis)}}"><i class="glyphicon glyphicon-sunglasses"></i> Riwayat</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{route('riwayat.edit', $data1->nis)}}"><i class="glyphicon glyphicon-edit"></i> Ubah Riwayat</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="" data-toggle="modal" data-target="#delete">
              <i class="glyphicon glyphicon-trash"></i> Hapus Riwayat
            </a>
          </li>
         
        </ul>
      </div></td>
    </tr>
    </tbody>
    @endforeach
    @endforeach
    <tfoot>
    <tr>
      <th>No. </th>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>
    </tfoot>
  </table>
@endsection
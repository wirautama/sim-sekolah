@extends('templates.template')
@section('content')

@section('title', 'Data Siswa')
@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        {{session('error')}}
    </div>
@endif

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
    {{session('success')}}
</div>
@endif
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No.</th>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <th>Jenis Kelamin</th>
      <th>Tempat tanggal Lahir</th>
      <th>Alamat</th>
      <th>Kelas</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    </thead>
    <?php 
    $no = 1 
    ?>
    @foreach ($siswa as $data)
    <tbody>
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->nis }}</td>
      <td>{{ $data->nama_lengkap }}</td>
      <td>{{ $data->jenis_kelamin }}</td>
      <td>{{ $data->tempat_lahir }}, {{date('d-m-Y', strtotime($data->tanggal_lahir))}}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->kelas }}</td>
      <td>
        <span class="{{ $data->status === 'Tamat' ? 'label label-success' : 'label label-warning' }}">{{ $data->status }}</span>
      </td>
      <td><div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right" role="menu">
          <li>
            <a href="{{route('siswa.show', $data->nis)}}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{route('siswa.edit', $data->nis)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
          </li>
          <li>
            <a href="{{route('riwayat.show', $data->nis)}}"><i class="glyphicon glyphicon-sunglasses"></i> Riwayat</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="" data-toggle="modal" data-target="#delete">
              <i class="glyphicon glyphicon-trash"></i> Hapus
            </a>
          </li>
         
        </ul>
      </div></td>
    </tr>
    </tbody>
    @endforeach
    <tfoot>
    <tr>
      <th>No. </th>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Kelas</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    </tfoot>
  </table>

  @foreach ($siswa as $data)
  <div class="modal modal-danger fade" id="delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nis}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data ' {{$data->nama_lengkap}} '?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                <form action="{{route('siswa.destroy', $data->nis)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline">Ya</a>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
   @endforeach     
  <a href="{{route('siswa.create')}}" class="btn btn-success btn-sm">Tambah Data Siswa</a>
  @endsection


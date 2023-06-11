@extends('templates.template')
@section('content')

@section('title', 'Data Siswa')
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
      <td>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
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
            <a href="/siswa/{{$data->nis}}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="/siswa/edit/{{ $data->nis }}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
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

  <div class="modal modal-danger fade" id="delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data ini?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <a href="{{ route('siswa.destroy', $data->nis) }}" type="button" class="btn btn-outline">Save changes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  <a href="/siswa/create" class="btn btn-success btn-sm">Tambah Data Siswa</a>
  @endsection


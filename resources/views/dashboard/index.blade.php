@extends('templates.template')
@section('content')

@section('title', 'Dashboard')
<section class="content">
   
    <div class="row">
  
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ $siswa }}</h3>
  
            <p>SISWA</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <a href="/siswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      {{-- <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3></h3>
  
            <p>KARTU KELUARGA</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/kartukeluarga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
     
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3></h3>
  
            <p>PENGGUNA TERDAFTAR</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
     
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
           
  
            <p>MUTASI</p>
          </div>
          <div class="icon">
            <i class="glyphicon glyphicon-send"></i>
          </div>
          <a href="/mutasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div> --}}
  
    <script>
      $(document).ajaxStart(function() { Pace.restart(); });
  
    </script>
@endsection
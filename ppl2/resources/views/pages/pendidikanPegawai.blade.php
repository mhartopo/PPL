@extends('app_template')

@section('title')
  Pendidikan Pegawai
@stop

@section('page_title')
  <h2>Pendidikan Pegawai</h2>
@stop
  
@section('head_content')
  @if (Session::has('message'))
    <div class="alert alert-info fade in">{{ Session::get('message') }}
      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    </div>
  @endif
    <button class="btn m-b-sm m-r-sm btn-success" onclick="location.href = '{{URL::to('/')}}/pendidikan-formal/new';"><i class="m-r-xs fa fa-plus"></i>Tambahkan Pendidikan</button>
  </br>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading font-semibold">
      <!-- Tampilkan Pesan -->
      Tabel Pendidikan 
      @if($nip == null)
        Semua Pegawai
      @else
        Pegawai NIP : {{$nip}}
      @endif
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">No</th>
            <th>NIP</th>
            <th data-breakpoints="xs md">Nama Institusi</th>
            <th>Tingkatan</th>
            <th data-breakpoints="xs sm">Gelar</th>
            <th data-breakpoints="xs sm">Jurusan</th>
            <th data-breakpoints="xs sm md">No Ijazah</th>
            <th data-breakpoints="xs sm md">Tahun</th>
            <th data-breakpoints="xs sm">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          @foreach($pend as $pendidikan)
            <tr data-expanded="true">
              <td>{{$i}}</td>
              <td>{{$pendidikan -> nip}}</td>
              <td>{{$pendidikan -> nama_institusi}}</td>
              <td>{{$pendidikan -> tingkatan}}</td>
              <td>{{$pendidikan -> gelar}}</td>
              <td>{{$pendidikan -> jurusan}}</td>
              <td>{{$pendidikan -> no_ijazah}}</td>
              <td>{{$pendidikan -> tahun}}</td>
              <td>
                <div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="{{URL::to('/')}}/pendidikan-formal/{{$pendidikan->id}}/edit">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Hapus</a></li>
                  </ul>
                </div>
              </td>
            </tr>  
            <?php $i++ ;?>
          @endforeach
        </tbody>
      </table>
    </div>

@stop
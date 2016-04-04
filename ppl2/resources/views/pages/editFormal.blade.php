@extends('app_template')

@section('title')
	Edit | Form Pendidikan Pegawai
@stop

@section('page_title')
	<h2>Edit Pendidikan Pegawai </h2>
	<h3>>NIP : {{$pend->nip}}</h3>
@stop

@section('content')
<div class="panel panel-default">
<div class="panel-heading font-bold">Tambahkan Pendidikan Pegawai</div>
<div class="panel-body">
	<form class="bs-example form-horizontal" method = "POST" action = "{{URL::to('/')}}/pendidikan-formal/{{$pend->id}}/update">
		<div class="form-group">
		  <label class="col-lg-2 control-label">NIP</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="NIP" name="nip" value="{{$pend->nip}}" readonly></input>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Institusi</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Nama Institusi" name="nama_institusi" required value="{{$pend->nama_institusi}}"></input>
		  </div>
		</div>

		 <div class="form-group">
          <label class="col-sm-2 control-label">Tingkatan</label>
          <div class="col-sm-4">
            <select name="tingkatan" class="form-control m-b">
              <option>Strata 3</option>
              <option>Strata 2</option>
              <option>Strata 1</option>
              <option>SMA/Sederajat</option>
              <option>SMP/Sederajat</option>
              <option>SD/Sederajat</option>
              <option selected="selected">{{$pend->tingkatan}}</option>
            </select>
          </div>
        </div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Gelar</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Gelar" name= "gelar" required value="{{$pend->gelar}}"></input>
		     <span class="help-block m-b-none">Gelar yang diperoleh, contoh : S.T.</span>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Jurusan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Jurusan" name= "jurusan" required value ="{{$pend->jurusan}}"></input>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Nomor Ijazah</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Nomor Ijazah" name= "no_ijazah" required value="{{$pend->no_ijazah}}"></input>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Tahun Lulus</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Tahun Lulus" name= "tahun" required value="{{$pend->tahun}}"></input>
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-lg-offset-2 col-lg-8">
		    <button type="submit" class="btn btn-sm btn-info">Update</button>
		  </div>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</div>
</div>
@stop
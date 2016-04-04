@extends('app_template')

@section('title')
	Form Pendidikan Pegawai
@stop

@section('page_title')
	<h2>Daftarkan Pendidikan</h2>
@stop

@section('content')
<div class="panel panel-default">
<div class="panel-heading font-bold">Tambahkan Pendidikan Pegawai</div>
<div class="panel-body">
	<form class="bs-example form-horizontal" method = "POST" action = "pendidikan-formal/add">
		<div class="form-group">
		  <label class="col-lg-2 control-label">NIP</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="NIP" name="nip" required>
		    <span class="help-block m-b-none">Isikan NIP Pegawai</span>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Institusi</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Nama Institusi" name="nama_institusi" required>
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
            </select>
          </div>
        </div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Gelar</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Gelar" name= "gelar" required>
		     <span class="help-block m-b-none">Gelar yang diperoleh, contoh : S.T.</span>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Jurusan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Jurusan" name= "jurusan" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Nomor Ijazah</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Nomor Ijazah" name= "no_ijazah" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Tahun Lulus</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Tahun Lulus" name= "tahun" required>
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-lg-offset-2 col-lg-8">
		    <button type="submit" class="btn btn-sm btn-info">Kirim</button>
		  </div>
		</div>
	</form>
</div>
</div>
@stop
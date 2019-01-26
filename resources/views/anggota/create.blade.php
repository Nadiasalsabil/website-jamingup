@extends('layouts.master')

@section('_title')
<div class="alert alert-info">
<img src="{{ url("assetlogin/images/logo/2.png") }}" wnameth="180px">
</div>
@endsection

@section('_content')

<div class="panel panel-info">
  <div class="panel-heading"><b> Tambah Data Anggota Jamingup Studio </b></div>
  <div class="panel-body"><br>
  


  <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Lengkap  </label>
    <div class="col-sm-9">
      <input class="form-control" name="nama" type="text" placeholder="Masukkan Nama Lengkap" required >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tempat Lahir  </label>
    <div class="col-sm-9">
      <input class="form-control" name="tempat_lahir" type="text" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Lahir  </label>
    <div class="col-sm-9">
      <input class="form-control" name="tanggal_lahir" type="date" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label"> Alamat  </label>
    <div class="col-sm-9">
    <textarea class="form-control" rows="5" name="Alamat"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">No.Telepon  </label>
    <div class="col-sm-9">
      <input class="form-control" name="Kontak" type="number" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label"> Divisi  </label>
    <div class="col-sm-9">
      <input class="form-control" name="divisi" type="text" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Foto  </label>
    <div class="col-sm-9">
      <input class="form-control" name="foto" type="file" >
    </div>
  </div>
  <div class="form-group">
   <label class="col-sm-3 control-label"> <button type="submit" class="btn btn-info">Simpan</button> </label>
  </div>
 
</form>
</div>
</div>


@endsection
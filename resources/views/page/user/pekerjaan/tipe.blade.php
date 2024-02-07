@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Data</h1>
        </div>
      </div>
    </div>
  </section>

<div class="container">

@if ($pekerjaan->tipePekerjaan == null)
<form action="/user/pekerjaan/tipe" method="POST">
  @csrf

  <div class="form-group">
    <label for="jenis_pekerjaan">Tipe Pekerjaan</label>
      <input type="hidden" class="form-control" id="pekerjaan_id" name="pekerjaan_id" value="{{$pekerjaan->id}}">
      <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Masukan Jenis Pekerjaan">
    </div>

<!-- /.card-body -->


  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@else
<form action="/user/pekerjaan/tipe/{{$pekerjaan->tipePekerjaan->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-group">
      <label for="nama_pekerjaan">Pekerjaan</label>
      <input type="hidden" class="form-control" id="pekerjaan_id" name="pekerjaan_id" value="{{$pekerjaan->tipePekerjaan->pekerjaan_id}}">
      <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" value="{{$pekerjaan->tipePekerjaan->jenis_pekerjaan}}" placeholder="Masukan Tipe Pekerjaan...">
    </div>

<!-- /.card-body -->


  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endif

  </div>

@endsection
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
@if ($user->pekerjaan == null)
<form action="/user/pekerjaan" method="POST">
  @csrf

  <div class="form-group">
    <label for="nama_pekerjaan">Pekerjaan</label>
      <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->id}}">
      <input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Masukan Nama Pekerjaan">
    </div>

<!-- /.card-body -->


  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@else
<form action="/user/pekerjaan/{{$user->pekerjaan->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-group">
      <label for="nama_pekerjaan">Pekerjaan</label>
      <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->pekerjaan->user_id}}">
      <input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" value="{{$user->pekerjaan->nama_pekerjaan}}" placeholder="Masukan Nama Pekerjaan...">
    </div>

<!-- /.card-body -->


  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endif

  </div>

@endsection
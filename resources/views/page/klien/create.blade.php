@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Data</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div class="container">

    <form action="/klien" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_klien">Nama</label>
            <input type="text" class="form-control" id="nama_klien" name="nama_klien" placeholder="Masukan Nama...">
          </div>
        <div class="form-group">
          <label for="email_klien">Email</label>
          <input type="email" class="form-control" id="email_klien" name="email_klien" placeholder="Masukan email..">
        </div>
        <div class="form-group">
            <label for="notelp_klien">No Telp</label>
            <input type="number" class="form-control" id="notelp_klien" name="notelp_klien" placeholder="Masukan No Telp...">
          </div>

      <!-- /.card-body -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
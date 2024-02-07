@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container">
    <form action="/user/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama..." value="{{$user->nama}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email.." value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="notelp">No Telp</label>
            <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Masukan No Telp..." value="{{$user->notelp}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <form action="/proyek/{{$proyek->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="Masukan Nama Proyek..." value="{{$proyek->user_id}}">
                <label for="nama">Nama Proyek</label>
                <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" placeholder="Masukan Nama Proyek..." value="{{$proyek->nama_proyek}}">
            </div>
            <div class="form-group">
                <label for="email">Jenis Proyek</label>
                <input type="text" class="form-control" id="jenis_proyek" name="jenis_proyek" placeholder="Masukan Jenis.." value="{{$proyek->jenis_proyek}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

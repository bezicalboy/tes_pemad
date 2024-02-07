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
        <form action="/proyek" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tambah Proyek</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                        <option>{{ $user->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_proyek">Nama Proyek</label>
                <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" placeholder="Masukan Nama Proyek...">
            </div>
            <div class="form-group">
                <label for="jenis_proyek">Jenis Proyek</label>
                <input type="text" class="form-control" id="jenis_proyek" name="jenis_proyek" placeholder="Masukan Jenis PROYEKS..">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

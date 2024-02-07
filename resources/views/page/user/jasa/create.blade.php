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
        @if ($user->penawaranJasa == null)
            <form action="/user/jasa" method="POST">
                @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="nama_penawaran_jasa">Nama Penawaran Jasa</label>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->id}}">
                        <input type="text" class="form-control" id="nama_penawaran_jasa" name="nama_penawaran_jasa" placeholder="Masukan Nama Penawaran Jasa...">
                        <label for="harga_penawaran_jasa"> Harga Penawaran Jasa</label>
                        <input type="number" class="form-control" id="harga_penawaran_jasa" name="harga_penawaran_jasa" placeholder="Masukan Harga Penawaran Jasa (integer)...">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            <form action="/user/jasa/{{$user->penawaranJasa->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_penawaran_jasa">Nama Penawaran Jasa</label>
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->penawaranJasa->user_id}}">
                    <input type="text" class="form-control" id="nama_penawaran_jasa" name="nama_penawaran_jasa" value="{{$user->penawaranJasa->nama_penawaran_jasa}}" placeholder="Masukan Nama Penawaran Jasa...">
                    <label for="harga_penawaran_jasa"> Harga Penawaran Jasa</label>
                    <input type="number" class="form-control" id="harga_penawaran_jasa" name="harga_penawaran_jasa" placeholder="Masukan Harga Penawaran Jasa..." value="{{$user->penawaranJasa->harga_penawaran_jasa}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif
    </div>
@endsection

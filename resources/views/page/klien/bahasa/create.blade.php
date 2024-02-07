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
        @if ($klien->referensiBahasa == null)
            <form action="/klien/bahasa" method="POST">
                @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="bahasa">Referensi Bahasa</label>
                        <input type="hidden" class="form-control" id="klien_id" name="klien_id" value="{{$klien->id}}">
                        <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Masukan Referesi Bahasa...">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            <form action="/klien/bahasa/{{$klien->referensiBahasa->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_klien">Referensi Bahasa</label>
                    <input type="hidden" class="form-control" id="klien_id" name="klien_id" value="{{$klien->referensiBahasa->klien_id}}">
                    <input type="text" class="form-control" id="bahasa" name="bahasa" value="{{$klien->referensiBahasa->bahasa}}" placeholder="Masukan Referesi Bahasa...">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif
    </div>

@endsection

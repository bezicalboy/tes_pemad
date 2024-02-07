@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Apakah Pesanan Sudah Benar</h1>
                    <h2>{{$klien->permintaanJasa->nama_permintaan_jasa}}</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @if ($klien->pesananPembelian == null)
        <form action="/klien/pesanan" method="POST">
            @csrf
            <div class="container">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$klien->permintaanJasa->nama_permintaan_jasa}}" id="nama_pesanan" name="nama_pesanan">
                    <label class="form-check-label" for="defaultCheck1">
                      Sudah
                    </label>
                  </div>
                  <input type="hidden" name="klien_id" id="klien_id" value="{{$klien->id}}" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        @else
        <form action="/klien/pesanan/{{$klien->pesananPembelian->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$klien->permintaanJasa->nama_permintaan_jasa}}" id="sudah_dibayar" name="sudah_dibayar">
                    <label class="form-check-label" for="defaultCheck1">
                      Sudah
                    </label>
                  </div>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        

        
        @endif
    </div>
@endsection

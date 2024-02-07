@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sudah Dibayar</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @if ($klien->pembayaranAtasPembelian == null)
        <form action="/klien/pembayaran" method="POST">
            @csrf
            <div class="container">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Sudah" id="sudah_dibayar" name="sudah_dibayar">
                    <label class="form-check-label" for="defaultCheck1">
                      Sudah
                    </label>
                  </div>
                  <input type="hidden" name="klien_id" id="klien_id" value="{{$klien->id}}" >
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="belum" id="sudah_dibayar" name="sudah_dibayar">
                    <label class="form-check-label" for="sudah_dibayar">
                      Belum
                    </label>
                  </div>
  
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        @else
        <form action="/klien/pembayaran/{{$klien->pembayaranAtasPembelian->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="sudah" id="sudah_dibayar" name="sudah_dibayar">
                    <label class="form-check-label" for="defaultCheck1">
                      Sudah
                    </label>
                  </div>
                  <input type="hidden" name="klien_id" id="klien_id" value="{{$klien->id}}" >
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="belum" id="sudah_dibayar" name="sudah_dibayar">
                    <label class="form-check-label" for="sudah_dibayar">
                      Belum
                    </label>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        

        
        @endif
    </div>
@endsection

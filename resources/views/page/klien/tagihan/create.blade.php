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
        <form action="/klien/tagihan" method="POST">
            @csrf
            <div class="container">
                <div class="form-group">
                    <input type="hidden" name="klien_id" value="{{$klien->id}}">
                    <label for="biaya admin">Biaya Admin</label>
                    <input type="number" class="form-control" id="biaya_admin" name="biaya_admin">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

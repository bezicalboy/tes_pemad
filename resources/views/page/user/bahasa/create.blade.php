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
        @if ($user->referensiBahasa == null)
            <form action="/user/bahasa" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="user_id">Referensi Bahasa</label>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->id}}">
                        <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Masukan Referesi Bahasa...">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        @else
            <form action="/user/bahasa/{{$user->referensiBahasa->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="user_id">Referensi Bahasa</label>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->referensiBahasa->user_id}}">
                        <input type="text" class="form-control" id="bahasa" name="bahasa" value="{{$user->referensiBahasa->bahasa}}" placeholder="Masukan Referesi Bahasa...">
                    </div>
                </div>
                <!-- /.card-body -->

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif
    </div>
@endsection

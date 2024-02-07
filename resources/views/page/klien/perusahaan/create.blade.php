@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Referensi Perusahaan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container">
        @if ($klien->referensiPerusahaan == null)
            <form action="/klien/perusahaan" method="POST">
                @csrf

                <div class="form-group">
                    <input type="hidden" class="form-control" id="klien_id" name="klien_id" value="{{$klien->id}}">
                </div>
                <div class="form-group">
                    <label for="akun_bank">Akun BANK</label>
                    <input type="text" class="form-control" id="akun_bank" name="akun_bank" placeholder="Masukan Akun Bank...">
                </div>
                <div class="form-group">
                    <label for="email_perusahaan">Email Perusahaan</label>
                    <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan" placeholder="Masukan Email Perusahaan...">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            <form action="/klien/perusahaan/{{$klien->referensiPerusahaan->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <input type="hidden" class="form-control" id="klien_id" name="klien_id" value="{{$klien->id}}">
                </div>
                <div class="form-group">
                    <label for="akun_bank">Akun BANK</label>
                    <input type="text" class="form-control" id="akun_bank" name="akun_bank" placeholder="Masukan Akun Bank..." value="{{$klien->referensiPerusahaan->akun_bank}}">
                </div>
                <div class="form-group">
                    <label for="email_perusahaan">Email Perusahaan</label>
                    <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan" placeholder="Masukan Email Perusahaan..." value="{{$klien->referensiPerusahaan->email_perusahaan}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif
    </div>

@endsection

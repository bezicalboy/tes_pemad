@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail User</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div class="container">
    <div>
        <dl class="row">
            <dt class="col-sm-3 text-truncate">Nama</dt>
            <dd class="col-sm-9">{{$user->nama}}</dd>
            <dt class="col-sm-3 text-truncate">Email</dt>
            <dd class="col-sm-9">{{$user->email}}</dd>
            <dt class="col-sm-3 text-truncate">No Telp</dt>
            <dd class="col-sm-9">{{$user->notelp}}</dd>

            {{-- Pekerjaan --}}
            <dt class="col-sm-3">Pekerjaan</dt>
            @if ($user->pekerjaan == null)
            <dd class="col-sm-9">Tidak ada informasi Pekerjaan
                <br>
                <a href="pekerjaan/{{$user->id}}/edit">Tambah Pekerjaan &rarr;</a>
            </dd>
            @else
            <dd class="col-sm-9">{{$user->pekerjaan->nama_pekerjaan}}
                <br>
                <a href="pekerjaan/{{$user->id}}/edit">Ganti Pekerjaan&rarr;</a>
            </dd>
            {{-- Tipe Pekerjaan --}}
            <dt class="col-sm-3">Tipe Pekerjaan</dt>
            @if ($user->pekerjaan->tipePekerjaan == null)
            <dd class="col-sm-9"><b>(Tidak ada informasi)</b> 
                <br>
                <a href="pekerjaan/tipe/{{$user->pekerjaan->id}}/edit">Tambah data &rarr;</a>
            </dd>
            @else
            <dd class="col-sm-9">{{$user->pekerjaan->tipePekerjaan->jenis_pekerjaan}}
                <br>
                <a href="pekerjaan/tipe/{{$user->pekerjaan->id}}/edit">Ganti data&rarr;</a>
            </dd>
            @endif
            @endif

            {{-- Penawaran Jasa --}}
            <dt class="col-sm-3">Penawaran Jasa</dt>
            @if ($user->penawaranJasa == null)
            <dd class="col-sm-9">Tidak ada informasi Penawaran Jasa
                <br>
                <a href="jasa/{{$user->id}}/edit">Tambah Penawaran Jasa &rarr;</a>
            </dd>
            @else
            <dd class="col-sm-9">{{$user->penawaranJasa->nama_penawaran_jasa}}
                <br>
                <a href="jasa/{{$user->id}}/edit">Ganti Penawaran Jasa&rarr;</a>
            </dd>
            @endif

            {{-- Referensi Bahasa --}}
            <dt class="col-sm-3">Referensi Bahasa</dt>
            @if ($user->referensiBahasa == null)
            <dd class="col-sm-9">Tidak ada informasi Referensi Bahasa
                <br>
                <a href="bahasa/{{$user->id}}/edit">Tambah Referensi Bahasa &rarr;</a>
            </dd>
            @else
            <dd class="col-sm-9">{{$user->referensiBahasa->bahasa}}
                <br>
                <a href="bahasa/{{$user->id}}/edit">Ganti Referensi Bahasa&rarr;</a>
            </dd>
            @endif

            <dt class="col-sm-3">Proyek</dt>
            <dd class="col-sm-9">
                <a href="/proyek/{{$user->id}}">Lihat Proyek &rarr;</a>
            </dd>
        </dl>
    </div>
</div>
@endsection

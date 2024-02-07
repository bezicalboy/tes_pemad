@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Klien</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container">
        <div>
            <dl class="row">
                <dt class="col-sm-3 text-truncate">Nama</dt>
                <dd class="col-sm-9">{{$klien->nama_klien}}</dd>
                <dt class="col-sm-3 text-truncate">Email</dt>
                <dd class="col-sm-9">{{$klien->email_klien}}</dd>
                <dt class="col-sm-3 text-truncate">No Telp</dt>
                <dd class="col-sm-9">{{$klien->notelp_klien}}</dd>

                <dt class="col-sm-3">Referensi Perusahaan</dt>
                @if ($klien->referensiPerusahaan == null)
                    <dd class="col-sm-9">Tidak ada informasi Referensi Perusahaan
                        <br>
                        <a href="perusahaan/{{$klien->id}}/edit">Tambah Referensi Perusahaan &rarr;</a>
                    </dd>
                @else
                    <dd class="col-sm-9">
                        @if (!$klien->referensiPerusahaan->email_perusahaan == null)
                            Email: {{$klien->referensiPerusahaan->email_perusahaan}}
                            <br>
                        @endif

                        @if (!$klien->referensiPerusahaan->akun_bank == null)
                            Akun Bank: {{$klien->referensiPerusahaan->akun_bank}}
                        @endif

                        <br>
                        <a href="perusahaan/{{$klien->id}}/edit">Ganti Referensi Perusahaan &rarr;</a>
                    </dd>
                @endif

                <dt class="col-sm-3">Permintaan Jasa</dt>
                @if ($klien->permintaanJasa == null)
                    <dd class="col-sm-9">Tidak ada informasi Permintaan Jasa
                        <br>
                        <a href="permintaan/{{$klien->id}}/edit">Tambah Permintaan Jasa &rarr;</a>
                    </dd>
                @else
                    <dd class="col-sm-9">{{$klien->permintaanJasa->nama_permintaan_jasa}}
                        <br>
                        <a href="permintaan/{{$klien->id}}/edit">Ganti Permintaan Jasa &rarr;</a>
                    </dd>
                @endif

                {{-- Tagihan method --}}
                @if ($klien->permintaanJasa != null && $klien->permintaanJasa->harga_permintaan_jasa != null)
                    @if ($klien->tagihan == null)
                        <dt class="col-sm-3">Tagihan</dt>
                        <dd class="col-sm-9">Rp.{{$klien->permintaanJasa->harga_permintaan_jasa}} 
                            <br>
                            <a href="tagihan/{{$klien->id}}/edit">Tambah Biaya admin &rarr;</a>
                        </dd>
                    @else
                        <dt class="col-sm-3">Tagihan</dt>
                        <dd class="col-sm-9">Rp.{{$klien->permintaanJasa->harga_permintaan_jasa}} + Admin Rp.{{$klien->tagihan->biaya_admin}} = Rp. {{$klien->permintaanJasa->harga_permintaan_jasa + $klien->tagihan->biaya_admin}}
                            <br>
                        </dd>
                    @endif
                @endif

                {{-- Pembayaran atas pembelian --}}
                @if ($klien->tagihan != null && $klien->tagihan->biaya_admin != null)
                    @if ($klien->pembayaranAtasPembelian == null)
                        <dt class="col-sm-3">Pembayaran Atas Pembelian</dt>
                        <dd class="col-sm-9">Tidak ada informasi Pembayaran
                            <br>
                            <a href="pembayaran/{{$klien->id}}/edit">Tambah data&rarr;</a>
                        </dd>
                    @elseif ($klien->pembayaranAtasPembelian->sudah_dibayar == 'belum')
                        <dt class="col-sm-3">Pembayaran Atas Pembelian</dt>
                        <dd class="col-sm-9">{{$klien->pembayaranAtasPembelian->sudah_dibayar}}
                            <br>
                            <a href="pembayaran/{{$klien->id}}/edit">Tambah data&rarr;</a>
                        </dd>
                    @else
                        <dt class="col-sm-3">Pembayaran Atas Pembelian</dt>
                        <dd class="col-sm-9">{{$klien->pembayaranAtasPembelian->sudah_dibayar}}
                            <br>
                        </dd>
                    @endif
                @endif
                
                {{-- Pesanan Pembelian --}}
                @if ($klien->pembayaranAtasPembelian != null && $klien->pembayaranAtasPembelian->sudah_dibayar != null)
                    @if ($klien->pesananPembelian == null)
                        <dt class="col-sm-3">Pesanan Pembelian</dt>
                        <dd class="col-sm-9">Tidak ada informasi Pembelian
                            <br>
                            <a href="pesanan/{{$klien->id}}/edit">Tambah informasi &rarr;</a>
                        </dd>
                    @else
                        <dt class="col-sm-3">Pesanan Pembelian</dt>
                        <dd class="col-sm-9">Jasa {{$klien->pesananPembelian->nama_pesanan}}
                        </dd>
                    @endif
                @endif

                {{-- Referensi Bahasa --}}
                <dt class="col-sm-3">Referensi Bahasa</dt>
                @if ($klien->referensiBahasa == null)
                    <dd class="col-sm-9">Tidak ada informasi Referensi Bahasa
                        <br>
                        <a href="bahasa/{{$klien->id}}/edit">Tambah Referensi Bahasa &rarr;</a>
                    </dd>
                @else
                    <dd class="col-sm-9">{{$klien->referensiBahasa->bahasa}}
                        <br>
                        <a href="bahasa/{{$klien->id}}/edit">Ganti Referensi Bahasa &rarr;</a>
                    </dd>
                @endif
            </dl>
        </div>
    </div>
@endsection

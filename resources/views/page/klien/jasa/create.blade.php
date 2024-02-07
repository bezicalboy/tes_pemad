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
        @if ($klien->permintaanJasa == null)
        <form action="/klien/permintaan" method="POST">
            @csrf
            <div class="container">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Penawaran Jasa ID</label>
                    <input type="hidden" name="klien_id" value="{{$klien->id}}">
                    <select class="form-control" id="penawaran_jasa_id" name="penawaran_jasa_id">
                        <option>Pilih Jasa</option>

                        @foreach ($penawaran_jasa as $penjas)
                            <option value="{{ $penjas->id }}" data-nama="{{ $penjas->nama_penawaran_jasa }}" data-harga="{{ $penjas->harga_penawaran_jasa }}">{{ $penjas->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_permintaan_jasa">Nama Permintaan Jasa</label>
                    <input type="text" class="form-control" id="nama_permintaan_jasa" name="nama_permintaan_jasa" readonly>
                </div>
                <div class="form-group">
                    <label for="harga_permintaan_jasa">Harga Jasa</label>
                    <input type="text" class="form-control" name="harga_permintaan_jasa" id="harga_permintaan_jasa" readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <script>
            const penawaranSelect = document.getElementById('penawaran_jasa_id');
            const namaPermintaanInput = document.getElementById('nama_permintaan_jasa');
            const hargaPermintaanInput = document.getElementById('harga_permintaan_jasa');
        
            penawaranSelect.addEventListener('change', function() {
                const selectedOption = penawaranSelect.options[penawaranSelect.selectedIndex];
                
                const nama = selectedOption.dataset.nama;
                const harga = selectedOption.dataset.harga;
        

                namaPermintaanInput.value = nama;
                hargaPermintaanInput.value = harga;
            });
        </script>
        @else
        <form action="/klien/permintaan/{{$klien->permintaanJasa->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Penawaran Jasa ID</label>
                    <input type="hidden" name="klien_id" value="{{$klien->id}}">

                    <select class="form-control" id="penawaran_jasa_id" name="penawaran_jasa_id">
                        <option value="1">Pilih Jasa</option>
                        @foreach ($penawaran_jasa as $penjas)
            

                            <option value="{{ $penjas->id }}" data-nama="{{ $penjas->nama_penawaran_jasa }}" data-harga="{{ $penjas->harga_penawaran_jasa }}">{{ $penjas->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_permintaan_jasa">Nama Permintaan Jasa</label>
                    <input type="text" class="form-control" id="nama_permintaan_jasa" name="nama_permintaan_jasa" readonly>
                </div>
                <div class="form-group">
                    <label for="harga_permintaan_jasa">Harga Jasa</label>
                    <input type="text" class="form-control" name="harga_permintaan_jasa" id="harga_permintaan_jasa" readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <script>
            const penawaranSelect = document.getElementById('penawaran_jasa_id');
            const namaPermintaanInput = document.getElementById('nama_permintaan_jasa');
            const hargaPermintaanInput = document.getElementById('harga_permintaan_jasa');
        
            penawaranSelect.addEventListener('change', function() {
                const selectedOption = penawaranSelect.options[penawaranSelect.selectedIndex];
                
                const nama = selectedOption.dataset.nama;
                const harga = selectedOption.dataset.harga;
        

                namaPermintaanInput.value = nama;
                hargaPermintaanInput.value = harga;
            });
        </script>
        
        @endif
    </div>
@endsection

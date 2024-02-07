<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\PesananPembelian;
use Illuminate\Http\Request;

class PesananPembelianController extends Controller
{
    /**
     * Simpan pesanan pembelian baru ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        Klien::find($request->id);
        PesananPembelian::create([
            'klien_id'=> $request->klien_id,
            'nama_pesanan'=> $request->nama_pesanan,
        ]);
        return redirect('/klien/'. $request->klien_id);
    }

    /**
     * Tampilkan halaman untuk mengedit pesanan pembelian.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        return view('page.klien.pesanan.create', ['klien' => $klien]);
    }

    /**
     * Perbarui pesanan pembelian yang ditentukan di dalam penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        PesananPembelian::where('id', $id)
            ->update([
                'klien_id'=> $request->klien_id,
                'nama_pesanan'=> $request->nama_pesanan,
            ]);
        return redirect('/klien/'. $request->klien_id);
    }
}

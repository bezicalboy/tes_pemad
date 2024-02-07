<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\PembayaranAtasPembelian;
use Illuminate\Http\Request;

class PembayaranAtasPembelianController extends Controller
{
    /**
     * Simpan pembayaran atas pembelian baru untuk klien yang ditentukan.
     */
    public function store(Request $request)
    {
        $klien = Klien::find($request->id);
        $pembayaran = PembayaranAtasPembelian::create([
            'klien_id'=> $request->klien_id,
            'sudah_dibayar'=> $request->sudah_dibayar,
        ]);
        return redirect('/klien/'. $request->klien_id);
    }

    /**
     * Tampilkan formulir untuk mengedit pembayaran atas pembelian untuk klien.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        $pembayaran = PembayaranAtasPembelian::find($id);
        return view('page.klien.pembayaran.create', ['klien' => $klien, 'pembayaran' => $pembayaran]);
    }

    /**
     * Perbarui pembayaran atas pembelian yang ditentukan untuk klien.
     */
    public function update(Request $request, string $id)
    {
        PembayaranAtasPembelian::where('id', $id)
        ->update([
            'klien_id'=> $request->klien_id,
            'sudah_dibayar'=> $request->sudah_dibayar,
        ]);
        return redirect('/klien/'. $request->klien_id);
    }
}

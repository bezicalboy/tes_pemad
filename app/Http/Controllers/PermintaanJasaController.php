<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\PenawaranJasa;
use App\Models\PermintaanJasa;
use Illuminate\Http\Request;

class PermintaanJasaController extends Controller
{
    /**
     * Simpan permintaan jasa baru ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        Klien::find($request->id);
        PermintaanJasa::create([
            'klien_id'=> $request->klien_id,
            'penawaran_jasa_id'=> $request->penawaran_jasa_id,
            'nama_permintaan_jasa'=> $request->nama_permintaan_jasa,
            'harga_permintaan_jasa'=> $request->harga_permintaan_jasa,
        ]);
        return redirect('/klien/'. $request->klien_id);
    }

    /**
     * Tampilkan formulir untuk mengedit permintaan jasa untuk klien.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        $permintaan_jasa = PermintaanJasa::find($id);
        $penawaran_jasa = PenawaranJasa::all();
        return view('page.klien.jasa.create', ['klien' => $klien, 'permintaan_jasa' => $permintaan_jasa, 'penawaran_jasa' => $penawaran_jasa]);
    }

    /**
     * Perbarui permintaan jasa yang ditentukan di dalam penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        PermintaanJasa::where('id', $id)
            ->update([
                'klien_id'=> $request->klien_id,
                'penawaran_jasa_id'=> $request->penawaran_jasa_id,
                'nama_permintaan_jasa'=> $request->nama_permintaan_jasa,
                'harga_permintaan_jasa'=> $request->harga_permintaan_jasa,
            ]);
        return redirect('/klien/'. $request->klien_id);
    }
}

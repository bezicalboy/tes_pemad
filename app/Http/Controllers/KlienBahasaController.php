<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\ReferensiBahasa;
use Illuminate\Http\Request;

class KlienBahasaController extends Controller
{
    /**
    * Simpan referensi bahasa baru untuk klien.
    * ini menyimpan referensi bahasa baru untuk klien berdasarkan data yang diberikan.
    */
    public function store(Request $request)
    {
        Klien::find($request->id);
        ReferensiBahasa::create([
            'klien_id'=> $request->klien_id,
            'bahasa'=> $request->bahasa,
        ]);
        return redirect('/klien/'. $request->klien_id);

    }

    /**
     * Tampilkan formulir untuk mengedit referensi bahasa untuk klien.
     * ini menampilkan formulir untuk mengedit referensi bahasa untuk klien.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        $bahasa = ReferensiBahasa::find($id);
        return view('page.klien.bahasa.create',['klien'=>$klien, 'bahasa'=> $bahasa]);
    }

    /**
     * Perbarui referensi bahasa yang ditentukan untuk klien.
     * ini memperbarui referensi bahasa yang ditentukan untuk seorang klien berdasarkan data yang diberikan.
     */
    public function update(Request $request, string $id)
    {
        ReferensiBahasa::where('id', $id)
        ->update([
            'klien_id'=> $request->klien_id,
            'bahasa'=> $request->bahasa]);
            return redirect('/klien/'. $request->klien_id);
    }
}

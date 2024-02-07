<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\PenawaranJasa;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    /**
     * Menampilkan daftar klien.
     */
    public function index()
    {
        $kliens = Klien::all();
        return view('page.klien.index',['klients'=> $kliens]);
    }

    /**
     * Menampilkan formulir untuk membuat klien baru.
     */
    public function create()
    {
        return view('page.klien.create');
    }

    /**
     * Menyimpan klien baru ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        $klien = Klien::create([
            'nama_klien'=> $request->nama_klien,
            'email_klien'=> $request->email_klien,
            'notelp_klien'=> $request->notelp_klien,
        ]);
        return redirect('/klien');
    }

    /**
     * Menampilkan informasi tentang klien tertentu.
     */
    public function show(string $id)
    {
        $klien = Klien::find($id);
        $penjas = PenawaranJasa::where('id','=', $id)->get();
        return view('page.klien.show',['klien'=> $klien, 'penjas' => $penjas]);
    }

    /**
     * Menampilkan formulir untuk mengedit klien tertentu.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        return view('page.klien.edit',['klien'=>$klien]);
    }

    /**
     * Memperbarui klien yang ditentukan di dalam penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        $klien = Klien::where('id', $id)
        ->update([
            'nama_klien'=> $request->nama_klien,
            'email_klien'=> $request->email_klien,
            'notelp_klien'=> $request->notelp_klien,
        ]);
        return redirect('/klien');
    }

    /**
     * Menghapus klien yang ditentukan dari penyimpanan.
     */
    public function destroy(Klien $klien)
    {
        $klien->delete();
        return redirect('/klien');
    }
}

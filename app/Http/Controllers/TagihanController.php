<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    /**
     * Simpan tagihan untuk suatu klien ke dalam basis data.
     */
    public function store(Request $request)
    {
        Klien::find($request->id);
        Tagihan::create([
            'klien_id'=> $request->klien_id,
            'biaya_admin'=> $request->biaya_admin,
        ]);
        return redirect('/klien/'. $request->klien_id);
    }

    /**
     * Tampilkan formulir untuk mengedit tagihan untuk klien.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        $tagihan = Tagihan::find($id);
        return view('page.klien.tagihan.create', ['klien' => $klien, 'tagihan' => $tagihan]);
    }

    /**
     * Perbarui tagihan untuk klien di dalam basis data.
     */
    public function update(Request $request, string $id)
    {
        Tagihan::where('id', $id)
        ->update([
            'klien_id'=> $request->klien_id,
            'biaya_admin'=> $request->biaya_admin,
        ]);
        return redirect('/klien/'. $request->klien_id);
    }
}

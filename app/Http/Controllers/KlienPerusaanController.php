<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\ReferensiPerusahaan;
use Illuminate\Http\Request;

class KlienPerusahaanController extends Controller
{
    /**
     * Simpan referensi perusahaan untuk klien baru.
     */
    public function store(Request $request)
    {
        ReferensiPerusahaan::create([
            'klien_id'=> $request->klien_id,
            'akun_bank'=> $request->akun_bank,
            'email_perusahaan'=> $request->email_perusahaan,
        ]);
        return redirect('/klien/'.$request->klien_id);
    }

    /**
     * Tampilkan formulir untuk mengedit referensi perusahaan klien.
     */
    public function edit(string $id)
    {
        $klien = Klien::find($id);
        $perusahaan = ReferensiPerusahaan::find($id);
        return view('page.klien.perusahaan.create',['klien'=>$klien, 'perusahaan'=> $perusahaan]);
    }

    /**
     * Perbarui referensi perusahaan untuk klien yang ditentukan.
     */
    public function update(Request $request, string $id)
    {
        ReferensiPerusahaan::where('id', $id)
        ->update([
            'klien_id'=> $request->klien_id,
            'akun_bank'=> $request->akun_bank,
            'email_perusahaan'=> $request->email_perusahaan,
        ]);
        return redirect('/klien/'.$request->klien_id); 
    }
}

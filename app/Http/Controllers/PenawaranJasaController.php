<?php

namespace App\Http\Controllers;

use App\Models\PenawaranJasa;
use App\Models\User;
use Illuminate\Http\Request;

class PenawaranJasaController extends Controller
{
    /**
     * Simpan penawaran jasa baru untuk pengguna yang ditentukan.
     */
    public function store(Request $request)
    {
        $user = User::find($request->id);
        $jasa = PenawaranJasa::create([
            'user_id'=> $request->user_id,
            'nama_penawaran_jasa'=> $request->nama_penawaran_jasa,
            'harga_penawaran_jasa'=> $request->harga_penawaran_jasa,
        ]);
        return redirect('/user/'. $request->user_id);
    }

    /**
     * Tampilkan formulir untuk mengedit penawaran jasa untuk pengguna.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $jasa = PenawaranJasa::find($id);
        return view('page.user.jasa.create',['user'=>$user, 'jasa'=> $jasa]);
    }

    /**
     * Perbarui penawaran jasa yang ditentukan untuk pengguna.
     */
    public function update(Request $request, string $id)
    {
        PenawaranJasa::where('id', $id)
        ->update([
            'user_id'=> $request->user_id,
            'nama_penawaran_jasa'=> $request->nama_penawaran_jasa,
            'harga_penawaran_jasa'=> $request->harga_penawaran_jasa,
        ]);
        return redirect('/user/'. $request->user_id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\User;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Simpan pekerjaan baru untuk pengguna yang ditentukan.
     */
    public function store(Request $request)
    {
        $pekerjaan = Pekerjaan::create([
            'user_id'=> $request->user_id,
            'nama_pekerjaan'=> $request->nama_pekerjaan,
        ]);
        return redirect('/user/'. $request->user_id);
    }

    /**
     * Tampilkan formulir untuk mengedit pekerjaan pengguna.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $pekerjaan = Pekerjaan::find($id);
        return view('page.user.pekerjaan.create',['user'=>$user, 'pekerjaan'=> $pekerjaan]);
    }

    /**
     * Perbarui pekerjaan yang ditentukan untuk pengguna.
     */
    public function update(Request $request, string $id)
    {
        Pekerjaan::where('id', $id)
        ->update([
            'user_id'=> $request->user_id,
            'nama_pekerjaan'=> $request->nama_pekerjaan,
        ]);
        return redirect('/user/'.$request->user_id); 
    }
}

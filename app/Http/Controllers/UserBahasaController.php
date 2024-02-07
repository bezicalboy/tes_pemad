<?php

namespace App\Http\Controllers;

use App\Models\ReferensiBahasa;
use App\Models\User;
use Illuminate\Http\Request;

class UserBahasaController extends Controller
{

    /**
     * Simpan referensi bahasa untuk pengguna tertentu ke dalam basis data.
     */
    public function store(Request $request)
    {
         ReferensiBahasa::create([
            'user_id'=> $request->user_id,
            'bahasa'=> $request->bahasa,
        ]);
           return redirect('/user/'.$request->user_id);
    }

    /**
     * Tampilkan formulir untuk mengedit referensi bahasa pengguna tertentu.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $bahasa = ReferensiBahasa::find($id);
        return view('page.user.bahasa.create',['user'=>$user, 'bahasa'=> $bahasa]);
    }

    /**
     * Perbarui referensi bahasa pengguna tertentu di basis data.
     */
    public function update(Request $request, string $id)
    {
        ReferensiBahasa::where('id', $id)
        ->update([
            'user_id'=> $request->user_id,
            'bahasa'=> $request->bahasa]);
        return redirect('/user/'.$request->user_id); 
    }
}

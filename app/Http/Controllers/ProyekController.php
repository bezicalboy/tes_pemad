<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\User;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Tampilkan halaman untuk membuat proyek baru.
     */
    public function create(){
        $users = User::all();
        $proyek = Proyek::all();
        return view("page.proyek.create",["proyek"=> $proyek, 'users' =>$users]);
    }

    /**
     * Simpan proyek yang baru dibuat ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        Proyek::create([
            'user_id'=> $request->user_id,
            'nama_proyek'=> $request->nama_proyek,
            'jenis_proyek'=> $request->jenis_proyek,
        ]);
        return redirect('/proyek/'. $request->user_id);
    }

    /**
     * Tampilkan proyek yang ditentukan.
     */
    public function show(string $id)
    {
        $proyeks = Proyek::where('user_id','=', $id)->get();
        return view('page.proyek.show',compact('proyeks'));
    }

    /**
     * Tampilkan halaman untuk mengedit proyek yang ditentukan.
     */
    public function edit(string $id)
    {
        $proyek = Proyek::find($id);
        return view('page.proyek.edit',['proyek'=>$proyek]);
    }

    /**
     * Perbarui proyek yang ditentukan di dalam penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        $proyek = Proyek::find($id)
        ->update([
            'user_id'=> $request->user_id,
            'nama_proyek'=> $request->nama_proyek,
            'jenis_proyek'=> $request->jenis_proyek,
        ]);
        return redirect('/proyek/'.$request->user_id);
    }

    /**
     * Hapus proyek yang ditentukan dari penyimpanan.
     */
    public function destroy(Proyek $proyek)
    {
        $proyek->delete();
        return redirect('/proyek/'.$proyek->user_id);
    }
}

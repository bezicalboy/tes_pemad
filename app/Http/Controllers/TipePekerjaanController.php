<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\TipePekerjaan;
use Illuminate\Http\Request;

class TipePekerjaanController extends Controller
{
    /**
     * Simpan tipe pekerjaan untuk suatu pekerjaan ke dalam basis data.
     */
    public function store(Request $request)
    {
        TipePekerjaan::create([
            'pekerjaan_id'=> $request->pekerjaan_id,
            'jenis_pekerjaan'=> $request->jenis_pekerjaan,
        ]);
        return redirect('/user/'. $request->pekerjaan_id);
    }

    /**
     * Tampilkan formulir untuk mengedit tipe pekerjaan suatu pekerjaan.
     */
    public function edit(string $id)
    {
        $pekerjaan = Pekerjaan::find($id);
        $tipe = TipePekerjaan::find($id);
        return view('page.user.pekerjaan.tipe',['pekerjaan'=>$pekerjaan, 'tipe'=> $tipe]);
    }

    /**
     * Perbarui tipe pekerjaan suatu pekerjaan di dalam basis data.
     */
    public function update(Request $request, string $id)
    {
        TipePekerjaan::where('id', $id)
        ->update([
            'pekerjaan_id'=> $request->pekerjaan_id,
            'jenis_pekerjaan'=> $request->jenis_pekerjaan,
        ]);
        return redirect('/user/'.$request->pekerjaan_id); 
    }
}

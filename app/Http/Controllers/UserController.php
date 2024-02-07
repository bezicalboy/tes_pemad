<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    /**
     * Menampilkan daftar pengguna.
     */
    public function index()
    {
        $users = User::all();
        return view('page.user.index',['users'=> $users]);
    }

     /**
     * Menampilkan formulir untuk membuat pengguna baru.
     */
    public function create()
    {
        return view('page.user.create');
    }
    

   
    /**
     * Simpan pengguna yang baru dibuat ke dalam basis data.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'notelp'=> $request->notelp,
        ]);
           return redirect('/user');
    }

    /**
     * Tampilkan detail pengguna tertentu sesuai id.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $pekerjaan = Pekerjaan::find($id);
        return view('page.user.show',['user'=> $user, 'pekerjaan' => $pekerjaan]);
    }

      /**
     * Tampilkan formulir untuk mengedit pengguna tertentu.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('page.user.edit',['user'=>$user]);
    }

     /**
     * Perbarui catatan pengguna tertentu di basis data.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)
        ->update([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'notelp'=> $request->notelp,
        ]);
           return redirect('/user');
    }

    /**
     * Hapus catatan pengguna tertentu dari basis data.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/user');
    }
}

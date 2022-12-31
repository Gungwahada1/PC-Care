<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function data_pegawai()
    {
        $pegawai = User::get()->where('role', 1);
        return view('pages.pegawai.data-pegawai', compact('pegawai'));
    }

    public function tambah_pegawai()
    {
        return view('pages.pegawai.tambah-pegawai');
    }

    public function store(Request $request)
    {
        // Eloquent type
        $pegawai = User::create($request->all());

        // Query Builder type
        // $pegawai = new User();
        // $pegawai->name = $request->name;
        // $pegawai->email = $request->email;
        // $pegawai->gender = $request->gender;
        // $pegawai->role = $request->role;
        // $pegawai->active = $request->active;
        // $pegawai->save();
        return redirect()->route('data.pegawai');
    }

    public function edit_pegawai($id)
    {
        $pegawai = User::find($id);
        return view('pages.pegawai.edit-pegawai', compact('pegawai'));
    }

    public function update_pegawai(Request $request, $id)
    {
        // Eloquent type
        $pegawai = User::find($id);
        $pegawai->update($request->all());
        return redirect()->route('data.pegawai');
    }

    public function destroy_pegawai(Request $request, $id)
    {
        // Eloquent type
        $pegawai = User::find($id);
        $pegawai->delete();
        return redirect()->route('data.pegawai');
    }
}
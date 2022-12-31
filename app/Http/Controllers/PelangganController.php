<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function data_pelanggan()
    {
        $pelanggan = User::get()->where('role', 0);
        return view('pages.pelanggan.data-pelanggan', compact('pelanggan'));
    }

    public function edit_pelanggan($id)
    {
        $pelanggan = User::find($id);
        return view('pages.pelanggan.edit-pelanggan', compact('pelanggan'));
    }

    public function update_pelanggan(Request $request, $id)
    {
        // Eloquent type
        $pelanggan = User::find($id);
        $pelanggan->update($request->all());
        return redirect()->route('data.pelanggan');
    }

    public function destroy_pelanggan(Request $request, $id)
    {
        // Eloquent type
        $pelanggan = User::find($id);
        $pelanggan->delete();
        return redirect()->route('data.pelanggan');
    }
}
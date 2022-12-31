<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function data_komentar()
    {
        $komentar = Comment::get();
        return view('pages.komentar.data-komentar', compact('komentar'));
    }

    public function destroy_komentar(Request $request, $id)
    {
        // Eloquent type
        $pelanggan = Comment::find($id);
        $pelanggan->delete();
        return redirect()->route('data.komentar');
    }
}
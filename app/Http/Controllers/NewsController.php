<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list_news()
    {
        $berita = News::get();
        return view('pages.news.data-news', compact('berita'));
    }

    public function tambah_berita()
    {
        return view('pages.news.tambah-news');
    }

    public function store(Request $request)
    {
        // Eloquent type
        News::create($request->all());

        // Query Builder type
        // $pegawai = new User();
        // $pegawai->name = $request->name;
        // $pegawai->email = $request->email;
        // $pegawai->gender = $request->gender;
        // $pegawai->role = $request->role;
        // $pegawai->active = $request->active;
        // $pegawai->save();

        return redirect()->route('list.news');
    }

    public function edit_berita($id)
    {
        $berita = News::find($id);
        return view('pages.news.edit-news', compact('berita'));
    }

    public function update_berita(Request $request, $id)
    {
        // Eloquent type
        $berita = News::find($id);
        $berita->update($request->all());
        return redirect()->route('list.news');
    }

    public function destroy_berita(Request $request, $id)
    {
        // Eloquent type
        $berita = News::find($id);
        $berita->delete();
        return redirect()->route('list.news');
    }
}
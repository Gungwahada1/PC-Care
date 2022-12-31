<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About_page;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function about_page()
    {
        $aboutPage = About_page::get()->where('id', 1);
        return view('pages.frontend.about-page', compact('aboutPage'));
    }

    public function update_about_page(Request $request, $id)
    {
        $aboutPage = About_page::findOrFail($id);
        $aboutPage->update($request->all());
        if ($request->hasFile('imageBanner1')) {
            $imageBanner1 = $request->file('imageBanner1');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $nameImage1 = $timestamp . '-' . $imageBanner1->getClientOriginalName();
            $aboutPage->imageBanner1 = $nameImage1;
            $imageBanner1->move(public_path() . '/aboutPage/', $nameImage1);
            $aboutPage->save();
        }
        return redirect()->route('about.page');
    }
}
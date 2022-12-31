<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Newspages;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public function news_page()
    {
        $newsPage = Newspages::get()->where('id', 1);
        return view('pages.frontend.news-page', compact('newsPage'));
    }

    public function update_news_page(Request $request, $id)
    {
        $aboutPage = Newspages::findOrFail($id);
        $aboutPage->update($request->all());
        // if ($request->hasFile('imageBanner1')) {
        //     $imageBanner1 = $request->file('imageBanner1');
        //     $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        //     $nameImage1 = $timestamp . '-' . $imageBanner1->getClientOriginalName();
        //     $aboutPage->imageBanner1 = $nameImage1;
        //     $imageBanner1->move(public_path() . '/aboutPage/', $nameImage1);
        //     $aboutPage->save();
        // }
        return redirect()->route('news.page');
    }
}
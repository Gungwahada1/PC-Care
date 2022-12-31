<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Landingpages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingPageController extends Controller
{
    public function landing_page()
    {
        $landingPage = Landingpages::get()->where('id', 1);
        return view('pages.frontend.landing-page', compact('landingPage'));
    }

    public function update_landing_page(Request $request, $id)
    {
        $landingPage = Landingpages::findOrFail($id);
        $landingPage->update($request->all());
        if ($request->hasFile('imageBanner1') && $request->hasFile('imageBanner2')) {
            $imageBanner1 = $request->file('imageBanner1');
            $imageBanner2 = $request->file('imageBanner2');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $nameImage1 = $timestamp . '-' . $imageBanner1->getClientOriginalName();
            $nameImage2 = $timestamp . '-' . $imageBanner2->getClientOriginalName();
            $landingPage->imageBanner1 = $nameImage1;
            $landingPage->imageBanner2 = $nameImage2;
            $imageBanner1->move(public_path() . '/LandingPage/', $nameImage1);
            $imageBanner2->move(public_path() . '/LandingPage/', $nameImage2);
            $landingPage->save();
        }
        return redirect()->route('landing.page');
    }
}
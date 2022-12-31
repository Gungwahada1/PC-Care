<?php

namespace App\Http\Controllers;

use App\Models\About_page;
use App\Models\Contact_page;
use App\Models\Landingpages;
use App\Models\News;
use App\Models\Newspages;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $landingPage = Landingpages::get()->where('id', 1);
        return view('pages.index', compact('landingPage'));
    }

    public function products()
    {
        $produks = Product::get();
        return view('pages.product', compact('produks'));
    }

    public function news()
    {
        $newsPage = Newspages::get()->where('id', 1);
        $news = News::with('comments')->get();
        return view('pages.news', compact('newsPage', 'news'));
    }

    public function contact()
    {
        $contactPage = Contact_page::get()->where('id', 1);
        return view('pages.contact', compact('contactPage'));
    }

    public function about()
    {
        $aboutPage = About_page::get()->where('id', 1);
        return view('pages.about', compact('aboutPage'));
    }

    public function letsChat()
    {
        return view('pages.letsChat');
    }
}
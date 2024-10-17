<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all();
        return view('news.default', compact('news'));
    }
    public function index()
    {
        $news = News::all(); // Haber verilerini alır
        return view('index.default', ['news' => $news]); // Ana ekran view dosyasını ve haberleri döndürür
    }
}

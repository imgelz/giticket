<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Event;
use App\Artikel;

class FrontendController extends Controller
{
    public function event(Request $request)
    {
        $kategori = Kategori::all();
        return view('Frontend.event', compact('kategori'));
    }

    public function kategori(Request $request)
    {
        $kategori = Kategori::take(1)->get();
        return view('Frontend.single-kategori', compact('kategori'));
    }

    public function artikel(Request $request)
    {
        $artikel = Artikel::all();
        return view('Frontend.blog', compact('artikel'));
    }

    public function singleartikel($artikel)
    {
        $artikel = Artikel::where('slug', '=', $artikel)->first();
        return view('Frontend.single-artikel', compact('artikel'));
    }
}

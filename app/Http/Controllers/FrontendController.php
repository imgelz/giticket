<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Event;

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
}

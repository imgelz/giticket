<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Event;
use App\Artikel;
use App\Tiket;
use DB;

class FrontendController extends Controller
{
    public function event(Request $request)
    {
        $kategori = Kategori::all();
        $event = Event::with('kategori')->get();
        return view('Frontend.event', compact('kategori', 'event'));
    }

    public function kategori($kategori)
    {
        $kategori = Kategori::where('slug', '=', $kategori)->first();
        $event = DB::select('select * from events where id_kategori = ' . $kategori->id . '');
        return view('Frontend.single-kategori', compact('kategori', 'event'));
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

    public function singleevent($event)
    {
        $event = Event::with('kategori')->where('slug', '=', $event)->first();
        $tiket = DB::select('select * from tikets where id_event = ' . $event->id . '');
        return view('Frontend.single-event', compact('event', 'tiket'));
    }
}

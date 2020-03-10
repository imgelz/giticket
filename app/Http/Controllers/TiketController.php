<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;
use App\Event;
use Auth;
use DB;
use Illuminate\Support\Str;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::where('id_user', Auth::user()->id)->latest()->get();
        return view('Backend.Penjual.Tiket.tiket', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_tiket' => 'required',
                'jumlah_tiket' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'id_event' => 'required'
            ]
        );

        $slug = Str::slug($request->nama_tiket, '-');
        $id_user = Auth::user()->id;

        Tiket::updateOrCreate(
            ['id' => $request->id],
            [
                'nama_tiket' => $request->nama_tiket,
                'jumlah_tiket' => $request->jumlah_tiket,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'slug' => $slug,
                'id_event' => $request->id_event,
                'id_user' => $id_user,
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket = Tiket::find($id);
        return response()->json($tiket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function event()
    {
        $event = Event::where('id_user', Auth::user()->id)->latest()->get();
        return response()->json($event);
    }
}

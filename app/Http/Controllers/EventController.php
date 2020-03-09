<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Kategori;
use Illuminate\Support\Facades\File;
use Auth;
use DB;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $event = Event::with('kategori')->where('id_user', Auth::user()->id)->latest()->get();
        return view('Backend.Penjual.Event.event', compact('event'));
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
        $slug = Str::slug($request->nama_event, '-');
        $id_user = Auth::user()->id;

        // create
        if (is_null($request->id)) {
            $spanduk = Str::random(6) . $request->file('spanduk')->getClientOriginalName();
            $request->spanduk->move(public_path('/assets/front/event'), $spanduk);
            Event::updateOrCreate(
                ['id' => $request->id],
                [
                    'nama_event' => $request->nama_event,
                    'tanggal_mulai' => $request->tanggal_mulai,
                    'tanggal_selesai' => $request->tanggal_selesai,
                    'waktu_mulai' => $request->waktu_mulai,
                    'waktu_selesai' => $request->waktu_selesai,
                    'format_waktu' => $request->format_waktu,
                    'lokasi' => $request->lokasi,
                    'deskripsi' => $request->deskripsi,
                    'syarat' => $request->syarat,
                    'spanduk' => $spanduk,
                    'slug' => $slug,
                    'id_kategori' => $request->id_kategori,
                    'id_user' => $id_user,

                ]
            );
            // edit
        } else {
            // edit mun spandukna te diubah
            if (is_null($request->spanduk)) {
                Event::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'nama_event' => $request->nama_event,
                        'tanggal_mulai' => $request->tanggal_mulai,
                        'tanggal_selesai' => $request->tanggal_selesai,
                        'waktu_mulai' => $request->waktu_mulai,
                        'waktu_selesai' => $request->waktu_selesai,
                        'format_waktu' => $request->format_waktu,
                        'lokasi' => $request->lokasi,
                        'deskripsi' => $request->deskripsi,
                        'syarat' => $request->syarat,
                        'slug' => $slug,
                        'id_kategori' => $request->id_kategori,
                        'id_user' => $id_user,
                    ]
                );
                // sabalikna
            } else {
                $old_spanduk = \DB::select('SELECT spanduk FROM events WHERE id = ' . $request->id . '');
                $data = '';
                foreach ($old_spanduk as $value) {
                    $data .= $value->spanduk;
                }
                $image_path = "/assets/front/event/" . $data;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $spanduk = Str::random(6) . $request->file('spanduk')->getClientOriginalName();
                $request->spanduk->move(public_path('/assets/front/event'), $spanduk);
                Event::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'nama_event' => $request->nama_event,
                        'tanggal_mulai' => $request->tanggal_mulai,
                        'tanggal_selesai' => $request->tanggal_selesai,
                        'waktu_mulai' => $request->waktu_mulai,
                        'waktu_selesai' => $request->waktu_selesai,
                        'format_waktu' => $request->format_waktu,
                        'lokasi' => $request->lokasi,
                        'deskripsi' => $request->deskripsi,
                        'syarat' => $request->syarat,
                        'spanduk' => $spanduk,
                        'slug' => $slug,
                        'id_kategori' => $request->id_kategori,
                        'id_user' => $id_user,
                    ]
                );
            }
        }

        return response()->json(['success' => ' Berhasil di Simpan']);
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
        $event = Event::find($id);
        return response()->json($event);
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
}

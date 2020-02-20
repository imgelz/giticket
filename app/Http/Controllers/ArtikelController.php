<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use DataTables;
use Illuminate\Support\Facades\File;
use Auth;
use DB;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $artikel = Artikel::latest()->get();
            return Datatables::of($artikel)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Edit" class="btn btn-warning btn-sm edit-artikel"><i class="nav-icon fas fa-pen" style="color:white"></i></a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Hapus" class="btn btn-danger btn-sm hapus-artikel"><i class="nav-icon fas fa-trash" style="width:15px"></i></a>';                    return $btn;
                })
                ->addColumn('foto', function ($data) {
                    $img = '<img src="/assets/img/artikel/' . $data->foto . '" alt="" width="100%" height="15%">';
                    return $img;
                })
                ->addColumn('konten', function ($data) {
                    $kon = Str::limit($data->konten,600);
                    return $kon;
                })
                ->rawColumns(['aksi','foto','konten'])
                ->make(true);
        }
        return view('Backend.Admin.Artikel.artikel');
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
        $slug = Str::slug($request->judul, '-');

        // create
        if (is_null($request->id)) {
            $foto = Str::random(6).$request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/assets/img/artikel'), $foto);
            Artikel::updateOrCreate(
                ['id' => $request->id],
                [
                    'judul' => $request->judul,
                    'slug' => $slug,
                    'konten' => $request->konten,
                    'foto' => $foto,

                ]
            );
            // edit
        } else {
            // edit mun fotona te diubah
            if (is_null($request->foto)) {
                Artikel::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'judul' => $request->judul,
                        'slug' => $slug,
                        'konten' => $request->konten

                    ]
                );
                // sabalikna
            } else {
                $old_foto = \DB::select('SELECT foto FROM artikels WHERE id = ' . $request->id . '');
                $data = '';
                foreach ($old_foto as $value) {
                    $data .= $value->foto;
                }
                $image_path = "/assets/img/artikel/" . $data;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $foto = Str::random(6).$request->file('foto')->getClientOriginalName();
                $request->foto->move(public_path('/assets/img/artikel'), $foto);
                Artikel::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'judul' => $request->judul,
                        'slug' => $slug,
                        'konten' => $request->konten,
                        'foto' => $foto,

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
        $artikel = Artikel::find($id);
        return response()->json($artikel);
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
        $artikel = Artikel::findOrFail($request->id);
        if (!artikel::destroy($request->id)) {
            return redirect()->back();
        } else {
            $artikel->delete();

            $response = [
                'success' => true,
                'data'  => $artikel,
                'message' => 'Berhasil dihapus!'
            ];
            return response()->json($response, 200);
        }
    }
}

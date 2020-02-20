<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use DataTables;
use Illuminate\Support\Facades\File;
use Auth;
use DB;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Kategori::latest()->get();
            return Datatables::of($kategori)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Edit" class="btn btn-warning btn-sm edit-kategori"><i class="nav-icon fas fa-pen" style="color:white"></i></a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Hapus" class="btn btn-danger btn-sm hapus-kategori"><i class="nav-icon fas fa-trash" style="width:15px"></i></a>';
                    return $btn;
                })
                ->addColumn('foto', function ($data) {
                    $img = '<img src="/assets/img/kategori/' . $data->foto . '" alt="" width="100%" height="50%">';
                    return $img;
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }
        return view('Backend.Admin.Kategori.kategori');
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
        $slug = Str::slug($request->nama_kategori, '-');

        // create
        if (is_null($request->id)) {
            $foto = Str::random(6) . $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/assets/img/kategori'), $foto);
            Kategori::updateOrCreate(
                ['id' => $request->id],
                [
                    'nama_kategori' => $request->nama_kategori,
                    'slug' => $slug,
                    'foto' => $foto,

                ]
            );
            // edit
        } else {
            // edit mun fotona te diubah
            if (is_null($request->foto)) {
                Kategori::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'nama_kategori' => $request->nama_kategori,
                        'slug' => $slug,

                    ]
                );
                // sabalikna
            } else {
                $old_foto = \DB::select('SELECT foto FROM kategoris WHERE id = ' . $request->id . '');
                $data = '';
                foreach ($old_foto as $value) {
                    $data .= $value->foto;
                }
                $image_path = "/assets/img/kategori/" . $data;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $foto = Str::random(6) . $request->file('foto')->getClientOriginalName();
                $request->foto->move(public_path('/assets/img/kategori'), $foto);
                Kategori::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'nama_kategori' => $request->nama_kategori,
                        'slug' => $slug,
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
        $kategori = Kategori::find($id);
        return response()->json($kategori);
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

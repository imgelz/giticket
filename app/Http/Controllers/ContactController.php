<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DataTables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $contact = Contact::latest()->get();
            return Datatables::of($contact)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = ' <button type="button" title="Lihat" class="lihat-contact btn btn-danger btn-sm" data-id="' . $row->id . '" data-subject="' . $row->subject . '" data-message="' . $row->message . '"  data-nama ="' . $row->nama . '" data-email ="' . $row->email . '" data-toggle="modal" data-target="#hapus-contact"><i class="fa fa-trash-o"></i></button>';
                    $btn = $btn.' <button type="button" title="Hapus" class="hapus-contact btn btn-danger btn-sm" data-id="' . $row->id . '" data-subject="' . $row->subject . '" data-message="' . $row->message . '"  data-nama ="' . $row->nama . '" data-email ="' . $row->email . '" data-toggle="modal" data-target="#hapus-contact"><i class="fa fa-trash-o"></i></button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('Backend.Admin.Contact.contact');
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
        $contact = new Contact;

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'judul' => 'required',
            'pesan' => 'required'
        ]);
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->judul = $request->judul;
        $contact->pesan = $request->pesan;
        $contact->save();

        $response = [
            'success' => true,
            'data'  => $contact,
            'message' => 'Berhasil Menambah!'
        ];
        return response()->json($response, 200);
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
        //
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

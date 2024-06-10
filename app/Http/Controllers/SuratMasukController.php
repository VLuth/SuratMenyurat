<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = SuratMasuk::all();
        return view ('suratmasuk', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tambahsuratmasuk');
    }

    public function __construct(){
        $this->suratmasuk = new SuratMasuk;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->suratmasuk->nosurat = $request->nosurat;
        $this->suratmasuk->perihal = $request->perihal;
        $this->suratmasuk->tujuan = $request->tujuan;
        $this->suratmasuk->file = $request->file->store->file;

        $rules = [
            'nosurat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required'
        ];

        $message = [
            'required' => 'form ini harus diisi',
        ];

        $this->validate($request, $rules, $message);

        $this->suratmasuk->save();

        return redirect()->route('suratmasuk')->with('successtambah', 'data buku berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

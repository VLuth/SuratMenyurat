<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\suratmasuk;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = SuratMasuk::all();
        $pengirim = Auth::user()->name;
        return view ('suratmasuk', compact('query', 'pengirim'));
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
        $this->suratmasuk->pengirim = $request->pengirim;
        $this->suratmasuk->file = $request->file;

        $rules = [
            'nosurat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required'
        ];

        $message = [
            'required' => 'form ini harus diisi',
        ];

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
    public function edit($id)
    {
        $edit = suratmasuk::findOrFail($id);
        return view ('suratmasuk', compact('edit'));
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
    public function destroy($id)
    {
        $hapus = suratmasuk::findOrFail($id);
        $hapus->delete();
        return redirect()->route('suratmasuk')->with('successdestroy', 'data dihapus');
    }
}
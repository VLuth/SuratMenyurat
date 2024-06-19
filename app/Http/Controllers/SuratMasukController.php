<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use App\Models\suratmasuk;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = SuratMasuk::all();
        return view ('suratmasuk', compact('query', 'edit'));
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
        if ($request->hasFile('file')){
        $file = $request->file('file');
        $text = $file->getClientOriginalExtension();
        $filename = time() .".". $text;
        $filepath = $file->storeAs('public', $filename);
        $this->suratmasuk->file = $filename;
        }

        $this->suratmasuk->nosurat = $request->nosurat;
        $this->suratmasuk->perihal = $request->perihal;
        $this->suratmasuk->tujuan = $request->tujuan;
        $this->suratmasuk->pengirim = $request->pengirim;
        

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
    public function show($id)
    {
        $edit = SuratMasuk::findOrFail($id);
        return response()->json($edit);
    }

    public function downloadfile($request, $file)
    {
        return response()->download(public_path('storage/app/public/suratmasuk' .$file));
    }

    public function viewfile($id)
    {
        return response()->download(public_path('storage/app/public/suratmasuk' .$file));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = suratmasuk::findOrFail($id);
        return view ('viewfile', compact('edit'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $file = $request->file('file');
        $text = $file->getClientOriginalExtension();
        $filename = time() .".". $text;
        $filepath = $file->storeAs('public', $filename);
        $this->suratmasuk->file = $filename;

        $this->suratmasuk->nosurat = $request->nosurat;
        $this->suratmasuk->perihal = $request->perihal;
        $this->suratmasuk->tujuan = $request->tujuan;
        $this->suratmasuk->pengirim = $request->pengirim;

        $this->suratmasuk->save();
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
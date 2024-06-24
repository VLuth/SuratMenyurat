<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\response;
use App\Models\SuratKeluar;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = SuratKeluar::all();
        return view ('suratkeluar', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tambahsuratkeluar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $suratkeluar = new SuratKeluar;

        if ($request->hasFile('lampiran')){
            $lampiran = $request->file('lampiran');
            $text = $lampiran->getClientOriginalName();
            $lampiranname = time() .".". $text;
            $lampiranpath = $lampiran->storeAs('public', $lampiranname);
            $suratkeluar->lampiran = $lampiranname;
            }
    
            $suratkeluar->nosurat = $request->nosuratkeluar;
            $suratkeluar->perihal = $request->perihal;
            $suratkeluar->tujuan = $request->tujuan;
            $suratkeluar->sifat = $request->sifat;
            $suratkeluar->kepada = $request->kepada;
            $suratkeluar->isi = $request->isi;
            $suratkeluar->pengirim = $request->pengirim;
            $suratkeluar->tanggal = $request->tanggal;
            $suratkeluar->status = $request->status;
            
    
            $rules = [
                'nosurat' => 'required',
                'perihal' => 'required',
                'tujuan' => 'required',
                'lampiran' => "required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000"
            ];
    
            $message = [
                'required' => 'form ini harus diisi',
                'pdf' => 'lampiran harus berupa pdf'
            ];
    
            $suratkeluar->save();
    
            return redirect()->route('suratkeluar')->with('successtambah', 'data buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $edit = Suratkeluar::findOrFail($id);
        return view('view', compact('edit'));
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
        $update = suratkeluar::findOrFail($id);

        if ($request->hasFile('lampiran')){
            $lampiran = $request->file('lampiran');
            $text = $lampiran->getClientOriginalName();
            $lampiranname = time() .".". $text;
            $lampiranpath = $lampiran->storeAs('public', $lampiranname);
            $update->lampiran = $lampiranname;
        }

        $update->nosurat = $request->nosurat;
        $update->perihal = $request->perihal;
        $update->tujuan = $request->tujuan;
        $update->pengirim = $request->pengirim;
        $update->tanggal = $request->tanggal;

        $update->save();

        return redirect()->route('suratkeluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

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
    public function update(Request $request, $id)
    {
        $update = suratmasuk::findOrFail($id);

        if ($request->hasFile('file')){
            $file = $request->file('file');
            $text = $file->getClientOriginalExtension();
            $filename = time() .".". $text;
            $filepath = $file->storeAs('public', $filename);
            $update->file = $filename;
        }

        $update->nosurat = $request->nosurat;
        $update->perihal = $request->perihal;
        $update->tujuan = $request->tujuan;
        $update->pengirim = $request->pengirim;

        $update->save();

        return redirect()->route('suratmasuk');
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

    public function filter(Request $request){
    $tanggalawal = $request->tanggalawal;
    $tanggalakhir = $request->tanggalakhir;
    $perihal = $request->filterperihal;

    if ($tanggalawal !=null && $tanggalakhir!=null && $perihal!=null) {
                $query = suratmasuk::whereDate('created_at', '>=', $tanggalawal)
                                   ->whereDate('created_at', '<=', $tanggalakhir)
                                   ->where('perihal', $perihal)
                                   ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalawal !=null && $tanggalakhir !=null) {
                $query = suratmasuk::whereDate('created_at', '>=', $tanggalawal)
                                   ->whereDate('created_at', '<=', $tanggalakhir)
                                   ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalawal!=null) {
                $query = suratmasuk::whereDate('created_at', '>=', $tanggalawal)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalakhir!=null && $perihal!=null) {
                $query = suratmasuk::whereDate('created_at', '<=', $tanggalakhir)
                                    ->where('perihal', $perihal)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalakhir!=null) {
                $query = suratmasuk::whereDate('created_at', '<=', $tanggalakhir)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else if ($perihal!=null) {
                $query = suratmasuk::where('perihal', $perihal)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else {
        return view('suratmasuk', compact('query'));}
    }


}
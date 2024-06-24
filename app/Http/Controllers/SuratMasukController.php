<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\response;
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
        $text = $file->getClientOriginalName();
        $filename = time() .".". $text;
        $filepath = $file->storeAs('public', $filename);
        $this->suratmasuk->file = $filename;
        }

        $this->suratmasuk->nosurat = $request->nosurat;
        $this->suratmasuk->perihal = $request->perihal;
        $this->suratmasuk->tujuan = $request->tujuan;
        $this->suratmasuk->pengirim = $request->pengirim;
        $this->suratmasuk->tanggalsurat = $request->tanggal;
        

        $rules = [
            'nosurat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'file' => "required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000"
        ];

        $message = [
            'required' => 'form ini harus diisi',
            'pdf' => 'file harus berupa pdf'
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
        return view('view', compact('edit'));
    }

    public function downloadfile($file)
    {
        return response()->download(public_path('storage/' . $file));
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
            $text = $file->getClientOriginalName();
            $filename = time() .".". $text;
            $filepath = $file->storeAs('public', $filename);
            $update->file = $filename;
        }

        $update->nosurat = $request->nosurat;
        $update->perihal = $request->perihal;
        $update->tujuan = $request->tujuan;
        $update->pengirim = $request->pengirim;
        $update->tanggalsurat = $request->tanggal;

        $update->save();

        return redirect()->route('suratmasuk');
    }

    public function verifikasi(Request $request, $id)
    {
        $update = suratmasuk::findOrFail($id);

        $update->tanggalverifikasi = $request->tanggalverifikasi;
        $update->verifikasi = $request->verifikasi;
        $update->status = $request->verifikasi;
        $update->keteranganverifikasi = $request->keteranganverifikasi;

        $update->save();

        return redirect()->route('verifikasi');
    }

    public function disposisi(Request $request, $id)
    {
        $update = suratmasuk::findOrFail($id);

        $update->tanggaldisposisi = $request->tanggaldisposisi;
        $update->aksi = $request->aksi;
        $update->status = $request->aksi;
        $update->keterangandisposisi = $request->keterangandisposisi;
        $update->tujuandisposisi = $request->tujuandisposisi;

        $update->save();

        return redirect()->route('disposisi');
    }

    public function tindaklanjut(Request $request, $id)
    {
        $update = suratmasuk::findOrFail($id);

        $update->tanggaltindaklanjut = $request->tanggaltindaklanjut;
        $update->petugas = $request->petugas;
        $update->hasiltindaklanjut = $request->hasiltindaklanjut;
        $update->status = $request->hasiltindaklanjut;

        $update->save();

        return redirect()->route('tindaklanjut');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $hapus = suratmasuk::findOrFail($id);
        $file = $hapus->file;
        $filepath = 'storage/{{$file}}';
        $hapus->delete();
        return redirect()->route('suratmasuk')->with('successdestroy', 'data dihapus');
    }

    public function filter(Request $request){
    $tanggalawal = $request->tanggalawal;
    $tanggalakhir = $request->tanggalakhir;
    $perihal = $request->filterperihal;

    if ($tanggalawal !=null && $tanggalakhir!=null && $perihal!=null) {
                $query = suratmasuk::whereDate('tanggal', '>=', $tanggalawal)
                                   ->whereDate('tanggal', '<=', $tanggalakhir)
                                   ->where('perihal', $perihal)
                                   ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalawal !=null && $tanggalakhir !=null) {
                $query = suratmasuk::whereDate('tanggal', '>=', $tanggalawal)
                                   ->whereDate('tanggal', '<=', $tanggalakhir)
                                   ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalawal!=null) {
                $query = suratmasuk::whereDate('tanggal', '>=', $tanggalawal)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalakhir!=null && $perihal!=null) {
                $query = suratmasuk::whereDate('tanggal', '<=', $tanggalakhir)
                                    ->where('perihal', $perihal)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else if ($tanggalakhir!=null) {
                $query = suratmasuk::whereDate('tanggal', '<=', $tanggalakhir)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else if ($perihal!=null) {
                $query = suratmasuk::where('perihal', $perihal)
                                    ->get();
                return view('suratmasuk', compact('query'));
    } else {
        $query = suratmasuk::all();
        return view('suratmasuk', compact('query'));}
    }


}
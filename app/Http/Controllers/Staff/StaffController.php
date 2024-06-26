<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;

class StaffController extends Controller
{
    public function index(){
        return view('dashboardstaff');
    }

    public function suratmasukstaff(){
        $query = SuratMasuk::all();
        return view ('suratmasuk', compact('query'));
    }

    
    
    public function verifikasi(){
        $query = SuratMasuk::where('status', 'Menunggu Verifikasi', 'Revisi Sekretaris')
        ->get();
        return view ('verifikasi', compact('query'));
    }

    public function disposisi(){
        $query = SuratMasuk::whereIn('status', ['Verifikasi Sekretaris', 'Selesai'])
                    ->get();
                    return view ('disposisi', compact('query'));
                }
                
    public function tindaklanjut(){
        $query = SuratMasuk::whereIn('status', ['Disposisi Ketua', 'selesai'])
                    ->get();
        return view ('tindaklanjut', compact('query'));
    }

    public function suratkeluarstaff(){
        $query = SuratKeluar::all();
        return view ('suratkeluar', compact('query'));
    }
    
}

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
        $query = SuratMasuk::where('status', 'Menunggu Verifikasi');
        return view ('verifikasi', compact('query'));
    }

    public function suratkeluarstaff(){
        return view('suratkeluar');
    }
}

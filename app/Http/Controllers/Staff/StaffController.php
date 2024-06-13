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
        $pengirim = Auth::user()->name;
        return view ('suratmasuk', compact('query', 'pengirim'));
    }
    public function suratkeluarstaff(){
        return view('suratkeluar');
    }
}

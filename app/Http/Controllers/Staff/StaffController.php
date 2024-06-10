<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;

class StaffController extends Controller
{
    public function index(){
        return view('dashboardstaff');
    }

    public function indexsuratmasuk(){
        $query = SuratMasuk::all();
        return view ('suratmasuk', compact('query'));
    }
    public function indexsuratkeluar(){
        return view('suratkeluar');
    }
}

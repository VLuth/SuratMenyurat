<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function indexsuratmasuk(){
        $query = SuratMasuk::all();
        return view ('suratmasuk', compact('query'));
    }
}

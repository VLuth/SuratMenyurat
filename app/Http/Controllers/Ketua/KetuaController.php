<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KetuaController extends Controller
{
    public function index(){
        return view('ketua.dashboard');
    }
}

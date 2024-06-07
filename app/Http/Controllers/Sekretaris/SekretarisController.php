<?php

namespace App\Http\Controllers\Sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SekretarisController extends Controller
{
    public function index(){
        return view('sekretaris.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use App\Barang_Member_Bulanan;
use App\Barang_Member_Harian;
use App\Barang_Member_Tahunan;
use Illuminate\Http\Request;

class Barang_Member_Controller extends Controller
{
    public function harian(Request $request){
        return Barang_Member_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Barang_Member_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Barang_Member_Tahunan::paginate($request->paginate);
    }
}

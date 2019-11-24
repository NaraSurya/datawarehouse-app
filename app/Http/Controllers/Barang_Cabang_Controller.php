<?php

namespace App\Http\Controllers;

use App\Barang_Cabang_Bulanan;
use App\Barang_Cabang_Harian;
use App\Barang_Cabang_Tahunan;
use Illuminate\Http\Request;

class Barang_Cabang_Controller extends Controller
{
    public function harian(Request $request){
        return Barang_Cabang_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Barang_Cabang_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Barang_Cabang_Tahunan::paginate($request->paginate);
    }
}

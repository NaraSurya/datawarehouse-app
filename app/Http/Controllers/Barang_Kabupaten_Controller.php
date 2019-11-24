<?php

namespace App\Http\Controllers;

use App\Barang_Kabupaten_Bulanan;
use App\Barang_Kabupaten_Harian;
use App\Barang_Kabupaten_Tahunan;
use Illuminate\Http\Request;

class Barang_Kabupaten_Controller extends Controller
{
    public function harian(Request $request){
        return Barang_Kabupaten_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Barang_Kabupaten_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Barang_Kabupaten_Tahunan::paginate($request->paginate);
    }
}

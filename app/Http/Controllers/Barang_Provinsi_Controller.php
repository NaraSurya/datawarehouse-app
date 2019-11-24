<?php

namespace App\Http\Controllers;

use App\Barang_Provinsi_Bulanan;
use App\Barang_Provinsi_Harian;
use App\Barang_Provinsi_Tahunan;
use Illuminate\Http\Request;

class Barang_Provinsi_Controller extends Controller
{
    public function harian(Request $request){
        return Barang_Provinsi_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Barang_Provinsi_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Barang_Provinsi_Tahunan::paginate($request->paginate);
    }
}

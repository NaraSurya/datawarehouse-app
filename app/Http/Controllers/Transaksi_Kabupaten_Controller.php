<?php

namespace App\Http\Controllers;

use App\Transaksi_Kabupaten_Bulanan;
use App\Transaksi_Kabupaten_Harian;
use App\Transaksi_Kabupaten_Tahunan;
use Illuminate\Http\Request;

class Transaksi_Kabupaten_Controller extends Controller
{
    public function harian(Request $request){
        return Transaksi_Kabupaten_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Transaksi_Kabupaten_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Transaksi_Kabupaten_Tahunan::paginate($request->paginate);
    }
}

<?php

namespace App\Http\Controllers;

use App\Transaksi_Provinsi_Bulanan;
use App\Transaksi_Provinsi_Harian;
use App\Transaksi_Provinsi_Tahunan;
use Illuminate\Http\Request;

class Transaksi_Provinsi_Controller extends Controller
{
    public function harian(Request $request){
        return Transaksi_Provinsi_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Transaksi_Provinsi_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Transaksi_Provinsi_Tahunan::paginate($request->paginate);
    }
}

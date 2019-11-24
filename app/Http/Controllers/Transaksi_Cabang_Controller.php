<?php

namespace App\Http\Controllers;

use App\Transaksi_Cabang_Bulanan;
use App\Transaksi_Cabang_Harian;
use App\Transaksi_Cabang_Tahunan;
use Illuminate\Http\Request;

class Transaksi_Cabang_Controller extends Controller
{
    public function harian(Request $request){
        return Transaksi_Cabang_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Transaksi_Cabang_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Transaksi_Cabang_Tahunan::paginate($request->paginate);
    }
}

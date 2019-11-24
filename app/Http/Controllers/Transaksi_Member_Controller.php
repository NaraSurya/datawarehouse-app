<?php

namespace App\Http\Controllers;

use App\Transaksi_Member_Bulanan;
use App\Transaksi_Member_Harian;
use App\Transaksi_Member_Tahunan;
use Illuminate\Http\Request;

class Transaksi_Member_Controller extends Controller
{
    public function harian(Request $request){
        return Transaksi_Member_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Transaksi_Member_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Transaksi_Member_Tahunan::paginate($request->paginate);
    }
}

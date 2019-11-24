<?php

namespace App\Http\Controllers;

use App\Detail_Transaksi_Member_Bulanan;
use App\Detail_Transaksi_Member_Harian;
use App\Detail_Transaksi_Member_Tahunan;
use Illuminate\Http\Request;

class Detail_Transaksi_Member_Controller extends Controller
{
    public function harian(Request $request){
        return Detail_Transaksi_Member_Harian::paginate($request->paginate);
    }

    public function bulanan(Request $request){
        return Detail_Transaksi_Member_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Detail_Transaksi_Member_Tahunan::paginate($request->paginate);
    }
}

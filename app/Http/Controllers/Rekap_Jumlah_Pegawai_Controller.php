<?php

namespace App\Http\Controllers;

use App\Rekap_Jumlah_Pegawai_Bulanan;
use App\Rekap_Jumlah_Pegawai_Tahunan;
use Illuminate\Http\Request;

class Rekap_Jumlah_Pegawai_Controller extends Controller
{
  
    public function bulanan(Request $request){
        return Rekap_Jumlah_Pegawai_Bulanan::paginate($request->paginate);
    }

    public function Tahunan(Request $request){
        return Rekap_Jumlah_Pegawai_Tahunan::paginate($request->paginate);
    }
}

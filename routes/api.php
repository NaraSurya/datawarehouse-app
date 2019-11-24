<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('barang-member-harian/{paginate}','Barang_Member_Controller@harian');
Route::get('barang-member-bulanan/{paginate}','Barang_Member_Controller@bulanan');
Route::get('barang-member-tahunan/{paginate}','Barang_Member_Controller@tahunan');

Route::get('barang-cabang-harian/{paginate}','Barang_Cabang_Controller@harian');
Route::get('barang-cabang-tahunan/{paginate}','Barang_Cabang_Controller@tahunan');
Route::get('barang-cabang-bulanan/{paginate}','Barang_Cabang_Controller@bulanan');

Route::get('barang-provinsi-harian/{paginate}','Barang_Provinsi_Controller@harian');
Route::get('barang-provinsi-bulanan/{paginate}','Barang_Provinsi_Controller@bulanan');
Route::get('barang-provinsi-tahunan/{paginate}','Barang_provinsi_Controller@tahunan');

Route::get('barang-kabupaten-harian/{paginate}','Barang_Kabupaten_Controller@harian');
Route::get('barang-kabupaten-bulanan/{paginate}','Barang_kabupaten_Controller@bulanan');
Route::get('barang-kabupaten-tahunan/{paginate}','Barang_Kabupaten_Controller@tahunan');

Route::get('detail-transaksi-harian/{paginate}','Detail_Transaksi_Controller@harian');
Route::get('detail-transaksi-bulanan/{paginate}','Detail_Transaksi_Controller@bulanan');
Route::get('detail-transaksi-tahunan/{paginate}','Detail_Transaksi_Controller@tahunan');

Route::get('detail-transaksi-member-harian/{paginate}','Detail_Transaksi_Member_Controller@harian');
Route::get('detail-transaksi-member-bulanan/{paginate}','Detail_Transaksi_Member_Controller@bulanan');
Route::get('detail-transaksi-member-tahunan/{paginate}','Detail_Transaksi_Member_Controller@tahunan');

Route::get('rekap-jumlah-pegawai-bulanan/{paginate}','Rekap_Jumlah_Pegawai_Controller@bulanan');
Route::get('rekap-jumlah-pegawai-tahunan/{paginate}','Rekap_Jumlah_Pegawai_Controller@tahunan');

Route::get('transaksi-cabang-harian/{paginate}','Transaksi_Cabang_Controller@harian');
Route::get('transaksi-cabang-bulanan/{paginate}','Transaksi_Cabang_Controller@bulanan');
Route::get('transaksi-cabang-tahunan/{paginate}','Transaksi_Cabang_Controller@tahunan');

Route::get('transaksi-kabupaten-harian/{paginate}','Transaksi_Kabupaten_Controller@harian');
Route::get('transaksi-kabupaten-bulanan/{paginate}','Transaksi_Kabupaten_Controller@bulanan');
Route::get('transaksi-kabupaten-tahunan/{paginate}','Transaksi_Kabupaten_COntroller@tahunan');

Route::get('transaksi-provinsi-harian/{paginate}','Transaksi_Provinsi_Controller@harian');
Route::get('transaksi-provinsi-bulanan/{paginate}','Transaksi_Provinsi_Controller@bulanan');
Route::get('transaksi-provinsi-tahunan/{paginate}','Transaksi_Provinsi_Controller@tahunan');

Route::get('transaksi-member-harian/{paginate}','Transaksi_Member_Controller@harian');
Route::get('transaksi-member-bulanan/{paginate}','Transaksi_Member_Controller@bulanan');
Route::get('transaksi-member-tahunan/{paginate}','Transaksi_Member_Controller@tahunan');


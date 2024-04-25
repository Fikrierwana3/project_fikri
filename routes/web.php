<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//variabel
Route::get('/about', function () {

      $Nama = "Fikri Erwana";
      $JenisKelamin = "Laki-laki";
      $PendidikanTerakhir = "S1";
      $Pekerjaan = "Pelajar";
      $Alamat = "Bojongloa Kaler";

    return view('data_diri',compact('Nama','JenisKelamin','PendidikanTerakhir','Pekerjaan','Alamat'));
});

Route::get('/sekolah', function () {
      $Nama = "Fikri Erwana";
      $AsalSekolah = "SMK ASSALAAM";
      $Jurusan = "RPL";
      $Kelas = "XI RPL 3";

    return view('sekolah',compact('Nama','AsalSekolah','Jurusan','Kelas'));
});

//parameter
Route::get('/about2/{Nama}/{JenisKelamin}/{PendidikanTerakhir}/{Pekerjaan}/{Alamat}', function (Request $request, $Nama , $JenisKelamin , $PendidikanTerakhir , $Pekerjaan , $Alamat) {
      $Nama2 = $Nama;
      $JenisKelamin2 = $JenisKelamin;
      $PendidikanTerakhir2 = $PendidikanTerakhir;
      $Pekerjaan2 = $Pekerjaan;
      $Alamat2 = $Alamat;
  return view('biodata',compact('Nama2','JenisKelamin2','PendidikanTerakhir2','Pekerjaan2','Alamat2'));
});


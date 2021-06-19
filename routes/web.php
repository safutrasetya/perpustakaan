<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\RegisterAkun;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditAkun;
use App\Http\Controllers\EditBuku;
use App\Http\Controllers\Halutama;
use App\Http\Controllers\CariBuku;
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
  if(session()->has('username')){
    return redirect('halutama');
  }
  return view('hallogin');
});

Route::get('/halinfouser', function(){
  return view('halinfouser');
});
//UNTUKEDITUSERvvvvvvvv
Route::post("getuser",[EditAkun::class,'Getuser']);
Route::get('/haledituser', function(){
  return view('haledituser');
});
Route::post("edituser",[EditAkun::class,'Ubahakun']);

Route::post("getusersession",[EditAkun::class,'Getusersession']);
Route::post("editusersession",[EditAkun::class,'Ubahakunsession']);
Route::get('/haledituser0', function(){
  if(!session()->has('username')){
    return redirect('hallogin');
  }
  return view('haledituser0');
});
//UNTUKEDITUSER^^^^^^^
//UNTUKEDIT  BUKU  vvvvvvvv
Route::post("getbuku",[EditBuku::class,'Getbuku']);
Route::get('/haleditbuku', function(){
  if(!session()->has('username')){
    return redirect('hallogin');
  }
  return view('haleditbuku');
});
Route::post("editbuku",[EditBuku::class,'Ubahbuku']);

//UNTUKEDIT  BUKU  ^^^^^^^^
//UNTUK TAMBAH BUKU^^^^^^^^^
Route::get('/haltambahbuku', function(){
  return view('haltambahbuku');
});
Route::post("tambahbuku",[EditBuku::class,'Tambahbuku']);
//UNTUK TAMBAH BUKU ^^^^^^^^
//UNTUK LOGINvvv
Route::post("user",[UserAuth::class,'userlogin']);
Route::post("password",[UserAuth::class,'userlogin']);
Route::get('/logout', function () {
  if(session()->has('username')){
    session()->pull('username');
    session()->pull('password');
    session()->pull('id');
    session()->pull('email');
    session()->pull('level');
  }
  return redirect('hallogin');
});
Route::get('hallogin', function () {
  if(session()->has('username')){
    return redirect('halutama');
  }
  return view('hallogin');
});
Route::get('halutama', function () {
  if(!session()->has('username')){
    return redirect('hallogin');
  }
  return view('halutama');
});
Route::get('/halerror', function () {
    return view('halerror');
});
//UNTUK LOGIN ^^^^

//UNTUK REGISTERvvvvv
Route::get('/register', function(){
  return view('halregister');
});

Route::post("registernew",[RegisterAkun::class,'Regist']);
Route::view('/halberhasil','halberhasil');
//UNTUK REGISTER^^^^^^^

Route::get('/cariuser', function () {
  if(!session()->has('username')){
    return redirect('hallogin');
  }
    return view('halcariuser');
});

Route::get('/daftarbuku',[BukuController::class,'index']);
Route::get('/daftaruser',[AkunController::class,'index']);

Route::get('/edituser', function () {
    return view('haledituser');
});

Route::get('/halutama',[Halutama::class,'index']);

Route::get('/daftaruser/delete/{id}', [AkunController::class,'delete']);

Route::get('/daftarbuku/delete/{id}', [BukuController::class,'delete']);

Route::get('/halbuku/{id}',[BukuController::class,'tampil'])->name('buku');

Route::get('/caribuku',[CariBuku::class, 'search'])->name('web.search');
Route::get('/caribuku0',[CariBuku::class, 'search2'])->name('web.search2');
Route::get('/halcaribuku0', function () {
    return view('halcaribuku0');
});

Route::get('/cariuser',[UserController::class, 'searchuser'])->name('user.search');
Route::get('/about', function(){
  return view('about');
});

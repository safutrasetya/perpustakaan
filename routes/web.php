<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\RegisterAkun;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BukuController;
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
    return view('hallogin');
});
Route::view("halutama",'halutama');
Route::get('/test', function(){
  return view('test');
});
Route::get('/member', function(){
  return view('halprofmember');
});

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
    return view('halcariuser');
});
<<<<<<< HEAD
Route::get('/daftarbuku',[BukuController::class,'index']);
Route::get('/daftaruser',[AkunController::class,'index']);
=======

Route::get('/edituser', function () {
    return view('haledituser');
});
?>
>>>>>>> 988971fc2e27252117d3f306d784ff0bab444f92

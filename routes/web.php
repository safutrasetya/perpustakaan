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
//use\app\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('halutama');
});
Route::get('/halutama', function() {
  return view('halutama');
});
Route::get('/test', function(){
  return view('test');
});
Route::get('/member', function(){
  return view('halprofmember');
});
Route::get('/login', function(){
  return view('hallogin');
});
Route::get('/register', function(){
  return view('halregister');
});
Route::get('/daftaruser', function () {
    return view('daftaruser');
});

use App\Http\Controllers\BukuController;
Route::get('/daftarbuku',[BukuController::class,'index']);
    //return view('daftarbuku')};

Route::get('/cariuser', function () {
    return view('halcariuser');
});
?>

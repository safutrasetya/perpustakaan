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
Route::get('/daftar', function(){
  return view('halregister');
});
Route::get('/halpublisher', function () {
    return view('halpublisher');
});

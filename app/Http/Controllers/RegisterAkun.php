<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\akun;

class RegisterAkun extends Controller
{
    //
    function Regist(Request $req){

      $datauser = $req->input();
      $iusername=$datauser['username'];

      $cari = DB::select("select * from akuns where username = :username", ['username'=> $iusername]);
      $count = count($cari);

      if($count == 0){
        $akun = new akun;
        $akun->username=$req->username;
        $akun->email=$req->email;
        $akun->password=$req->password;
        $akun->level=3;
        $akun->save();
        $success="Register Berhasil";
        return view('halberhasil')->with('success',$success);
      }else{
        $error = "Sudah ada akun dengan username tersebut";
        return view('halerror')->with('error',$error);
      }
    }
}

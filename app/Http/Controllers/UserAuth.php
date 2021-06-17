<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\akuns;

class UserAuth extends Controller
{
    //
    function userlogin(Request $req){

      $datauser = $req->input();

      $iusername = $datauser['user'];
      $ipassword = $datauser['password'];

      $cari = DB::select("select * from akuns where username = :username", ['username'=> $iusername],"and password = :password", ['password'=> $ipassword]);
      //FINALLY

      $count = count($cari);
      if($count==1){
        if(($iusername==$cari[0]->username)&&($ipassword==$cari[0]->password)){
          $req->session()->put('username',$iusername);
          $req->session()->put('password',$ipassword);
          $id=$cari[0]->id;$req->session()->put('id',$cari[0]->id);
          $email=$cari[0]->email;$req->session()->put('email',$cari[0]->email);
          $level=$cari[0]->level;$req->session()->put('level',$cari[0]->level);
          return redirect('halutama');
        }else{
          $error = "USERNAME ATAU PASSWORD SALAH";
          return view('halerror')->with('error',$error);
        }
      }else if($count>1){
        $error = "ADA 2 atau lebih user ditemukan";
        return view('halerror')->with('error',$error);
      }else{
        $error = "USER NOT FOUND";
        return view('halerror')->with('error',$error);
      }

      //return view('halutama')->with('test',$cariarray);



      //THIS WORKED VVV
      // $datauser= $req->input();
      // $req->session()->put('user',$datauser['user']);
      // $req->session()->put('password',$datauser['password']);
      // session('user');
      // session('password');
      // $vusername = $datauser['user'];
      // $vpassword = $datauser['password'];
      // return redirect('halutama');
      //THAT WORKED ^^^^^^^^^^^^

    }

}

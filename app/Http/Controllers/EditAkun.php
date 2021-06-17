<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\akun;
class EditAkun extends Controller
{
    //
    function Getuser(Request $req){
      $datainput = $req->input();

      $check = DB::select("select * from akuns where id = :id", ['id'=> $datainput['id']]);
      $count = count($check);

      if($count==1){
        $edit2 = akun::find($datainput['id']);
        return view('haledituser',['edit'=>$edit2]);
      }else{
        echo "Terjadi Kesalahan";
      }
    }

    function Ubahakun(Request $req){
      $datainput = $req->input();
      $check = DB::select("select * from akuns where username = :username", ['username'=> $datainput['username']],"or email = :email", ['email'=> $datainput['email']]);

        $update = akun::find($req->id);
        $update->username=$req->username;
        $update->email=$req->email;
        $update->password=$req->password;
        $update->level=$req->level;
        $update->save();
        return redirect('daftaruser');
    }
}

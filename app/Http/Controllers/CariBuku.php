<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CariBuku extends Controller
{

      public function  search(Request $request)
      {
        if(!session()->has('username')){
          return redirect('hallogin');
        }
        if(session('level')!=1){
          return redirect('halutama');
        }

        if (isset($_GET['query'])){
          $search_text = $_GET['query'];
          $bukus = DB::table('tabel_bukus')->where('judul','LIKE','%'.$search_text.'%')->paginate();
          return view ('halcaribuku',['bukus'=>$bukus]);
        }else{
          return view('halcaribuku');
        }
      }
      public function  search2(Request $request)
      {
        if(!session()->has('username')){
          return redirect('hallogin');
        }
        if(session('level')==3){
          return redirect('halutama');
        }
        if (isset($_GET['query'])){
          $search_text = $_GET['query'];
          $bukus = DB::table('tabel_bukus')->where('judul','LIKE','%'.$search_text.'%')->paginate();
          return view ('halcaribuku0',['bukus'=>$bukus]);
        }else{
          return view('halcaribuku0');
        }
      }
}

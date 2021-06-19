<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CariBuku extends Controller
{

      public function  search(Request $request)
      {
        if (isset($_GET['query'])){
          $search_text = $_GET['query'];
          $bukus = DB::table('tabel_bukus')->where('judul','LIKE','%'.$search_text.'%')->paginate();
          return view ('halcaribuku',['bukus'=>$bukus]);
        }else{
          return view('halcaribuku');
        }
      }
}

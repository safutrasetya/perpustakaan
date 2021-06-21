<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

      public function searchuser(Request $request)
      {
        if(!session()->has('username')){
          return redirect('hallogin');
        }
        if(session('level')!=1){
          return redirect('halutama');
        }
        if (isset($_GET['query'])){
          $search_text = $_GET['query'];
          $akuns = DB::table('akuns')->where('username','LIKE','%'.$search_text.'%')->paginate();
          return view ('halcariuser',['akuns'=>$akuns]);
        }else{
          return view('halcariuser');
        }
      }
}

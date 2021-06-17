<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akun;
class AkunController extends Controller
{
  //
    public function index()
    {
        $akuns = akun::all();
        return view ("daftaruser", compact('akuns'));
    }

}

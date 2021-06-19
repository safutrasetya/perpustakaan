<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\TabelBuku;
class EditBuku extends Controller
{
    //
    function Getbuku(Request $req){
      if(!session()->has('username')){
        return redirect('hallogin');
      }
      $dataget = $req->input();
      $check = DB::select("select * from tabel_bukus where id = :id", ['id'=> $dataget['idbuku']]);
      $count = count($check);

      if($count==1){
        $edit2 = Tabelbuku::find($dataget['idbuku']);
        return view('haleditbuku',['edit'=>$edit2]);
      }else{
        echo "Terjadi Kesalahan";
      }

    }

    function Ubahbuku(Request $req){
      $dataget = $req->input();

      $req->validate([
        'cover' => 'mimes:jpeg,bmp,png,jpg',
      ]);

      if($req->has('cover')) {
          $namacover = time().'.'.$req->cover->extension();
          $req->cover->move(public_path('img'), $namacover);
        } else {
          $namacover = $req->covername;
        }


      $update = TabelBuku::find($req->id);
      $update->judul=$req->judul;
      $update->penerbit=$req->penerbit;
      $update->pengarang=$req->pengarang;
      $update->Tahun_Terbit=$req->tahunterbit;
      $update->sinopsis=$req->sinopsis;
      $update->toko=$req->toko;
      $update->id_publisher=$req->idpublisher;
      $update->cover=$namacover;


      $update->save();

      return redirect('daftarbuku');
    }

    function Tambahbuku(Request $req){
      $baru = new TabelBuku;

      $req->validate([
        'cover' => 'mimes:jpeg,bmp,png,jpg',
      ]);

      $namacover = time().'.'.$req->cover->extension();
      $req->cover->move(public_path('img'), $namacover);

      $baru->judul=$req->judul;
      $baru->penerbit=$req->penerbit;
      $baru->pengarang=$req->pengarang;
      $baru->Tahun_Terbit=$req->tahunterbit;
      $baru->sinopsis=$req->sinopsis;
      $baru->toko=$req->toko;
      $baru->id_publisher=$req->idpublisher;
      $baru->cover=$namacover;
      $baru->save();
      return redirect('daftarbuku');

    }
}

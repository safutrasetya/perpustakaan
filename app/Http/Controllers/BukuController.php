<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\TabelBuku;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(session('level')==1){
        $bukus = TabelBuku::paginate(5);
        return view ('daftarbuku',['bukus'=>$bukus]);
      }else if(session('level')==2){
        $bukus = TabelBuku::where('id', session('id'))->paginate(5);
        return view ('daftarbuku',['bukus'=>$bukus]);
      }

    }

    public function delete($id)
    {

        DB::table('tabel_bukus')->where('id', $id)->delete();

        return redirect('/daftarbuku')->with('message','Data berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tampil($id)
    {
      //
      // $buku = DB::select("select * from tabel_bukus where id = :id", ['id'=> $id]);
      // return view('halbuku',['buku'=>$buku]);
    $buku=TabelBuku::findOrFail($id);
    return view('halbuku',compact('buku'));
    //return view('halbuku',['buku'=>$buku]);
    }
}

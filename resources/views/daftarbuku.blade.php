<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--BOOTSTRAP JQUERY-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!--END BOOTSTRAP JQUERY-->
    <title></title>
  </head>
  <style>
.table{
  text-align: justify;
}
.row-Cover
{
    width: 20%;
    height:100%;
    text-align: center;
}
.row-Sinopsis
{
    width: 600%;
    height: auto;
    text-align: center;
}
.row-Toko
{
    width: 200%;
}
.row-Action
{
    text-align: center;
    width: 100%;
}
td{
  text-align: center;
}
.sinopsis{
  text-align: justify;
}

  </style>
  <body>
    @include('layout.v_navbar');
    <div class="jumbotron bg-secondary text-center text-white" style="margin-bottom:0">
      <div class="container pt-4">
        <p class="display-1">DAFTAR BUKUKU</p>
      </div>
    </div>

    <div class="jumbotron bg-warning">
      <div class="container-fluid">
        <div class="d-flex justify-content-center">
          <a href="/haltambahbuku" class="btn btn-success text-center">Buku Baru</a>
        </div>
        <table class="table table-bordered table-secondary table-striped">
            <thead>
                <tr>
                    <th class="row-1 row-Cover">Cover</th>
                    <th class="row-2 row-Judul">Judul</th>
                    <th class="row-3 row-Penerbit">Penerbit</th>
                    <th class="row-4 row-Pengarang">Pengarang</th>
                    <th class="row-5 row-TT">Tahun Terbit</th>
                    <th class="row-6 row-Sinopsis">Sinopsis</th>
                    <th class="row-7 row-Toko">Tersedia ditoko:</th>
                    <th colspan =2>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($bukus as $buku)
                <tr>
                    <td><img src = "img/{{$buku->cover}}" alt ="" width="120x" height="200px"></td>
                    <td><a href="{{route('buku',$buku->id)}}" target="_blank">{{$buku->judul}}</a></td>
                    <td>{{$buku->penerbit}}</td>
                    <td>{{$buku->pengarang}}</td>
                    <td>{{$buku->Tahun_Terbit}}</td>
                    <td class="sinopsis">{{Illuminate\Support\Str::of($buku->sinopsis)->words(30)}}</td>
                    <td><a href="{{$buku->toko}}" target="_blank">Klik Disini</td>
                    <td>
                      <form action="getbuku" method="POST" novalidate>
                        @csrf
                        <input type="text" id="id" class="form-control" name="idbuku" hidden required value="{{$buku->id}}">
                        <button type="submit" class="btn btn-primary" name="btnEdit">Edit</button>
                      </form>
                    </td>
                    <td>
                        <a href="/daftarbuku/delete/ {{$buku->id}}" class= "btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                 <!-- <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr> -->
            </tbody>
        </table>
    </div>
  </div>
  </body>
</html>

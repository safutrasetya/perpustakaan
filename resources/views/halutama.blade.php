<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    /* width */
    ::-webkit-scrollbar {
      width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: blue;
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: black;
    }
    </style>
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
  <body>
    @include('layout.v_navbar')
    <div class="bg-gradient-primary"><!--entah kenapa ga dapet warnanya...-->
      <div class="container-xl bg-dark pt-2 px-5 pb-5 opacity-3">
        <div class="jumbotron bg-primary">
          <marquee behavior="scroll" direction="left" scrollamount="20">
          			<h1 class="display-1">Welcome to Perpus {{session('username')}}!</h1>
          		</marquee>
          <h1 class="text-white">Buku apa yang ingin kamu cari??</h1>
        </div>
        <div class="card bg-secondary">
          <div class="d-flex justify-content-center">
            <form class="form-inline" action="#">
              <div class="p-2">
                <a class="btn btn-success" href="/halcaribuku0">Cari buku</a>
              </div>
            </form>
          </div>
        </div>
        <div class="jumbotron">
          <div class="card">
            <div class="row">
              @foreach($bukus as $buku)
              <div class="col-md-3">
                <h1><img src="img/{{$buku->cover}}" alt ="" width="150px" height="200px"></h1>
              </div>
              <div class="col-md-4">
                <h4>Judul        : {{$buku->judul}}</h4>
                <h4>Penerbit     : {{$buku->penerbit}}</h4>
                <h4>Pengarang    :  {{$buku->pengarang}}</h4>
                <h4>Tahun Terbit : {{$buku->Tahun_Terbit}}</h4>
              </div>
              <div class="sinopsis col-md-3">
                <h4>SINOPSIS</h4>
                <textarea readonly maxlength="200" cols="50" rows="7" style="text-align:justify">{{$buku->sinopsis}}</textarea>
              </div>
              @endforeach
            </div>
          </div>
          <h4></h4>
          <hr>
        </div>
      </div>
  </div>

  </body>
</html>

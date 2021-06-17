<!DOCTYPE html>
<html>
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
      <!-- WYISYG text editor untuk sinopsis-->
      <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
      <title></title>
    </head>
    <body>
      @include('layout.v_navbar')
      <div class="jumbotron bg-secondary text-center text-white" style="margin-bottom:0">
        <div class="container">
        </div>
      </div>
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-3 text-center">EDIT BUKU</h1>

          <form method="POST" action="editbuku" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input hidden disabled type="text" class="form-control" name="id" placeholder="Masukkan idbuku" value="{{$edit['id']}}" required>
            </div>
              <div class="form-group">
                <label for="">Cover</label>
                <img src = "img/{{$edit['cover']}}" alt ="{{$edit['cover']}}" width="120x" height="200px">
                <input type="file" class="form-control" name="cover" placeholder="Masukkan cover?">
              </div>
              <div class="form-group">
                <input hidden disabled type="text" class="form-control" name="covername" value="{{$edit['cover']}}" required>
              </div>
              <div class="form-group">
                <label for="">Id Publisher</label>
                <input type="text" class="form-control" name="idpublisher" placeholder="Masukkan" value="{{$edit['id_publisher']}}" required>
              </div>
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="{{$edit['judul']}}" required>
                </div>
                <div class="form-group">
                  <label for="">Penerbit</label>
                  <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit" value="{{$edit['penerbit']}}" required>
                </div>
                <div class="form-group">
                  <label for="">Pengarang</label>
                  <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Pengarang" value="{{$edit['pengarang']}}" required>
                </div>
                <div class="form-group">
                  <label for="text">Tahun Terbit</label>
                  <input type="text" class="form-control" name="tahunterbit" placeholder="Masukkan tahun terbit (TTTT)" value="{{$edit['Tahun_Terbit']}}" required>
                </div>
                <div class="form-group">
                  <label for="">Sinopsis</label>
                  <textarea id="sinopsis" name="sinopsis">{{$edit['sinopsis']}}</textarea>
                </div>
                <div class="form-group">
                  <label for="">Terdapat di toko : </label>
                  <input type="text" class="form-control" name="toko" placeholder="Masukkan link toko" value="{{$edit['toko']}}" required>
                </div>
                  <div class="float-right">
                    <input type="submit" class="btn btn-primary" name="btnUpdate" value="Simpan perubahan">
                  </div>

        </form>
            <a href="/daftarbuku" class="btn btn-info">Batal</a>
      </div>
      <!-- WYSIWYG untuk editor sinopsis -->
      <script type="text/javascript">
      CKEDITOR.replace('sinopsis',{
      height: "200px "
      });
      </script>
      <!--end wysiwyg -->
    </body>
</html>

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
        <h1 class="display-3 text-center">EDIT AKUN</h1>

          <form method="POST" action="edituser">
            @csrf
            <div class="form-group">
              <input hidden type="text" class="form-control" name="id" placeholder="Masukkan username" value="{{$edit['id']}}" required>

                <div class="form-group">
                  <label for="newusername">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Masukkan username" value="{{$edit['username']}}" required>

                </div>
                <div class="form-group">
                  <label for="newusername">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Masukkan email" value="{{$edit['email']}}" required>
                </div>
                <div class="form-group">
                  <label for="password">Password (Masukkan password lama atau baru)</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan password" value="{{$edit['password']}}" required>

                </div>
                  <div class="form-group">
                    <label class="form-group">Level</label>
                      <div class="form-group">
                        <input type="radio"  id='admin' name="level" value="1"><label for="admin">Admin</label>
                        <input type="radio"  id='publsher' name="level" value="2"><label for="publisher">Publisher</label>
                        <input type="radio"  id='member' name="level" value="3" checked><label for="member">Member</label>
                      </div>
                  </div>
                  <div class="float-right">
                    <input type="submit" class="btn btn-primary" name="btnUpdate" value="Simpan perubahan">
                  </div>

          </form>
              <a href="/daftaruser" class="btn btn-info">Batal</a>
            </div>

    </body>
</html>

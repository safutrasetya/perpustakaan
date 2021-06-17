<!doctype html>
<html lang="en">
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
        <p class="display-1 pt-5">DAFTAR USER</p>
      </div>
    </div>
    <div class="jumbotron bg-success">
      <div class="container pt-4">
          <table class="table table-bordered table-secondary table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody>
              @foreach($akuns as $akun)
                  <tr>
                      <td>{{$akun->id}}</td>
                      <td>{{$akun->username}}</td>
                      <td>{{$akun->email}}</td>
                      <td>{{$akun->password}}</td>
                      <td>{{$akun->level}}</td>
                      <td>
                        <form action="getuser" method="POST" novalidate>
                          @csrf
                          <input type="text" id="id" class="form-control" name="id" hidden required value="{{$akun->id}}">
                          <button type="submit" class="btn btn-primary" name="btnEdit">Edit</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                  <!--<tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>-->
              </tbody>
          </table>
      </div>
    </div>
  </body>
</html>

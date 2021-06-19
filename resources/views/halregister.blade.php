<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
    <div class="jumbotron text-center" style="margin-bottom:0">
      <p class="display-3"></p>
      <h1>REGISTER</h1>
    </div>
    <div class="jumbotron bg-primary" style="margin-bottom:0"></div>
    <div class="jumbotron" style="margin-bottom:0">
      <div class="container">
        <!--KOTAK DAFTAR BEGIN-->
        <div class="card" style="margin:auto">
          <div class="card-body">
            <form action="registernew" method="POST" class="needs-validation" novalidate>
              @csrf
              <div class=form-group>
                <label for="username">Username</label>
                <input type="text" id="nama" class="form-control" name="username" placeholder="Masukkan username" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Invalid</div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Masukkan email baru" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Invalid</div>
              </div>
              <div class=form-group>
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Invalid</div>
              </div>
                <button type="reset" class="btn btn-primary" name="btnReset">Reset</button>
              <div class="float-right">
                <button type="submit" class="btn btn-primary" name="btnDaftar">REGISTER</button>
              </div>
            </form>
            <div class="float-right py-2">
              <a href="/login"><button class="btn btn-outline-primary">LOGIN</button></a>
            </div>
            <!--jquery valid dan invalid-->
                        <script>
                            // Disable form submissions if there are invalid fields
                            (function() {
                              'use strict';
                              window.addEventListener('load', function() {
                                // Get the forms we want to add validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                  }, false);
                                });
                              }, false);
                            })();
                        </script>

          </div>
        </div>
        <!--KOTAK DAFTAR END-->
      </div>
    </div>


  </body>
</html>

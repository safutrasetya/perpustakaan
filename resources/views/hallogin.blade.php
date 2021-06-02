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
      <p class="display-3">WELCOME!</p>
      <h3>Please login to continue</h3>
    </div>
    <div class="jumbotron bg-primary" style="margin-bottom:0"></div>
    <div class="jumbotron" style="margin-bottom:0">
      <div class="container">
        <!--KOTAK LOGIN BEGIN-->
        <div class="card" style="margin:auto">
          <div class="card-body">
            <form action="" method="POST" class="needs-validation" novalidate>
              <div class=form-group>
                <label for="username">Username</label>
                <input type="text" id="nama" class="form-control" name="user" placeholder="Masukkan username" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Invalid</div>
              </div>
              <div class=form-group>
                <label for="username">Password</label>
                <input type="text" id="password" class="form-control" name="pwd" placeholder="Masukkan Password" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Invalid</div>
              </div>
                <button type="reset" class="btn btn-primary" name="btnLogin">Reset</button>
              <div class="float-right">
                <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
              </div>
            </form>
            <div class="float-right py-2">
              <a href="/daftar"><button class="btn btn-outline-primary">DAFTAR</button></a>
            </div>
          </div>
        </div>
        <!--KOTAK LOGIN END-->
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


  </body>
</html>

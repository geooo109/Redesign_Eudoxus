<!DOCTYPE html>
<html lang="el">
  <head>
    <!--Here is the login check -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Mantas Michas Panagiotopoulos" content="Eudoxus Redesign">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Our custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/sign_in.css">
    <title>Σύνδεση</title>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">
                <img src="../pics/eudoxus_logo_sign_in.png">
              </h5>

              <form action="sign_in_validation.php" method="post">

                <div class="form-group">
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Όνομα Χρήστη">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="pass" placeholder="Κωδικός">
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Θυμήσου Με</label>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Σύνδεση</button></a>
                <div class="login-help align-items-center text-center">
                  <a href="#">Εγγραφή</a> &middot; <a href="#">Ξέχασα τον κωδικό</a>
                </div>

              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Most likely we won't need any JS for the signIn page -->
  </body>

</html>

<!DOCTYPE html>
<html lang="el">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Mantas Michas Panagiotopoulos" content="Eudoxus Redesign">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS for font-awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Our custom CSS -->
    <link rel="stylesheet" type="text/css" href="website/css/main.css">

    <title>Εύδοξος</title>

  </head>


  <body>

    <!-- First navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">
        <img src="website/pics/eudoxuslogo.png" width="auto" height="auto" alt="Logo not found">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="input-group col-md-4">
            <input class="form-control py-2 border-right-0 border" type="search" value="Αναζήτηση" id="example-search-input">
            <span class="input-group-append">
              <a href="#">
                <button class="btn btn-outline-secondary border-left-0 border" type="button">
                    <i class="fas fa-search"></i>
                </button>
              </a>
              </span>
        </div>
        <ul class="navbar-nav ml-auto">

          <!-- ####check if the user is already logged in#### -->
          <?php
          // Always start this first
          session_start();
          if ( isset( $_SESSION['user_id'] ) ) {
            echo
            '<li class="nav-item">
              <a class="nav-link" href="website/php/profile_secretary.php">Προφίλ<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="website/php/sign_out.php">Αποσύνδεση<span class="sr-only"></span></a>
            </li>';
          }
          else {
            echo
            '<li class="nav-item">
              <a class="nav-link" href="website/php/sign_in.php">Σύνδεση<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a href="website/php/sign_up.php">
                <button class="btn btn-primary btn-sm navbar-btn">Εγγραφή
                  <span class="sr-only"></span>
                </button>
              </a>
            </li>';
          }
          ?>
          <!-- ####end of check if the user is already logged in#### -->

          <li class="nav-item">
            <a class="nav-link" href="#"><u>English</u><span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Second navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg justify-content-center" id="SecondNavbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav">
          <li class="nav-item">
            <a class="btn btn-outline-secondary" href="index.php" role="button">Αρχική</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Φοιτητές<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="dropdown-item" href="#">Δήλωση Συγγραμμάτων</a>
                  <a class="dropdown-item" href="#">Ανταλλαγή Συγγραμμάτων</a>
                  <a class="dropdown-item" href="#">Διάθεση Ηλ.Σημειώσεων</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Εκδότες<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="#">Καταχώριση Συγγράμματος</a>
                <a class="dropdown-item" href="#">Πληροφορίες Κοστολόγησης</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Γραμματείες Τμημάτων<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="#">Καταχώριση Συγγραμμάτων</a>
                <a class="dropdown-item" href="#">Διασυνδεδεμένα Τμήματα</a>
                <a class="dropdown-item" href="#">Εξαγωγή Αναφορών</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Βιβλιοθήκες<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="#">Παραγγελία Συγγραμμάτων</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Σημεία Διανομής<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="#">Παράδοση Συγγραμμάτων</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Νέα<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="dropdown-item" href="#">Ο Εύδοξος</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <hr>
    </div>

    <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="card-deck">
          <div class="col-md-6">
            <a href="website/php/students.php" class="card zoom">
              <img class="card-img-top" src="website/pics/students.jpg" alt="Image not found" height="365">
              <div class="card-img-overlay">
                <h1 class="card-title text-left" id="student"><span>Φοιτητές</span></h1>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <div class="row">
              <a href="#" class="card zoom">
                <img class="card-img-top" src="website/pics/publisher.jpg" alt="Image not found" height="180">
                <div class="card-img-overlay">
                  <h3 class="card-title text-center" id="publisher-photo"><span>Εκδότες</span></h3>
                </div>
              </a>
              <a href="website/php/secretaries.php" class="card zoom">
                <img class="card-img-top" src="website/pics/secretaries.jpg" alt="Image not found" height="180">
                <div class="card-img-overlay">
                  <h4 class="card-title text-center" id="secretary-photo"><span>Γραμματείες<br>Τμημάτων</span></h4>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="#" class="card zoom">
                <img class="card-img-top" src="website/pics/libraries.jpg" alt="Image not found" height="180">
                <div class="card-img-overlay">
                  <h3 class="card-title text-center" id="library-photo"><span>Βιβλιοθήκες</span></h3>
                </div>
              </a>
              <a href="#" class="card zoom">
                <img class="card-img-top" src="website/pics/distribution_point.png" alt="Image not found" height="180">
                <div class="card-img-overlay">
                  <h4 class="card-title text-center" id="point-photo"><span>Σημεία Διανομής</span></h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row access">
        <div class="col-md-4">
          <div class="card bg-light" style="width: 18rem;height: 23rem">
            <div class="card-header">Ανακοινώσεις</div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="website/pics/extra_time.jpg" alt="First slide" width="534" height="200">
                  <a href="#">
                    <div style="background-color: black;opacity: 0.6;" class="carousel-caption d-none d-md-block">
                      <h5>Παράταση Δηλώσεων</h5>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="website/pics/signup_error.png" alt="Second slide" width="534" height="200">
                  <a href="#">
                    <div style="background-color: black; opacity: 0.6;" class="carousel-caption d-none d-md-block">
                      <h5>Προβλήματα Εγγραφής</h5>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="website/pics/androidapp.png" alt="Second slide" width="534" height="200">
                  <a href="#">
                    <div style="background-color: black;opacity: 0.6;" class="carousel-caption d-none d-md-block">
                      <h5>Εφαρμογή Android</h5>
                    </div>
                  </a>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">Κάντε κλικ για περισσότερα</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-light text-center" style="width: 18rem;height: 23rem">
            <img class="card-img-top" src="website/pics/freshman.png" alt="Image not found" width="200" height="200">
            <div class="card-body">
              <h5 class="card-title">Οδηγός Πρωτοετών</h5>
              <p class="card-text">Δείτε αναλυτικά τα βήματα που πρέπει να ακολουθήσετε</p>
              <a href="#" class="btn btn-primary">Οδηγός</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-light text-center" style="width: 18rem;height: 23rem">
            <img class="card-img-top" src="website/pics/database.png" alt="Image not found" width="210" height="150">
            <div class="card-body">
              <h5 class="card-title">Γενική Βάση Συγγραμμάτων</h5>
              <p class="card-text">Μπορείτε να αναζητήσετε όλα τα διαθέσιμα συγγράμματα του Ευδόξου</p>
              <a href="#" class="btn btn-primary">Αναζήτηση</a>
            </div>
          </div>
          </div>
        </div>


        <hr>
      </div>
    </div>

    <!-- Footer -->
    <div class="container">
      <footer class="page-footer font-small blue pt-4 bg-light">
         <div class="container-fluid text-center text-md-left">
           <div class="row justify-content-center align-items-top">
             <div class="col-md-3 mb-md-0 mb-3">
                 <h6>Επικοινωνία</h6>
                 <ul class="list-unstyled">
                   <li>
                     <a href="#!"><br><i class="fas fa-phone-square"></i> 210-3707111</a>
                   </li>
                   <li>
                     <a href="#!"><i class="fas fa-envelope"></i> info@eudoxus.gr</a>
                   </li>
                 </ul>

               </div>

             <hr class="clearfix w-100 d-md-none pb-3">

             <div class="col-md-3 mb-md-0 mb-3">
                 <h6>Χρήσιμα</h6>
                 <ul class="list-unstyled">
                   <li>
                     <a href="#!"><br><i class="fas fa-info-circle"></i> Εγχειρίδια Χρηστών</a>
                   </li>
                   <li>
                     <a href="#!"><i class="fas fa-question-circle"></i> Συχνές Ερωτήσεις</a>
                   </li>
                   <li>
                     <a href="#!"><i class="fab fa-youtube"></i> Βίντεο</a>
                   </li>
                 </ul>

               </div>
               <div class="col-md-3 mb-md-0 mb-3">

                 <h6>Ακολουθήστε μας</h5>
                 <ul class="list-unstyled">
                   <li>
                       <a href="#!"><br><i class="fab fa-facebook-square"></i> Facebook</a>
                   </li>
                   <li>
                     <a href="#!"><i class="fab fa-twitter-square"></i> Twitter</a>
                   </li>
                   <li>
                     <a href="#!"><i class="fab fa-linkedin"></i> LinkedIn</a>
                   </li>
                 </ul>

               </div>
           </div>
         </div>
      </footer>
     <div class="footer-copyright text-center py-3">© 2019 Copyright:
       <a href="index.php">eudoxus.gr</a>
     </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>

</html>

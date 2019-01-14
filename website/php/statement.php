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
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/statement.css">
    <title>Επιλογή Σχολής-Εξαμήνου</title>

  </head>
  <body>
    <!-- First navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="../../index.php">
        <img src="../pics/eudoxuslogo.png" width="auto" height="auto" alt="Logo not found">
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
            <a class="nav-link" href="'.$_SESSION['profile'].'">Προφίλ<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="sign_out.php">Αποσύνδεση<span class="sr-only"></span></a>
            </li>';
          }
          else {
            echo
            '<li class="nav-item">
              <a class="nav-link" href="sign_in.php">Σύνδεση<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a href="sign_up.php">
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
            <a class="btn btn-outline-secondary" href="../../index.php" role="button">Αρχική</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Φοιτητές<span></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="dropdown-item" href="statement.php">Δήλωση Συγγραμμάτων</a>
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

    <!-- Βreadcrumb -->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.php">Εύδοξος</a></li>
          <li class="breadcrumb-item"><a href="students.php">Φοιτητές</a></li>
          <li class="breadcrumb-item active" aria-current="page">Δήλωση</li>
        </ol>
      </nav>
    </div>

    <!-- Content -->
    <div class="container">

      <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active btn-circle" id="pills-uni-tab" data-toggle="pill" href="#pills-uni" role="tab" aria-controls="pills-uni" aria-selected="true">
            <i class="fas fa-university"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-booktab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-book" aria-selected="false">
            <i class="fas fa-book"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-summary-tab" data-toggle="pill" href="#pills-summary" role="tab" aria-controls="pills-summary" aria-selected="false">
            <i class="fas fa-list-ul"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-point-tab" data-toggle="pill" href="#pills-point" role="tab" aria-controls="pills-point" aria-selected="false">
            <i class="fas fa-map-marked-alt"></i>
          </a>
        </li>

      </ul>
      <hr>

      <div class="tab-content" id="pills-tabContent">


        <!-- Select Uni,Shool,Dep pane -->
        <div class="tab-pane fade show active" id="pills-uni" role="tabpanel" aria-labelledby="pills-uni-tab">
          <h4> Επιλογή Τμήματος </h4>
          <button class="btn btn-primary btn-md next float-right">Επόμενο</button>
        </div>

        <!-- Select Semester,Courses-Books pane -->
        <div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-booktab">
          <h4> Επιλογή Συγγραμμάτων </h4>
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Εξάμηνο 1
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                <div class="card-body">

                    <div class="list-group list-group-root well">
                      <?php

                        // Firstly, we should fetch each course
                        // $connect    = mysqli_connect("localhost", "root", "root", "sdi1400109");
                        // $query      = "SELECT course.title FROM course";
                        // $result     = mysqli_query($connect, $query);
                        //
                        // while($row = mysqli_fetch_array($result))
                        // {

                        ?>
                        <?php
                        // Then, inside each course, we should fetch the related books and create a radio menu
                         ?>

                      <a href="#course1" class="list-group-item" data-toggle="collapse">
                        <i class="fas fa-chevron-right"></i>Μάθημα 1
                      </a>
                      <div class="list-group collapse" id="course1">

                        <div class="custom-control custom-radio list-group-item">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">
                            Βιβλίο Α
                            <i class="fas fa-info-circle" data-toggle="modal" data-target="#exampleModal"></i>
                          </label>
                        </div>

                        <div class="custom-control custom-radio list-group-item">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">
                            Βιβλίο B
                            <i class="fas fa-info-circle" data-toggle="modal" data-target="#exampleModal"></i>
                          </label>
                        </div>

                      </div>

                      <a href="#course2" class="list-group-item" data-toggle="collapse">
                        <i class="fas fa-chevron-right"></i>Μάθημα 2
                      </a>
                      <div class="list-group collapse" id="course2">

                        <div class="custom-control custom-radio list-group-item">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">
                            Βιβλίο Α
                            <i class="fas fa-info-circle" data-toggle="modal" data-target="#exampleModal"></i>
                          </label>
                        </div>

                        <div class="custom-control custom-radio list-group-item">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">
                            Βιβλίο B
                            <i class="fas fa-info-circle" data-toggle="modal" data-target="#exampleModal"></i>
                          </label>
                        </div>

                      </div>

                      <a href="#course3" class="list-group-item" data-toggle="collapse">
                        <i class="fas fa-chevron-right"></i>Μάθημα 3
                      </a>
                      <div class="list-group collapse" id="course3">
                        
                      </div>

                    </div>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Εξάμηνο 2
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" >
                <div class="card-body">
                  Μαθήματα Εξαμηνου 2
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Εξάμηνο 3
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
                <div class="card-body">
                  Μαθήματα Εξαμηνου 3
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-md next float-right">Επόμενο</button>
          <button class="btn btn-secondary btn-md previous float-right">Πίσω</button>
        </div>


        <!-- Statement Summary pane -->
        <div class="tab-pane fade" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab">
          <h4> Σύνοψη Επιλογών </h4>
          <div class="card">
            <div class="card-header text-primary">
              <strong>Τίτλος Βιβλιου</strong>
            </div>
            <div class="card-body">
              <p class="card-text">Σχετικές Πληροφορίες</p>
            </div>
        </div>
          <button class="btn btn-primary btn-md next float-right">Επόμενο</button>
          <button class="btn btn-secondary btn-md previous float-right">Πίσω</button>
        </div>


        <!-- Select reception points pane -->
        <div class="tab-pane fade" id="pills-point" role="tabpanel" aria-labelledby="pills-point-tab">
          <h4> Σημεία Διανομής </h4>
          ποιντσ
          <button class="btn btn-success btn-md float-right">Ολοκλήρωση</button>
          <button class="btn btn-secondary btn-md previous float-right">Πίσω</button>
        </div>

      </div>

    </div>


    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="../../index.php">eudoxus.gr</a>
    </div>

    <!-- Modal for book info -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Πληροφορίες Βιβλίου</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Will be filled via Javascript AJAX and PHP -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Πίσω</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Also link to CDN for bootstrap stepper -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Switching tabs using buttons -->
    <script type="text/javascript">
      $('.next').click(function () {
          $('.nav-pills > .nav-item > .active').parent().next('li').find('a').trigger('click');
      });

      $('.previous').click(function () {
          $('.nav-pills > .nav-item > .active').parent().prev('li').find('a').trigger('click');
      });
    </script>

    <!-- Toggling chevrons in multi-level list -->
    <script type="text/javascript">
      $(function() {

        $('.list-group-item').on('click', function() {
          $('.fas', this)
            .toggleClass('fa-chevron-right')
            .toggleClass('fa-chevron-down');
        });
    });
  </script>

  <!-- Fetch book info -->
  <script type="text/javascript">



  </script>


  </body>


</html>

<!DOCTYPE html>
<?php
session_start();
?>

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
    <link rel="stylesheet" type="text/css" href="../css/sign_up.css">

    <title>Εγγραφή</title>
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
          <li class="nav-item">
            <a class="nav-link" href="sign_in.php">Σύνδεση<span class="sr-only"></span></a>
          </li>
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
            <a class="btn btn-outline-secondary" href="../../index.php" role="button" id="home">Αρχική</a>
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
          <li class="breadcrumb-item active" aria-current="page">Εγγραφή</li>
        </ol>
      </nav>
    </div>

    <!-- SignUp Form -->
    <div class="container">
      <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Φοιτητής</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="publisher-tab" data-toggle="tab" href="#publisher" role="tab" aria-controls="publisher" aria-selected="false">Εκδότης</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="secretary-tab" data-toggle="tab" href="#secretary" role="tab" aria-controls="secretary" aria-selected="false">Γραμματεία Τμήματος</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="library-tab" data-toggle="tab" href="#library" role="tab" aria-controls="library" aria-selected="false">Βιβλιοθήκη</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="point-tab" data-toggle="tab" href="#point" role="tab" aria-controls="point" aria-selected="false">Σημείο Διανομής</a>
        </li>
      </ul>
    </div>

      <div class="tab-content" id="myTabContent">
      <!-- #############START OF STUDENT SIGN UP################### -->

      <!-- Student tab-pane -->
        <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
        <form class="signupform" action="sign_up_validation.php" method="post" novalidate>
          <div class="container" id="cont">
            <h3 >Εγγραφή ως Φοιτητής</h3>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" id="student" name="user_type" value="0">
                  <label>Όνομα Χρήστη</label>
                  <input type="text" class="form-control" name="username" placeholder="Όνομα Χρήστη *" required>
                  <div class="invalid-feedback">Εισάγετε όνομα χρήστη</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Κωδικός</label>
                  <input type="password" class="form-control required" name="password" placeholder="Κωδικός *"  required>
                  <div class="invalid-feedback">Εισάγετε Κωδικό</div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Ίδρυμα</label>
                  <select id="studentUni" name="uni" class="form-control">
                    <option selected>Ανωτάτη Σχολή Καλών Τεχνών</option>
                    <option>Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης</option>
                    <option>Γεωπονικό Πανεπιστήμιο Αθηνών</option>
                    <option>Δημοκρίτειο Πανεπιστήμιο Θράκης</option>
                    <option>Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
                    <option>Εθνικό Μετσόβιο Πoλυτεχνείο</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Τμήμα</label>
                  <select id="studentDep" name="dep" class="form-control">
                    <option selected>Βιολογίας</option>
                    <option>Γεωλογίας και Γεωπεριβάλλοντος</option>
                    <option>Ιστορίας και Φιλοσοφίας της Επιστήμης</option>
                    <option>Μαθηματικών</option>
                    <option>Πληροφορικής και Τηλεπικοινωνιών</option>
                    <option>Φυσικής</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Όνομα</label>
                  <input class="form-control" name="name" placeholder="Όνομα *"required>
                  <div class="invalid-feedback">Εισάγετε Όνομα</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Κινητό Τηλέφωνο</label>
                  <input class="form-control" type="text" name="phone" minlength="10" maxlength="10" placeholder="Κινητό Τηλέφωνο">
                </div>
                <div class="custom-control custom-checkbox mb-3 form-group">
                  <input type="checkbox" class="custom-control-input"  id="customCheck1" required>
                  <label class="custom-control-label" for="customCheck1">Αποδέχομαι τους όρους χρήσης</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ηλ.Διεύθυνση <i class="fas fa-info-circle" data-toggle="tooltip"title="Email Ιδρύματος"></i></label>
                  <input type="email" class="form-control required email" name="email" placeholder="Ηλ.Διεύθυνση *" required>
                  <div class="invalid-feedback">Εισάγετε έγκυρη Ηλ.Διεύθυνση</div>
                </div>
                <div class="form-group">
                  <label for="verify_username">Επαλήθευση Κωδικού</label>
                  <input type="password" name = "re_password" class="form-control"  placeholder="Επαλήθευση Κωδικού *" required>
                  <div class="invalid-feedback">Απαιτείται Επαλήθευση</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Σχολή</label>
                  <select id="studentSchool" name="school" class="form-control">
                    <option selected>Επιστημών Αγωγής</option>
                    <option>Επιστημών Υγείας</option>
                    <option>Επιστήμης Φυσικής Αγωγής και Αθλητισμού</option>
                    <option>Θεολογική</option>
                    <option>Θετικών Επιστημών</option>
                    <option>Νομική</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Αριθμός Μητρώου</label>
                  <input type="text" class="form-control" name="register_num" placeholder="Αριθμός Μητρώου *" maxlength="13" minlength="13"  required>
                  <div class="invalid-feedback">Εισάγετε έγκυρο Αριθμό Μητρώου</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Επώνυμο</label>
                  <input class="form-control" name="surname" placeholder="Επώνυμο *" required>
                  <div class="invalid-feedback">Εισάγετε Επώνυμο</div>
                </div>
            </div>
            <div class="container col-md-3 signup-btn">
              <input class="btn btn-lg btn-primary btn-block" type="submit" value="Εγγραφή">
              <div class="signup-help align-items-center text-center">
                <a href="sign_in.php">Έχετε ήδη λογαριασμό ;</a>
              </div>
              <div class="signup-help align-items-center text-center">
                <a href="#">Όροι Χρήσης & Προυποθέσεις</a>
              </div>
            </div>
          </div>
        </div>
        </form>
    </div>

      <!-- Secretary tab-pane -->
      <div class="tab-pane fade show" id="secretary" role="tabpanel" aria-labelledby="secretary-tab">
      <form class="signupform" action="sign_up_validation.php" method="post" novalidate>
        <div class="container" id="cont">
          <h3 >Εγγραφή ως Γραμματεία Τμήματος</h3>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="hidden" id="secretary" name="user_type" value="1">
                <label for="exampleInputEmail1">Όνομα Χρήστη</label>
                <input type="text" class="form-control required" name="username"  placeholder="Όνομα Χρήστη *" required>
                <div class="invalid-feedback">Εισάγετε όνομα χρήστη</div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Κωδικός</label>
                <input type="password" class="form-control required" name="password" placeholder="Κωδικός *" required>
                <div class="invalid-feedback">Εισάγετε Κωδικό</div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Ίδρυμα</label>
                <select id="secretaryUni" name="uni" class="form-control">
                  <option selected>Ανωτάτη Σχολή Καλών Τεχνών</option>
                  <option>Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης</option>
                  <option>Γεωπονικό Πανεπιστήμιο Αθηνών</option>
                  <option>Δημοκρίτειο Πανεπιστήμιο Θράκης</option>
                  <option>Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
                  <option>Εθνικό Μετσόβιο Πoλυτεχνείο</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Τμήμα</label>
                <select id="secretaryDep" name="dep" class="form-control">
                  <option selected>Βιολογίας</option>
                  <option>Γεωλογίας και Γεωπεριβάλλοντος</option>
                  <option>Ιστορίας και Φιλοσοφίας της Επιστήμης</option>
                  <option>Μαθηματικών</option>
                  <option>Πληροφορικής και Τηλεπικοινωνιών</option>
                  <option>Φυσικής</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Ηλ.Διεύθυνση <i class="fas fa-info-circle" data-toggle="tooltip"title="Email Ιδρύματος"></i></label>
                <input type="email" name="email" class="form-control required email" placeholder="Ηλ.Διεύθυνση *" required>
                <div class="invalid-feedback">Εισάγετε Ηλ.Διεύθυνση</div>
              </div>
              <div class="form-group">
                <label for="verify_username">Επαλήθευση Κωδικού</label>
                <input type="password" name="re_password" class="form-control"  placeholder="Επαλήθευση Κωδικού *"  required>
                <div class="invalid-feedback">Απαιτείται Επαλήθευση</div>
              </div>
              <div class="form-group">
                <label for="inputSchool">Σχολή</label>
                <select id="secretarySchool" name="school" class="form-control">
                  <option selected>Επιστημών Αγωγής</option>
                  <option>Επιστημών Υγείας</option>
                  <option>Επιστήμης Φυσικής Αγωγής και Αθλητισμού</option>
                  <option>Θεολογική</option>
                  <option>Θετικών Επιστημών</option>
                  <option>Νομική</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputSemester">Εξάμηνα Σπουδών</label>
                <select id="inputSemester" name="semesters" class="form-control">
                  <option selected>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputState">Νομός</label>
              <select id="inputState" name="state" class="form-control">
                <option selected>ΑΙΤΩΛ/ΝΙΑΣ</option>
                <option>ΑΡΓΟΛΙΔΟΣ</option>
                <option>ΑΡΚΑΔΙΑΣ</option>
                <option>ΑΤΤΙΚΗΣ</option>
                <option>ΘΕΣΣΑΛΙΑΣ</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">Πόλη</label>
              <select id="inputCity" name="city" class="form-control" required>
                <option selected>Αθήνα</option>
                <option>Αλεξανδρούπολη</option>
                <option>Θεσσαλονίκη</option>
                <option>Κρήτη</option>
                <option>Πάτρα</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">T.K.</label>
              <input type="text" class="form-control" name="zipcode" maxlength="5" id="inputZip" required>
              <div class="invalid-feedback">Εισάγετε έγκυρο Τ.Κ</div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Όνομα</label>
                <input type="text" class="form-control" name="name" placeholder="Όνομα *"  required>
                <div class="invalid-feedback">Εισάγετε Όνομα</div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Τηλέφωνο</label>
                <input type="text" class="form-control" name="phone" placeholder="Τηλέφωνο *"  maxlength="10"  minlength="10" required>
                <div class="invalid-feedback">Εισάγετε έγκυρο Τηλέφωνο</div>
              </div>
              <div class="custom-control custom-checkbox mb-3 form-group">
                <input type="checkbox" class="custom-control-input" id="customCheck3" required>
                <label class="custom-control-label" for="customCheck3">Αποδέχομαι τους όρους χρήσης</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Επώνυμο</label>
                <input type="text" class="form-control" name="surname" placeholder="Επώνυμο *"  required>
                <div class="invalid-feedback">Εισάγετε Επώνυμο</div>
              </div>
            </div>
          </div>
          <div class="container col-md-3 signup-btn">
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Εγγραφή">
            <div class="signup-help align-items-center text-center">
              <a href="sign_in.php">Έχετε ήδη λογαριασμό ;</a>
            </div>
            <div class="signup-help align-items-center text-center">
              <a href="#">Όροι Χρήσης & Προυποθέσεις</a>
            </div>
          </div>
        </div>
      </form>
      </div>

      <!-- Publisher tab-pane -->
      <div class="tab-pane fade show" id="publisher" role="tabpanel" aria-labelledby="publisher-tab">
        <div class="container" id="cont">
          <h3 >Εγγραφή ως Εκδότης</h3>
        </div>
      </div>

      <!-- Library tab-pane -->
      <div class="tab-pane fade show" id="library" role="tabpanel" aria-labelledby="library-tab">
        <div class="container" id="cont">
          <h3 >Εγγραφή ως Βιβλιοθήκη</h3>
        </div>
      </div>

      <!-- Point tab-pane -->
      <div class="tab-pane fade show" id="point" role="tabpanel" aria-labelledby="point-tab">
        <div class="container" id="cont">
          <h3 >Εγγραφή ως Σημείο Διανομής</h3>
        </div>
      </div>

    </div>

    <!-- Modal [in case sign-up was not successful]-->
    <?php
    session_start();
    if ( isset($_GET['success'])){
        echo
        '    <div class="modal fade" id="unsuccessfulsignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body text-center">'
                    . $_SESSION["msg"] .
                  '</div>
                  <div class="modal-footer">
                    <div class="col-md-12 text-center">
                      <button name="singlebutton" class="btn btn-sm btn-primary"data-dismiss="modal">Δοκιμάστε Ξανά</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
      }
    ?>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="../../index.php">eudoxus.gr</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Form validation -->
    <script type="text/javascript">

      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('signupform');
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

    <script type="text/javascript">
      $(document).ready(function () {
          $('#unsuccessfulsignup').modal('show');
      });
    </script>

  </body>
</html>

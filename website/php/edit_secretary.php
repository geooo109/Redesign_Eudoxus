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
    <link rel="stylesheet" type="text/css" href="../css/edit_secretary.css">
    <title>Επεξεργασία Προφίλ</title>

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

          <!----------------------------------------------------------------------------------------------->
          <li class="nav-item">
            <a class="nav-link" href="sign_out.php">Αποσύνδεση<span class="sr-only"></span></a>
          </li>
          <!----------------------------------------------------------------------------------------------->

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
          <li class="breadcrumb-item"><a href="profile_secretary.php">Προφίλ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Επεξεργασία</li>
        </ol>
      </nav>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="../pics/avatar.jpeg" alt="Image not found" id="avatar">
          <br>
          <div class="file btn btn-lg btn-primary">
              Change Photo
          </div>
        </div>
        <div class="col-md-6">
          <div class="head">
            <h5>
                Νάνσυ Κασιμάτη
            </h5>
            <h6>
                Υπεύθυνη Γραμματείας
            </h6>
            <p class="register-date">ΜΕΛΟΣ ΑΠΟ: <span>30/1/2010</span></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 profile-info">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Προφίλ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">Λογαριασμός</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="books-tab" data-toggle="tab" href="#books" role="tab" aria-controls="books" aria-selected="true">Συγγράμματα</a>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">

            <!-- Profile Settings Tab -->
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="container" id="cont">
                <form>

                  <div class="form-row">
                    <div class="col form-group">
                      <label for="inputName">Όνομα</label>
                      <input type="text" class="form-control" value="Νάνσυ">
                    </div>
                    <div class="col form-group">
                      <label for="inputName">Επώνυμο</label>
                      <input type="text" class="form-control" value="Κασιμάτη">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col form-group">
                      <label for="inputUni">Ίδρυμα</label>
                      <select id="inputUni" name="uni" class="form-control">\
                        <option selected>Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
                        <option>Ανωτάτη Σχολή Καλών Τεχνών</option>
                        <option>Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης</option>
                        <option>Γεωπονικό Πανεπιστήμιο Αθηνών</option>
                        <option>Δημοκρίτειο Πανεπιστήμιο Θράκης</option>
                        <option>Εθνικό Μετσόβιο Πoλυτεχνείο</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Σχολή</label>
                      <select id="inputUni" name="uni" class="form-control">
                        <option selected>Θετικών Επιστημών</option>
                        <option>Επιστημών Αγωγής</option>
                        <option>Επιστημών Υγείας</option>
                        <option>Επιστήμης Φυσικής Αγωγής και Αθλητισμού</option>
                        <option>Θεολογική</option>
                        <option>Νομική</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Τμήμα</label>
                      <select id="inputDep" name="dep" class="form-control">
                        <option selected>Πληροφορικής και Τηλεπικοινωνιών</option>
                        <option>Βιολογίας</option>
                        <option>Γεωλογίας και Γεωπεριβάλλοντος</option>
                        <option>Ιστορίας και Φιλοσοφίας της Επιστήμης</option>
                        <option>Μαθηματικών</option>
                        <option>Φυσικής</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col form-group">
                      <label for="inputSemester">Εξάμηνα Σπουδών</label>
                      <select id="inputSemester" class="form-control">
                        <option selected>8</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="inputState">Νομός</label>
                      <select id="inputState" class="form-control">
                        <option selected>ΑΤΤΙΚΗΣ</option>
                        <option>ΑΙΤΩΛ/ΝΙΑΣ</option>
                        <option>ΑΡΓΟΛΙΔΟΣ</option>
                        <option>ΑΡΚΑΔΙΑΣ</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity">Πόλη</label>
                      <select id="inputCity" class="form-control">
                        <option selected>Αθήνα</option>
                        <option>Αλεξανδρούπολη</option>
                        <option>Αγρίνιο</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-2 form-group">
                      <label for="inputZip">T.K.</label>
                      <input type="text" class="form-control" id="inputZip" value="10431">
                    </div>
                  </div>
                </form>
                <div class=" container col-md-3 align-items-center text-center">
                  <input class="btn btn-success btn-block" type="submit" value="Αποθήκευση">
                </div>
              </div>
            </div>

            <!-- Account Settings Tab -->
            <div class="tab-pane fade show" id="account" role="tabpanel" aria-labelledby="account-tab">
              <div class="container" id="cont">
                <form>

                  <div class="row">
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Όνομα Χρήστη</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Ηλ.Διεύθυνση</label>
                      <input type="text" class="form-control" value="nancykas@di.uoa.gr"/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Κωδικός</label>
                      <input type="pass" class="form-control"/>
                    </div>
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Επανάληψη Κωδικού</label>
                      <input type="pass" class="form-control"/>
                    </div>
                  </div>

                </form>
                <div class=" container col-md-3 align-items-center text-center">
                  <input class="btn btn-success btn-block" type="submit" value="Αποθήκευση">
                </div>

              </div>
            </div>

            <!-- Curriculum[Books] Settings Tab -->
            <div class="tab-pane fade show" id="books" role="tabpanel" aria-labelledby="books-tab">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                      <a href="#" data-toggle="collapse" data-target="#semesterOne" aria-expanded="true" aria-controls="semesterOne">
                        Εξάμηνο 1
                      </a>
                  </div>

                  <div id="semesterOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                      <table class="table table-hover table-bordered">
                        <br>
                        <h4 class="text-center text-primary">Εισαγωγή στον Προγραμματισμό<button type="button" name="button" class="btn btn-success">Προσθήκη<i class="fas fa-plus"></i></button></h4>
                        <br>
                        <thead class="text-center">
                          <tr class="header">
                            <th class="align-middle" scope="col">#</th>
                            <th class="align-middle" scope="col">Τίτλος</th>
                            <th class="align-middle" scope="col">Συγγραφέας</th>
                            <th class="align-middle" scope="col">Εκδόσεις</th>
                            <th class="align-middle" scope="col">Κωδικός Ευδόξου</th>
                            <th class="align-middle" scope="col"></th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <tr class="header">
                            <th class="align-middle" scope="row">1</th>
                            <td class="align-middle">C: Από τη Θεωρία στην Εφαρμογή</td>
                            <td class="align-middle">Γ. Σ. Τσελίκης - Ν. Δ. Τσελίκας</td>
                            <td class="align-middle">Γ. Σ. Τσελίκης - Ν. Δ. Τσελίκας</td>
                            <td class="align-middle">68383623</td>
                            <td class="align-middle"><i class="fas fa-edit"></i></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό τίτλο"></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό συγγραφέα"></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό εκδοτικό οίκο"></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό κωδικό"></td>
                            <td class="align-middle"><a href="#process_edit_and_redirect_back_here"><i class="text-success fas fa-save"></i></a></td>
                          </tr>

                          <tr class="header">
                            <th class="align-middle" scope="row">2</th>
                            <td class="align-middle">Η ΓΛΩΣΣΑ C ΣΕ ΒΑΘΟΣ</td>
                            <td class="align-middle">ΝΙΚΟΣ Μ. ΧΑΤΖΗΓΙΑΝΝΑΚΗΣ</td>
                            <td class="align-middle">ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ</td>
                            <td class="align-middle">68384925</td>
                            <td class="align-middle"><i class="fas fa-edit"></i></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό τίτλο"></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό συγγραφέα"></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό εκδοτικό οίκο"></td>
                            <td><input type="text" class="form-control" id placeholder="Εισάγετε νεό κωδικό"></td>
                            <td class="align-middle"><a href="#process_edit_and_redirect_back_here"><i class="text-success fas fa-save"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <a href="#" data-toggle="collapse" data-target="#semesterTwo" aria-expanded="true" aria-controls="semesterTwo">
                      Εξάμηνο 2
                    </a>
                  </div>
                  <div id="semesterTwo" class="collapse" aria-labelledby="headingTwo">
                    <div class="card-body">
                      Test
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <a href="#" data-toggle="collapse" data-target="#semesterThree" aria-expanded="true" aria-controls="semesterThree">
                      Εξάμηνο 3
                    </a>
                  </div>
                  <div id="semesterThree" class="collapse" aria-labelledby="headingThree">
                    <div class="card-body">
                      Test
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="../../index.php">eudoxus.gr</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('tr.header').click(function(){
        $(this).nextUntil('tr.header').css('display', function(i,v){
            return this.style.display === 'table-row' ? 'none' : 'table-row';
        });
    });
    </script>
  </body>
</html>

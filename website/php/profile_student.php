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
    <link rel="stylesheet" type="text/css" href="../css/profile_student.css">
    <title>Προφίλ</title>

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
          <li class="breadcrumb-item active" aria-current="page">Προφίλ</li>
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
                Αναστάσιος Σκραμπράς
            </h5>
            <h6>
                Φοιτητής
            </h6>
            <p class="register-date">ΜΕΛΟΣ ΑΠΟ: <span>30/1/2019</span></p>
          </div>
        </div>
        <div class="col-md-2">
          <a href="#edit_profile">
            <button class="btn btn-primary btn-sm navbar-btn">Επεξεργασία
              <span class="sr-only"></span>
            </button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 profile-info">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Στοιχεία</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="stats-tab" data-toggle="tab" href="#stats" role="tab" aria-controls="stats" aria-selected="false">Στατιστικά</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Ιστορικό Δηλώσεων</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
              <div class="container" id="cont">
                <div class="row">
                  <div class="col-md-6">
                    <label>Όνομα</label>
                  </div>
                  <div class="col-md-6">
                    <p>Αναστάσιος</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Επώνυμο</label>
                  </div>
                  <div class="col-md-6">
                    <p>Σκραμπράς</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Ίδρυμα</label>
                  </div>
                  <div class="col-md-6">
                    <p>Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Σχολή</label>
                  </div>
                  <div class="col-md-6">
                    <p>Θετικών Επιστημών</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Τμήμα</label>
                  </div>
                  <div class="col-md-6">
                    <p>Πληροφορικής & Τηλεπικοινωνιών</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Αριθμός Μητρώου</label>
                  </div>
                  <div class="col-md-6">
                    <p>1115201500087</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Ηλ.Διεύθυνση</label>
                  </div>
                  <div class="col-md-6">
                    <p>skrabas@smiggol.gr</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Κινητό</label>
                  </div>
                  <div class="col-md-6">
                    <p>6972222222</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show" id="history" role="tabpanel" aria-labelledby="history-tab">
              <table class="table table-striped">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle" scope="col">#</th>
                    <th class="align-middle" scope="col">Μάθημα</th>
                    <th class="align-middle" scope="col">Διδάσκων</th>
                    <th class="align-middle" scope="col">Εξάμηνο</th>
                    <th class="align-middle" scope="col">Τίτλος</th>
                    <th class="align-middle" scope="col">Συγγραφέας</th>
                    <th class="align-middle" scope="col">Κωδικός</th>
                    <th class="align-middle" scope="col">Ημερομηνία</th>
                  </tr>
                </thead>

                <!-- We're gonna need a for-loop over the books of current user -->
                <tbody class="text-center">
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle">Εισαγωγή στον Προγραμματισμό</td>
                    <td class="align-middle">Π.Σταματόπουλος</td>
                    <td class="align-middle">1ο</td>
                    <td class="align-middle">Ο Γλώσσα C</td>
                    <td class="align-middle">Χατζηγιαννακης</td>
                    <td class="align-middle">12562401</td>
                    <td class="align-middle">20/10/15</td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">2</th>
                    <td class="align-middle">Διακριτά Μαθηματικά</td>
                    <td class="align-middle">Εμίρης</td>
                    <td class="align-middle">1ο</td>
                    <td class="align-middle">Διακριτά Μαθηματικά</td>
                    <td class="align-middle">Rosen</td>
                    <td class="align-middle">23592401</td>
                    <td class="align-middle">20/10/15</td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">3</th>
                    <td class="align-middle">Λογική Σχεδίαση</td>
                    <td class="align-middle">Πασχάλης</td>
                    <td class="align-middle">1ο</td>
                    <td class="align-middle">Ψηφιακή Λογική Σχεδίαση</td>
                    <td class="align-middle">Mano</td>
                    <td class="align-middle">72562402</td>
                    <td class="align-middle">20/10/15</td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">4</th>
                    <td class="align-middle">Εισαγωγή στην Πληροφορική και τις Τηλεπικοινωνίες</td>
                    <td class="align-middle">Α.Τσαλγατίδου</td>
                    <td class="align-middle">1ο</td>
                    <td class="align-middle">Αεροπλάνο</td>
                    <td class="align-middle">James</td>
                    <td class="align-middle">32362401</td>
                    <td class="align-middle">20/10/15</td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">5</th>
                    <td class="align-middle">Γραμμική Άλγεβρα</td>
                    <td class="align-middle">Ε.Ράπτης</td>
                    <td class="align-middle">1ο</td>
                    <td class="align-middle">Εισαγωγή στη Γραμμική Άλγεβρα</td>
                    <td class="align-middle">Αθανασόπουλος</td>
                    <td class="align-middle">99562401</td>
                    <td class="align-middle">20/10/15</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="stats" role="tabpanel" aria-labelledby="stats-tab">
              <div class="container" id="cont">
                <div class="row">
                  <div class="col-md-6">
                    <label>Παραληφθέντα Συγγράμματα</label>
                  </div>
                  <div class="col-md-6">
                    <p>18</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Συγγράμματα προς παραλαβή</label>
                  </div>
                  <div class="col-md-6">
                    <p>3</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Πιστωτικές Μονάδες</label>
                  </div>
                  <div class="col-md-6">
                    <p>32.5</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Αριθμός Ανταλλαγών</label>
                  </div>
                  <div class="col-md-6">
                    <p>5</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

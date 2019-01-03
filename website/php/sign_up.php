<!DOCTYPE html>
<html lang="el">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Mantas Michas Panagiotopoulos" content="Eudoxus Redesign">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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
                    <img src="../pics/search.png">
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
                <a class="dropdown-item" href="#">Πρόγραμμα Σπουδών</a>
                <a class="dropdown-item" href="#">Παράμετροι Διανομής</a>
                <a class="dropdown-item" href="#">Αναφορές</a>
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

    <!-- breadcrumb -->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.php">Εύδοξος</a></li>
          <li class="breadcrumb-item active" aria-current="page">Εγγραφή</li>
        </ol>
      </nav>
    </div>

    <!-- SignUp Form -->
    <div class="container" id="cont">
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
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
          <h3 >Εγγραφή ως Φοιτητής</h3>
          <div class="form-row signup-form">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Όνομα Χρήστη</label>
                <input type="text" class="form-control" placeholder="Όνομα Χρήστη *" value="" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Κωδικός</label>
                <input type="password" class="form-control" placeholder="Κωδικός *" value="" />
                <!-- <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Κινητό Τηλέφωνο *" value="" /> -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <!-- <input type="text" class="form-control" placeholder="Επώνυμο *" value="" /> -->
                <label for="exampleInputEmail1">Ηλ.Ταχυδρομείο</label>
                <input type="email" class="form-control" placeholder="Ηλ.Ταχυδρομείο *" value="" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Επαλήθευση Κωδικού</label>
                <input type="password" class="form-control"  placeholder="Επαλήθευση Κωδικού *" value="" />
              </div>
              <div class="form-group">
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="publisher" role="tabpanel" aria-labelledby="publisher-tab">
          <h3>Εγγραφή ως Εκδότης</h3>
          <div class="row signup-form">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Όνομα *" value="" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Επώνυμο *" value="" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Κωδικός *" value="" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Επαλήθευση Κωδικού *" value="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Ηλ.Ταχυδρομείο *" value="" />
            </div>
            <div class="form-group">
              <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Κινητό Τηλέφωνο *" value="" />
            </div>
          </div>
        </div>
        </div>

        <div class="tab-pane fade" id="point" role="tabpanel" aria-labelledby="point-tab">
          <h3>Εγγραφή ως Σημείο Διανομής</h3>
          <form>
            <div class="form-row signup-form">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>


    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="../../index.php">eudoxus.gr</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>

</html>

<!-- <input type="submit" class="btnRegister"  value="Εγγραφή"/> -->

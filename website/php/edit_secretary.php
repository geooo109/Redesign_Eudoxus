<!DOCTYPE html>
<html lang="el">

<?php
  session_start();
  require_once '../../con_db.php';
  if (isset($_SESSION['user_id'])) {
    //connect to the db to fetch data
    $connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
    $connect->set_charset("utf8");
    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    }
    //fetch the data
    $id      = $_SESSION['user_id'];
    $queryf  = "SELECT * from user WHERE id =  '$id'";
    $data    = mysqli_fetch_array($connect->query($queryf));
  }
?>
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
            <input class="form-control py-2 border-right-0 border" type="search" value="Αναζήτηση" id="searchinput">
            <span class="input-group-append">
              <a href="#">
                <button id="searchbutton" class="btn btn-outline-secondary border-left-0 border" type="button">
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
              <?php echo $data['name'].' '.$data['surname']; ?>
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
                <form class="editform" action="edit_secr_validation.php" method="post" novalidate>
                  <input type="hidden" id="custId" name="update_type" value="2">
                  <div class="form-row">
                    <div class="col form-group">
                      <label for="inputName">Όνομα</label>
                      <input type="text" type = "name" name = "name" class="form-control" value=<?php echo $data['name']; ?> required>
                    </div>
                    <div class="col form-group">
                      <label for="inputName">Επώνυμο</label>
                      <input type="text" name="surname" class="form-control" value= <?php echo $data['surname']; ?> required>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col form-group">
                      <label for="inputUni">Ίδρυμα</label>
                      <select id="inputUni" name="uni" class="form-control">
                        <option selected> <?php echo $data['uni']; ?></option>
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
                      <select id="inputUni" name="school" class="form-control">
                        <option selected> <?php echo $data['school']; ?> </option>
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
                        <option selected> <?php echo $data['dep']; ?> </option>
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
                      <select id="inputSemester" name = "semesters" class="form-control">
                        <option selected> <?php echo $data['semesters']; ?></option>
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
                      <select id="inputState" name="state" class="form-control">
                        <option selected><?php echo $data['state']; ?></option>
                        <option>ΑΙΤΩΛ/ΝΙΑΣ</option>
                        <option>ΑΡΓΟΛΙΔΟΣ</option>
                        <option>ΑΡΚΑΔΙΑΣ</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity">Πόλη</label>
                      <select id="inputCity" name="city" class="form-control">
                        <option selected><?php echo $data['city']; ?></option>
                        <option>Αλεξανδρούπολη</option>
                        <option>Αγρίνιο</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-2 form-group">
                      <label for="inputZip">T.K.</label>
                      <input type="text" class="form-control" name="zipcode" id="inputZip" value=<?php echo $data['zipcode']; ?> required>
                    </div>
                  </div>
                <div class=" container col-md-3 align-items-center text-center">
                  <input class="btn btn-success btn-block" type="submit" value="Αποθήκευση">
                </div>
              </form>
              </div>
            </div>

            <!-- Account Settings Tab -->
            <div class="tab-pane fade show" id="account" role="tabpanel" aria-labelledby="account-tab">
              <div class="container" id="cont">
                <form class="editform" action="edit_secr_validation.php" method="post" novalidate>
                  <input type="hidden" id="custId" name="update_type" value="3">
                  <div class="row">
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Όνομα Χρήστη</label>
                      <input type="text" class="form-control" name="username" value=<?php echo $data['username']; ?> required>
                    </div>
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Ηλ.Διεύθυνση</label>
                      <input type="text" class="form-control" name="email" value=<?php echo $data['email']; ?> required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Κωδικός</label>
                      <input type="password" class="form-control" name="password"required>
                    </div>
                    <div class="col form-group">
                      <label for="exampleInputEmail1">Επανάληψη Κωδικού</label>
                      <input type="password" class="form-control" name="re_password" required>
                    </div>
                  </div>

                <div class=" container col-md-3 align-items-center text-center">
                  <input class="btn btn-success btn-block" type="submit" value="Αποθήκευση">
                </div>
              </form>

              </div>
            </div>

            <!-- Curriculum[Books] Settings Tab -->
            <div class="tab-pane fade show" id="books" role="tabpanel" aria-labelledby="books-tab">
                <?php
                  // We should fetch the books of current secretary, i.e: secretary with id == $_SESSION['user_id']
                  $query      = "SELECT b.id,b.title,a.name,p.name,c.title,c.professor,c.semester,b.eudoxus_code FROM book AS b JOIN author AS a ON b.author_id=a.id JOIN publisher AS p ON b.publisher_id=p.id JOIN course AS c ON b.course_id=c.id ORDER BY c.semester ";
                  $result     = $connect->query($query);
                  ?>
                  <button id="addButton" type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                    Προσθήκη <i class="fas fa-plus"></i>
                  </button>
                  <hr>
                  <table class="table table-hover table-bordered" id="myTable">
                    <thead class="text-center">
                      <tr>
                        <th class="align-middle" scope="col">#</th>
                        <th class="align-middle" scope="col">Τίτλος</th>
                        <th class="align-middle" scope="col">Συγγραφέας</th>
                        <th class="align-middle" scope="col">Εκδόσεις</th>
                        <th class="align-middle" scope="col">Μάθημα</th>
                        <th class="align-middle" scope="col">Καθηγητής</th>
                        <th class="align-middle" scope="col">Εξάμηνο</th>
                        <th class="align-middle" scope="col">Κωδικός Ευδόξου</th>
                        <th width="8%"></th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php
                      $book_counter = 0;
                      while($row = $result->fetch_array())
                      {
                        $book_counter++;
                        ?>
                        <tr id="<?php echo $row['id']; ?>">
                          <th class="align-middle" scope="row"> <?php echo $book_counter; ?></th>
                          <td class="align-middle"><?php echo $row[1]; ?></td>
                          <td class="align-middle"><?php echo $row[2]; ?></td>
                          <td class="align-middle"><?php echo $row[3]; ?></td>
                          <td class="align-middle"><?php echo $row[4]; ?></td>
                          <td class="align-middle"><?php echo $row[5]; ?></td>
                          <td class="align-middle"><?php echo $row[6]; ?></td>
                          <td class="align-middle"><?php echo $row["eudoxus_code"]; ?></td>
                          <td class="align-middle">
                            <a data-toggle="modal" data-target="#editModal" id="<?php echo $row["id"]; ?>" class="editData"><i class="far fa-edit"></i></a>
                            <a data-toggle="modal" data-target="#deleteModal" id="<?php echo $row["id"]; ?>" class="deleteData"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

          </div>

        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="../../index.php">eudoxus.gr</a>
    </div>

    <!-- Modal Dialog for adding a new book -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <form class="editform" id="addForm" action="" method="post" novalidate>
            <div class="modal-header">
              <h5 class="modal-title" id="addModalLabel">Προσθήκη Βιβλίου</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Τίτλος </label>
                <input type="text" class="form-control" id="title" placeholder="Τίτλος *" required>
                <label id="errorTitle" style="color:red;"></label>
              </div>

              <div class="form-group">
                <label>Συγγραφέας</label>
                <input type="text" class="form-control" id="author" placeholder="Συγγραφέας *" required>
                <label id="errorAuthor" style="color:red;"></label>
              </div>

              <div class="form-group">
                <label>Εκδόσεις</label>
                <input type="text" class="form-control" id="publisher" placeholder="Εκδόσεις *" required>
                <label id="errorPublisher" style="color:red;"></label>
              </div>

              <div class="form-group">
                <label>Μάθημα</label>
                <input type="text" class="form-control" id="course" placeholder="Μάθημα *" required>
                <label id="errorCourse" style="color:red;"></label>
              </div>

              <div class="form-group">
                <label>Καθηγητής</label>
                <input type="text" class="form-control" id="professor" placeholder="Καθηγητής *" required>
                <label id="errorProfessor" style="color:red;"></label>
              </div>

              <div class="form-group">
                <label>Αριθμός Εξαμήνου</label>
                <input type="text" class="form-control" id="semester" placeholder="Αριθμός Εξαμήνου *" required>
                <label id="errorSemester" style="color:red;"></label>
              </div>

              <div class="form-group">
                <label>Κωδικός Ευδόξου</label>
                <input type="text" class="form-control" id="eudoxus_code" placeholder="Κωδικός Ευδόξου *" required>
                <label id="errorEudCode" style="color:red;"></label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Ακύρωση</button>
              <button type="button" id="add" class="btn btn-primary">Αποθήκευση</button>
          </form>
        </div>
        </div>
      </div>
    </div>

    <!-- Modal Dialog for editing an existing book -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <form class="editform" id="editForm" action="" method="post" novalidate>
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Επεξεργασία Βιβλίου</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="editModalBody">
                <!-- Will be filled via Javascript AJAX and PHP -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Ακύρωση</button>
              <button type="button" id="update" class="btn btn-primary">Αποθήκευση</button>
          </form>
        </div>
        </div>
      </div>
    </div>

    <!-- Modal Dialog for deleting an existing book -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <form id="deleteForm" action="" method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Διαγραφή Βιβλίου</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="deleteModalBody">
              <!-- Will be filled via Javascript AJAX and PHP -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Ακύρωση</button>
              <button type="button" id="delete" class="btn btn-danger">Διαγραφή</button>
          </form>
        </div>
        </div>
      </div>
    </div>

    <!-- Modal shown after edit -->
    <?php
    session_start();
    if ( isset($_GET['success'])){
        echo
        '    <div class="modal fade" id="editresult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body text-center">'
                    . $_SESSION["msg"] .
                  '</div>
                  <div class="modal-footer">
                    <div class="col-md-12 text-center">';

                      if($_GET['success']==0){
                        echo '<button name="singlebutton" class="btn btn-sm btn-primary"data-dismiss="modal">Δοκιμάστε Ξανά</button>';
                      }
                      else {
                        echo '<button name="singlebutton" class="btn btn-sm btn-success"data-dismiss="modal">Συνέχεια</button>';
                      }

                      echo
                    '</div>
                  </div>
                </div>
              </div>
            </div>';
      }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Add,Edit and Delete rows from 'book' table -->
    <script src="../js/modifyTable.js" charset="utf-8"></script>

    <!-- Form validation -->
    <script type="text/javascript">

      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('editform');
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

    <!-- Modal shown after edit -->
    <script type="text/javascript">
      $(document).ready(function () {
          $('#editresult').modal('show');
      });
    </script>
    <!-- Search -->
    <script type="text/javascript">
      $(document).on('click','#searchbutton',function(){
        var searchvalue = $('#searchinput').val();
        window.location = "./search.php?search=" + searchvalue;
      });
    </script>


  </body>

</html>

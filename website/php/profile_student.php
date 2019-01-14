<!DOCTYPE html>
<html lang="el">
<?php
session_start();
require_once '../../con_db.php';
if (isset($_SESSION['user_id'])) {
  //connect to the db to fetch data
  $connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
  mysqli_set_charset($connect,'utf8');
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  //fetch the data
  $id      = $_SESSION['user_id'];
  $queryf  = "SELECT * from user WHERE id =  '$id'";
  $result  = mysqli_query($connect, $query);
  $data    =  mysqli_fetch_array($connect->query($queryf));
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
          <li class="breadcrumb-item active" aria-current="page">Προφίλ</li>
        </ol>
      </nav>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="../pics/avatar.jpeg" alt="Image not found" id="avatar">
          <br>
          <br>
        </div>
        <div class="col-md-6">
          <div class="head">
            <h5>
                <?php echo $data['name'].' '.$data['surname']; ?>
            </h5>
            <h6>
                <?php
                  echo 'Φοιτητής';
                ?>
            </h6>
            <p class="current-semester">ΤΡΕΧΟΝ ΕΞΑΜΗΝΟ: <span>5</span></p>
          </div>
        </div>
        <div class="col-md-2">
          <a href="edit_student.php">
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
            <!-- General Information Tab -->
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                  <div class="container" id="cont">
                    <div class="row">
                      <div class="col-md-6">
                        <label>Όνομα</label>
                      </div>
                      <div class="col-md-6">
                        <p><?php echo $data['name']?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Επώνυμο</label>
                      </div>
                      <div class="col-md-6">
                        <p><?php echo $data['surname'] ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Ίδρυμα</label>
                      </div>
                      <div class="col-md-6">
                        <p> <?php echo $data['uni'] ?> </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Σχολή</label>
                      </div>
                      <div class="col-md-6">
                        <p><?php echo $data['school'] ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Τμήμα</label>
                      </div>
                      <div class="col-md-6">
                      <p><?php echo $data['dep'] ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Αριθμός Μητρώου</label>
                      </div>
                      <div class="col-md-6">
                        <p><?php echo $data['register_num'] ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Ηλ.Διεύθυνση</label>
                      </div>
                      <div class="col-md-6">
                        <p><?php echo $data['email'] ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Κινητό</label>
                      </div>
                      <div class="col-md-6">
                        <p><?php echo $data['phone'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>

            <!-- Stats tab-->
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


            <!-- History tab -->
            <?php
              // We should fetch the books of current student, i.e: student with id == $_SESSION['user_id']
               $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
               $query = "SELECT b.id, b.title, a.name, c.title, c.professor, c.semester, b.eudoxus_code FROM book AS b JOIN author AS a ON b.author_id=a.id JOIN course AS c ON b.course_id=c.id ORDER BY c.semester";
               $result = mysqli_query($connect, $query);
             ?>
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
                <tbody class="text-center">
                  <?php
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                    <tr>
                      <th class="align-middle" scope="row"> <?php echo $row['id']; ?></th>
                      <td class="align-middle"><?php echo $row[3]; ?></td>
                      <td class="align-middle"><?php echo $row[4]; ?></td>
                      <td class="align-middle"><?php echo $row[5]; ?></td>
                      <td class="align-middle"><?php echo $row["title"]; ?></td>
                      <td class="align-middle"><?php echo $row[2]; ?></td>
                      <td class="align-middle"><?php echo $row["eudoxus_code"]; ?></td>
                      <td class="align-middle">DD/MM/YYYY</td>
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

  </body>

</html>

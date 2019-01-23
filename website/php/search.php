<!DOCTYPE html>
<html lang="el" dir="ltr">
<?php

  session_start();
  require_once '../../con_db.php';

  // Connect to the db
  $connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
  $connect->set_charset("utf8");

  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
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
    <link rel="stylesheet" type="text/css" href="../css/search.css">
    <title>Αναζήτηση</title>
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
          <li class="breadcrumb-item active" aria-current="page">Αναζήτηση</li>
        </ol>
      </nav>
    </div>

    <!-- Results -->

    <div class="container">
      <h4>
        Αποτελέσματα Αναζήτησης
      </h4>
      <?php
        // Check connection
        if ($connect->connect_error) {
          die("Connection failed: " . $connect->connect_error);
        }

        if(isset($_GET['search'])){
          ?>
          <h5 class="text-primary"><br>Συγγράμματα</h5>
          <?php
          $searchvalue = $_GET['search'];
          $query       = "SELECT b.id, b.title, a.name, p.name FROM book AS b JOIN author AS a ON b.author_id=a.id JOIN course AS c ON b.course_id=c.id JOIN publisher AS p ON b.publisher_id=p.id WHERE b.title LIKE '%$searchvalue%'";
          $result      = $connect->query($query);
          ?>
          <table class="table table-striped">
            <thead class="text-center">
              <tr>
                <th class="align-middle" scope="col">#</th>
                <th class="align-middle" scope="col">Τίτλος</th>
                <th class="align-middle" scope="col">Συγγραφέας</th>
                <th class="align-middle" scope="col">Εκδότης</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
              $counter=0;
              while($row = $result->fetch_array())
              {$counter++;
                ?>
                <tr>
                  <th class="align-middle" scope="row"> <?php echo $counter ?></th>
                  <td class="align-middle"><?php echo $row[1]; ?></td>
                  <td class="align-middle"><?php echo $row[2]; ?></td>
                  <td class="align-middle"><?php echo $row[3]; ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>

          <h5 class="text-primary"><br>Μαθήματα</h5>
          <?php
          $query  = "SELECT c.id,c.title,c.professor,c.semester FROM course AS c WHERE c.title LIKE '%$searchvalue%'";
          $result = $connect->query($query);
          ?>
          <table class="table table-striped">
            <thead class="text-center">
              <tr>
                <th class="align-middle" scope="col">#</th>
                <th class="align-middle" scope="col">Μάθημα</th>
                <th class="align-middle" scope="col">Διδάσκων</th>
                <th class="align-middle" scope="col">Εξάμηνο</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
              $counter=0;
              while($row = $result->fetch_array())
              {$counter++;
                ?>
                <tr>
                  <th class="align-middle" scope="row"> <?php echo $counter; ?></th>
                  <td class="align-middle"><?php echo $row[1]; ?></td>
                  <td class="align-middle"><?php echo $row[2]; ?></td>
                  <td class="align-middle"><?php echo $row[3]; ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>

      <?php
      } ?>

    </div>


  </body>
</html>

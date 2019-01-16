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
          <a class="nav-link summaryPane" id="pills-summary-tab" data-toggle="pill" href="#pills-summary" role="tab" aria-controls="pills-summary" aria-selected="false">
            <i class="fas fa-list-ul"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link pointsPane" id="pills-point-tab" data-toggle="pill" href="#pills-point" role="tab" aria-controls="pills-point" aria-selected="false">
            <i class="fas fa-map-marked-alt"></i>
          </a>
        </li>

      </ul>
      <hr>

      <div class="tab-content" id="pills-tabContent">


        <!-- Select Uni,Shool,Dep pane -->
        <div class="tab-pane fade show active" id="pills-uni" role="tabpanel" aria-labelledby="pills-uni-tab">
          <h4> Επιλογή Τμήματος </h4>
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1" class="text-primary"><strong>Επιλέξτε Ίδρυμα</strong></label>
              <select id="uni" name="uni" class="form-control">
                <option selected>Ανωτάτη Σχολή Καλών Τεχνών</option>
                <option>Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης</option>
                <option>Γεωπονικό Πανεπιστήμιο Αθηνών</option>
                <option>Δημοκρίτειο Πανεπιστήμιο Θράκης</option>
                <option>Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
                <option>Εθνικό Μετσόβιο Πoλυτεχνείο</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2" class="text-primary"><strong>Επιλέξτε Σχολή</strong></label>
              <select id="school" name="school" class="form-control">
                <option selected>Επιστημών Αγωγής</option>
                <option>Επιστημών Υγείας</option>
                <option>Επιστήμης Φυσικής Αγωγής και Αθλητισμού</option>
                <option>Θεολογική</option>
                <option>Θετικών Επιστημών</option>
                <option>Νομική</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect2" class="text-primary"><strong>Επιλέξτε Τμήμα</strong></label>
              <select id="δεπ" name="dep" class="form-control">
                <option selected>Βιολογίας</option>
                <option>Γεωλογίας και Γεωπεριβάλλοντος</option>
                <option>Ιστορίας και Φιλοσοφίας της Επιστήμης</option>
                <option>Μαθηματικών</option>
                <option>Πληροφορικής και Τηλεπικοινωνιών</option>
                <option>Φυσικής</option>
              </select>
            </div>
          </form>
          <button class="btn btn-primary btn-md next float-right">Επόμενο</button>
        </div>

        <!-- Select Semester,Courses-Books pane -->
        <div class="tab-pane fade bookselection" id="pills-book" role="tabpanel" aria-labelledby="pills-booktab">
          <h4> Επιλογή Συγγραμμάτων </h4>
          <div id="accordion">


          <!-- Εξαμηνο 1 -->
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Εξάμηνο 1
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                <div class="card-body">

                    <div class="list-group list-group-root well">
                      <?php

                        // Firstly, we should fetch each course
                        $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
                        $query        = "SELECT course.id,course.title,course.professor FROM course WHERE course.semester=1";
                        $courseresult = mysqli_query($connect, $query);

                        while($row = mysqli_fetch_array($courseresult))
                        {
                          $courseid    = $row['id'];
                          $coursetitle = $row['title'];
                          $professor   = $row['professor'];
                      ?>
                          <a href="<?php echo "#course".$courseid; ?>" class="list-group-item" data-toggle="collapse">
                          <i class="fas fa-chevron-right"></i><?php echo $coursetitle." [".$professor."]"; ?>
                          </a>
                          <div class="list-group collapse" id="<?php echo "course".$courseid; ?>">
                          <?php
                            // Then, we should fetch every book related to that course
                            $query      = "SELECT book.id,book.title,author.name FROM book JOIN author ON book.author_id=author.id WHERE book.course_id='$courseid'";
                            $bookresult = mysqli_query($connect, $query);

                            while($row2 = mysqli_fetch_array($bookresult))
                            {
                              $bookid     = $row2[0];
                              $booktitle  = $row2[1];
                              $bookauthor = $row2[2];
                              ?>
                              <div class="custom-control custom-radio list-group-item">
                                <input type="radio" id="<?php echo "customRadio".$courseid.$bookid; ?>" name="<?php echo $courseid; ?>" class="custom-control-input">
                                <label class="custom-control-label" for="<?php echo "customRadio".$courseid.$bookid; ?>">
                                  <?php echo $booktitle." - ".$bookauthor; ?>
                                  <i id="<?php echo $bookid;?>" class="info fas fa-info-circle" data-toggle="modal" data-target="#infoModal"></i>
                                </label>
                              </div>
                              <?php
                            }
                              ?>
                          </div>
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Εξαμηνο 2 -->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Εξάμηνο 2
                  </button>
                </h5>
              </div>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                <div class="card-body">

                    <div class="list-group list-group-root well">
                      <?php

                        // Firstly, we should fetch each course
                        $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
                        $query        = "SELECT course.id,course.title,course.professor FROM course WHERE course.semester=2";
                        $courseresult = mysqli_query($connect, $query);

                        while($row = mysqli_fetch_array($courseresult))
                        {
                          $courseid    = $row['id'];
                          $coursetitle = $row['title'];
                          $professor   = $row['professor'];
                      ?>
                          <a href="<?php echo "#course".$courseid; ?>" class="list-group-item" data-toggle="collapse">
                          <i class="fas fa-chevron-right"></i><?php echo $coursetitle." [".$professor."]"; ?>
                          </a>
                          <div class="list-group collapse" id="<?php echo "course".$courseid; ?>">
                          <?php
                            // Then, we should fetch every book related to that course
                            $query      = "SELECT book.id,book.title,author.name FROM book JOIN author ON book.author_id=author.id WHERE book.course_id='$courseid'";
                            $bookresult = mysqli_query($connect, $query);

                            while($row2 = mysqli_fetch_array($bookresult))
                            {
                              $bookid     = $row2[0];
                              $booktitle  = $row2[1];
                              $bookauthor = $row2[2];
                              ?>
                              <div class="custom-control custom-radio list-group-item">
                                <input type="radio" id="<?php echo "customRadio".$courseid.$bookid; ?>" name="<?php echo $courseid; ?>" class="custom-control-input">
                                <label class="custom-control-label" for="<?php echo "customRadio".$courseid.$bookid; ?>">
                                  <?php echo $booktitle." - ".$bookauthor; ?>
                                  <i id="<?php echo $bookid;?>" class="info fas fa-info-circle" data-toggle="modal" data-target="#infoModal"></i>
                                </label>
                              </div>
                              <?php
                            }
                              ?>
                          </div>
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Εξαμηνο 3 -->
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Εξάμηνο 3
                  </button>
                </h5>
              </div>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                <div class="card-body">

                    <div class="list-group list-group-root well">
                      <?php

                        // Firstly, we should fetch each course
                        $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
                        $query        = "SELECT course.id,course.title,course.professor FROM course WHERE course.semester=3";
                        $courseresult = mysqli_query($connect, $query);

                        while($row = mysqli_fetch_array($courseresult))
                        {
                          $courseid    = $row['id'];
                          $coursetitle = $row['title'];
                          $professor   = $row['professor'];
                      ?>
                          <a href="<?php echo "#course".$courseid; ?>" class="list-group-item" data-toggle="collapse">
                          <i class="fas fa-chevron-right"></i><?php echo $coursetitle." [".$professor."]"; ?>
                          </a>
                          <div class="list-group collapse" id="<?php echo "course".$courseid; ?>">
                          <?php
                            // Then, we should fetch every book related to that course
                            $query      = "SELECT book.id,book.title,author.name FROM book JOIN author ON book.author_id=author.id WHERE book.course_id='$courseid'";
                            $bookresult = mysqli_query($connect, $query);

                            while($row2 = mysqli_fetch_array($bookresult))
                            {
                              $bookid     = $row2[0];
                              $booktitle  = $row2[1];
                              $bookauthor = $row2[2];
                              ?>
                              <div class="custom-control custom-radio list-group-item">
                                <input type="radio" id="<?php echo "customRadio".$courseid.$bookid; ?>" name="<?php echo $courseid; ?>" class="custom-control-input">
                                <label class="custom-control-label" for="<?php echo "customRadio".$courseid.$bookid; ?>">
                                  <?php echo $booktitle." - ".$bookauthor; ?>
                                  <i id="<?php echo $bookid;?>" class="info fas fa-info-circle" data-toggle="modal" data-target="#infoModal"></i>
                                </label>
                              </div>
                              <?php
                            }
                              ?>
                          </div>
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
            </div>

      </div>
          <button class="btn btn-primary btn-md next float-right">Επόμενο</button>
          <button class="btn btn-secondary btn-md previous float-right">Πίσω</button>
    </div>

        <!-- Statement Summary pane -->
        <div class="tab-pane fade summary" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab">
          <!-- Will be filled via Javascript AJAX and PHP -->
        </div>

        <!-- Select reception points pane -->
        <div class="tab-pane fade" id="pills-point" role="tabpanel" aria-labelledby="pills-point-tab">
          <!-- Will be filled via Javascript AJAX and PHP -->
        </div>
      </div>

    </div>


    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="../../index.php">eudoxus.gr</a>
    </div>

    <!-- Modal for showing book info -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="infoModalLabel">Πληροφορίες Βιβλίου</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="infoModalBody">
            <!-- Will be filled via Javascript AJAX and PHP -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Πίσω</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for showing point info -->
    <div class="modal fade" id="pointModal" tabindex="-1" role="dialog" aria-labelledby="pointModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="pointModalLabel">Πληροφορίες Σημείου Διανομής</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="pointModalBody">
            <!-- Will be filled via Javascript AJAX and PHP -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Πίσω</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal for showing point info -->
    <div class="modal fade" id="validationModal" tabindex="-1" role="dialog" aria-labelledby="validationModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="validationModalLabel">Μήνυμα Δήλωσης</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="validationModalBody">
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

      // Fetch book info and show them on the infoModal
      $(document).on('click','.info',function(){
        // id of the book we're gonna show
        var info_id = $(this).attr('id');
        $.ajax({
          url :"fetchBookInfo.php",
          type:"post",
          data:{info_id:info_id},
          success:function(data){
            // Construct the body of the modal and show it
            $("#infoModalBody").html(data);
            $("#infoModal").modal('show');
            }
        });
      });
      </script>

    <!-- Select all radio inputs and display the "summary" pane -->
    <script type="text/javascript">
      $(document).on('click','.summaryPane',function(){
        var book_ids = [];
        $(':input[type="radio"]:checked').each(function(){
          var label = $("label[for='" + $(this).attr('id') + "']");
          var book_id = label.children('.info').attr('id');
          book_ids.push(book_id);
        });
        if(book_ids.length > 0){
          $.ajax({
            url :"fetchSummary.php",
            type:"post",
            data:{book_ids:book_ids},
            success:function(data){
              $("#pills-summary").html(data);
            }
          });
        }
      });
    </script>

    <!-- Select all radio inputs and display the "points" pane -->
    <script type="text/javascript">
    $(document).on('click','.pointsPane',function(){
      var book_ids = [];
      $(':input[type="radio"]:checked').each(function(){
        var label = $("label[for='" + $(this).attr('id') + "']");
        var book_id = label.children('.info').attr('id');
        book_ids.push(book_id);
      });
      if(book_ids.length > 0){
        $.ajax({
          url :"fetchPoints.php",
          type:"post",
          data:{book_ids:book_ids},
          success:function(data){
            $("#pills-point").html(data);
          }
        });
      }
    });
    </script>

    <!-- Select all radio inputs and go to statement_validation.php -->
    <script type="text/javascript">
      $(document).on('click','.save',function(){
        var book_ids = [];
        $(':input[type="radio"]:checked').each(function(){
          var label = $("label[for='" + $(this).attr('id') + "']");
          var book_id = label.children('.info').attr('id');
          book_ids.push(book_id);
        });
        if(book_ids.length > 0){
          $.ajax({
            url :"statement_validation.php",
            type:"post",
            data:{book_ids:book_ids},
            success:function(data){
              // Construct the body of the modal and show it
              $("#validationModalBody").html(data);
              $("#validationModal").modal('show');
            }
          });
        }
      });
    </script>

  </body>

</html>

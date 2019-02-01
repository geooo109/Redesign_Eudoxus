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

  if(isset($_POST['del_id'])){

    $del_id = $connect->real_escape_string($_POST['del_id']);
    $query   = "SELECT * from book WHERE id = '$del_id'";
    $result  = $connect->query($query);
    while ($data = $result->fetch_array()) {
      $title             = $data['title'];

      $prev_author_id    = $data['author_id'];
      $temp              = $connect->query("SELECT author.name FROM author WHERE author.id='$prev_author_id'");
      $author            = $temp->fetch_array()['name'];

      $prev_publisher_id = $data['publisher_id'];
      $temp              = $connect->query("SELECT publisher.name FROM publisher WHERE publisher.id='$prev_publisher_id'");
      $publisher         = $temp->fetch_array()['name'];

      $prev_course_id    = $data['course_id'];
      $temp              = $connect->query("SELECT course.title FROM course WHERE course.id='$prev_course_id'");
      $course            = $temp->fetch_array()['title'];

      $temp              = $connect->query("SELECT course.professor  FROM course WHERE course.id='$prev_course_id'");
      $professor         = $temp->fetch_array()['professor'];

      $temp              = $connect->query("SELECT course.semester FROM course WHERE course.id='$prev_course_id'");
      $semester          = $temp->fetch_array()['semester'];

      $eudoxus_code      = $data['eudoxus_code'];
    }
  }
 ?>


 <input hidden name="del_id" id="del_id" value="<?php echo $del_id ?>">


 <div class="form-group">
   <label><strong>Τίτλος</strong>: <?php echo $title; ?></label>
 </div>


 <div class="form-group">
   <label><strong>Συγγραφέας</strong>: <?php echo $author; ?></label>
 </div>

 <div class="form-group">
   <label><strong>Εκδόσεις</strong>: <?php echo $publisher; ?></label>
 </div>

 <div class="form-group">
   <label><strong>Μάθημα</strong>: <?php echo $course; ?></label>
 </div>

 <div class="form-group">
   <label><strong>Καθηγητής</strong>: <?php echo $professor; ?></label>
 </div>

 <div class="form-group">
   <label><strong>Εξάμηνο</strong>: <?php echo $semester; ?></label>
 </div>

 <div class="form-group">
   <label><strong>Κωδικός Ευδόξου</strong>: <?php echo $eudoxus_code; ?></label>
 </div>

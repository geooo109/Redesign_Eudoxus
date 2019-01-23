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

  if(isset($_POST['edit_id'])){

    $edit_id = $connect->real_escape_string($_POST['edit_id']);
    // Check connection
    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    }

    $query   = "SELECT * from book WHERE id = '$edit_id'";
    $result  = $connect->query($query);
    while ($data = $result->fetch_array()) {
      $id                = $data['id'];
      $title             = $data['title'];

      $prev_author_id    = $data['author_id']; // Id of the author before the update
      $temp              = $connect->query("SELECT author.name FROM author WHERE author.id='$prev_author_id'");
      $author            = $temp->fetch_array()['name'];

      $prev_publisher_id = $data['publisher_id']; // Id of the publisher before the update
      $temp              = $connect->query("SELECT publisher.name FROM publisher WHERE publisher.id='$prev_publisher_id'");
      $publisher         = $temp->fetch_array()['name'];

      $prev_course_id    = $data['course_id']; // Id of the course before the update
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

 <div class="form-group">
   <label hidden >ID </label>
   <input hidden type="text" class="form-control" name="edit_id" id="edit_id" value="<?php echo $id; ?>" required>
 </div>

 <div class="form-group">
   <label>Τίτλος </label>
   <input type="text" class="form-control" name="title" id="title" value="<?php echo $title; ?>" required>
 </div>

 <div class="form-group">
   <label>Συγγραφέας</label>
   <input type="text" class="form-control" name="author" id="author" value="<?php echo $author; ?>" required>
 </div>

 <div class="form-group">
   <label>Εκδόσεις</label>
   <input type="text" class="form-control" name="publisher" id="publisher" value="<?php echo $publisher; ?>" required>
 </div>

 <div class="form-group">
   <label>Μάθημα</label>
   <input type="text" class="form-control" name="course" id="course" value="<?php echo $course; ?>" required>
 </div>

 <div class="form-group">
   <label>Καθηγητής</label>
   <input type="text" class="form-control" name="professor" id="professor" value="<?php echo $professor; ?>" required>
 </div>

 <div class="form-group">
   <label>Εξάμηνο</label>
   <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $semester; ?>" required>
 </div>

 <div class="form-group">
   <label>Κωδικός Ευδόξου</label>
   <input type="text" class="form-control" name="eudoxus_code" id="eudoxus_code" value="<?php echo $eudoxus_code; ?>" required>
 </div>

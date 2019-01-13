<?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  if(isset($_POST['edit_id'])){

    $edit_id = mysqli_real_escape_string($connect, $_POST['edit_id']);
    // Check connection
    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    }

    $query   = "SELECT * from book WHERE id = '$edit_id'";
    $result  = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_array($result)) {
      $id                = $data['id'];
      $title             = $data['title'];

      $prev_author_id    = $data['author_id']; // Id of the author before the update
      $temp              = mysqli_query($connect,"SELECT author.name FROM author WHERE author.id='$prev_author_id'");
      $author            = mysqli_fetch_array($temp)['name'];

      $prev_publisher_id = $data['publisher_id']; // Id of the publisher before the update
      $temp              = mysqli_query($connect,"SELECT publisher.name FROM publisher WHERE publisher.id='$prev_publisher_id'");
      $publisher         = mysqli_fetch_array($temp)['name'];

      $course            = $data['course'];
      $professor         = $data['professor'];
      $semester          = $data['semester'];
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

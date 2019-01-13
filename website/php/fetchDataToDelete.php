<?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  if(isset($_POST['del_id'])){

    $del_id = mysqli_real_escape_string($connect, $_POST['del_id']);
    $query   = "SELECT * from book WHERE id = '$del_id'";
    $result  = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_array($result)) {
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

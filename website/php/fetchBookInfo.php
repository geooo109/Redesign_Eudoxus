<?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  if(isset($_POST['info_id'])){

    $info_id = mysqli_real_escape_string($connect, $_POST['info_id']);
    $query   = "SELECT * from book WHERE id = '$info_id'";
    $result  = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_array($result)) {
      $title             = $data['title'];

      $prev_author_id    = $data['author_id'];
      $temp              = mysqli_query($connect,"SELECT author.name FROM author WHERE author.id='$prev_author_id'");
      $author            = mysqli_fetch_array($temp)['name'];

      $prev_publisher_id = $data['publisher_id'];
      $temp              = mysqli_query($connect,"SELECT publisher.name FROM publisher WHERE publisher.id='$prev_publisher_id'");
      $publisher         = mysqli_fetch_array($temp)['name'];

      $prev_course_id    = $data['course_id'];
      $temp              = mysqli_query($connect,"SELECT course.title FROM course WHERE course.id='$prev_course_id'");
      $course            = mysqli_fetch_array($temp)['title'];

      $temp              = mysqli_query($connect,"SELECT course.professor  FROM course WHERE course.id='$prev_course_id'");
      $professor         = mysqli_fetch_array($temp)['professor'];

      $temp              = mysqli_query($connect,"SELECT course.semester FROM course WHERE course.id='$prev_course_id'");
      $semester          = mysqli_fetch_array($temp)['semester'];

      $eudoxus_code      = $data['eudoxus_code'];
    }
  }
 ?>


 <input hidden name="info_id" id="info_id" value="<?php echo $info_id ?>">


   <label><strong>Τίτλος</strong>: <?php echo $title; ?> </label>
   <br>

   <label><strong>Συγγραφέας</strong>: <?php echo $author; ?> </label>
   <br>

   <label><strong>Εκδόσεις</strong>: <?php echo $publisher; ?>  </label>
   <br>

   <label><strong>Μάθημα</strong>: <?php echo $course; ?>   </label>
   <br>

   <label><strong>Καθηγητής</strong>: <?php echo $professor; ?>  </label>
   <br>

   <label><strong>Εξάμηνο</strong>: <?php echo $semester; ?> </label>
   <br>

   <label><strong>Κωδικός Ευδόξου</strong>: <?php echo $eudoxus_code; ?></label>

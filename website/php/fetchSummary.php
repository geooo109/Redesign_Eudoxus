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

  if(isset($_REQUEST['book_ids'])){

    $books_ids = $_REQUEST['book_ids'];
?>
    <h4> Σύνοψη Επιλογών </h4>
<?php
    foreach($books_ids as $id) {

      $query   = "SELECT * from book WHERE id = '$id'";
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
?>

      <div class="card summarycard">
      <div class="card-header text-primary">
      <strong><?php echo $course ." [".$professor."]"." [Εξάμηνο ".$semester."]" ; ?></strong>
      </div>
      <div class="card-body">
      <p class="card-text">
        <ul class="list-group">
          <li class="list-group-item"><strong>Τίτλος</strong>:           <?php echo $title; ?></li>
          <li class="list-group-item"><strong>Συγγραφέας</strong>:       <?php echo $author; ?></li>
          <li class="list-group-item"><strong>Εκδόσεις</strong>:         <?php echo $publisher; ?></li>
          <li class="list-group-item"><strong>Κωδικός Ευδόξου</strong>:  <?php echo $eudoxus_code; ?></li>
        </ul>
      </p>
      </div>
      </div>
<?php
    }
?>
<button class="btn btn-primary btn-md next float-right">Επόμενο</button>
<button class="btn btn-secondary btn-md previous float-right">Πίσω</button>

  <?php
  }
?>

<!-- It's also needed here,not just in statement.php -->
<script type="text/javascript">
  $('.next').click(function () {
      $('.nav-pills > .nav-item > .active').parent().next('li').find('a').trigger('click');
  });

  $('.previous').click(function () {
      $('.nav-pills > .nav-item > .active').parent().prev('li').find('a').trigger('click');
  });
</script>

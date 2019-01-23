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
    <h4> Σημεία Διανομής </h4>
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

        $temp              = $connect->query("SELECT course.professor FROM course WHERE course.id='$prev_course_id'");
        $professor         = $temp->fetch_array()['professor'];

        $temp              = $connect->query("SELECT course.semester FROM course WHERE course.id='$prev_course_id'");
        $semester          = $temp->fetch_array()['semester'];

        $eudoxus_code      = $data['eudoxus_code'];

        $pointresult       = $connect->query("SELECT p.id,p.name,p.zipcode,p.state,p.city,p.street,p.num,p.email,p.phone FROM point AS p JOIN book_point ON p.id=book_point.point_id WHERE book_point.book_id='$id'");
      }
?>

      <div class="card summarycard">
      <div class="card-header text-primary">
      <strong><?php echo $title ." [".$author."]"." [".$eudoxus_code."]" ; ?></strong>
      </div>
      <div class="card-body">
      <p class="card-text">
        <ul class="list-group">
          <?php
            while ($p = mysqli_fetch_array($pointresult)) {
              ?>
              <li class="list-group-item"><strong><?php echo $p[1]; ?></strong>
                <i id="<?php echo $p[0];?>" class="pointinfo fas fa-info-circle" data-toggle="modal" data-target="#pointModal"></i>
              </li>
              <?php
            }
               ?>
        </ul>
      </p>
      </div>
      </div>
<?php
    }
?>
<button class="btn save btn-success btn-md float-right">Ολοκλήρωση</button>
<button class="btn btn-secondary btn-md previous float-right">Πίσω</button>

  <?php
  }
?>

<!-- It's also need here,not just in statement.php -->
<script type="text/javascript">
  $('.next').click(function () {
      $('.nav-pills > .nav-item > .active').parent().next('li').find('a').trigger('click');
  });

  $('.previous').click(function () {
      $('.nav-pills > .nav-item > .active').parent().prev('li').find('a').trigger('click');
  });
</script>

<!-- Fetch book info -->
<script type="text/javascript">

  // Fetch book info and show them on the infoModal
  $(document).on('click','.pointinfo',function(){
    // id of the book we're gonna show
    var info_id = $(this).attr('id');
    $.ajax({
      url :"fetchPointInfo.php",
      type:"post",
      data:{info_id:info_id},
      success:function(data){
        // Construct the body of the modal and show it
        $("#pointModalBody").html(data);
        $("#pointModalModal").modal('show');
        }
    });
  });
</script>

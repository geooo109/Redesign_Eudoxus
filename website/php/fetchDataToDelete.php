<?php

  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");

  if(isset($_POST['del_id'])){

    $del_id = mysqli_real_escape_string($connect, $_POST['del_id']);
    $query   = "SELECT * from book WHERE id = '$del_id'";
    $result  = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_array($result)) {
      $id           = $data['id'];
      $title        = $data['title'];
      $author       = $data['author'];
      $publisher    = $data['publisher'];
      $course       = $data['course'];
      $professor    = $data['professor'];
      $semester     = $data['semester'];
      $eudoxus_code = $data['eudoxus_code'];
    }
  }
 ?>


<input type="hidden" name="del_id" value="<?php echo $id ?> ">

 <div class="form-group">
   <label><strong>Τίτλος</strong>: <?php echo $title ?> </label>
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

<?php

  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");

  if(isset($_POST['edit_id'])){

    $edit_id = mysqli_real_escape_string($connect, $_POST['edit_id']);
    $query   = "SELECT * from book WHERE id = '$edit_id'";
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

 <div class="form-group">
   <label hidden >ID </label>
   <input hidden type="text" class="form-control" name="edit_id" id="edit_id" value="<?php echo $id ?>">
 </div>

 <div class="form-group">
   <label>Τίτλος </label>
   <input type="text" class="form-control" name="title" id="title" value="<?php echo $title ?>">
 </div>

 <div class="form-group">
   <label>Συγγραφέας</label>
   <input type="text" class="form-control" name="author" id="author" value="<?php echo $author; ?>">
 </div>

 <div class="form-group">
   <label>Εκδόσεις</label>
   <input type="text" class="form-control" name="publisher" id="publisher" value="<?php echo $publisher; ?>">
 </div>

 <div class="form-group">
   <label>Μάθημα</label>
   <input type="text" class="form-control" name="course" id="course" value="<?php echo $course; ?>">
 </div>

 <div class="form-group">
   <label>Καθηγητής</label>
   <input type="text" class="form-control" name="professor" id="professor" value="<?php echo $professor; ?>">
 </div>

 <div class="form-group">
   <label>Εξάμηνο</label>
   <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $semester; ?>">
 </div>

 <div class="form-group">
   <label>Κωδικός Ευδόξου</label>
   <input type="text" class="form-control" name="eudoxus_code" id="eudoxus_code" value="<?php echo $eudoxus_code; ?>">
 </div>

<?php

$connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");

 if(!empty($_POST)){

   $title        = mysqli_real_escape_string($connect, $_POST['title']);
   $author       = mysqli_real_escape_string($connect, $_POST['author']);
   $publisher    = mysqli_real_escape_string($connect, $_POST['publisher']);
   $course       = mysqli_real_escape_string($connect, $_POST['course']);
   $professor    = mysqli_real_escape_string($connect, $_POST['professor']);
   $semester     = mysqli_real_escape_string($connect, $_POST['semester']);
   $eudoxus_code = mysqli_real_escape_string($connect, $_POST['eudoxus_code']);

   $query = "INSERT INTO book(title,author,publisher,course,professor,semester,eudoxus_code)
   VALUES('$title' , '$author' , '$publisher' , '$course' , '$professor' , '$semester' , '$eudoxus_code');";

   $save_data = mysqli_query($connect, $query);
 }

 ?>

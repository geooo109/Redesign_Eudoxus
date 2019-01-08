<?php

  $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 if(!empty($_POST)){

   $title        = mysqli_real_escape_string($connect, $_POST['title']);
   $author       = mysqli_real_escape_string($connect, $_POST['author']);
   $publisher    = mysqli_real_escape_string($connect, $_POST['publisher']);
   $course       = mysqli_real_escape_string($connect, $_POST['course']);
   $professor    = mysqli_real_escape_string($connect, $_POST['professor']);
   $semester     = mysqli_real_escape_string($connect, $_POST['semester']);
   $eudoxus_code = mysqli_real_escape_string($connect, $_POST['eudoxus_code']);

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

   $query1 = "INSERT INTO book(title,author,publisher,course,professor,semester,eudoxus_code)
   VALUES('$title' , '$author' , '$publisher' , '$course' , '$professor' , '$semester' , '$eudoxus_code');";

   $save_data = mysqli_query($connect, $query1) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
 }

 ?>

<?php
  session_start();

  $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $edit_id      = mysqli_real_escape_string($connect, $_POST["edit_id"]);
  $title        = mysqli_real_escape_string($connect, $_POST["title"]);
  $author       = mysqli_real_escape_string($connect, $_POST["author"]);
  $publisher    = mysqli_real_escape_string($connect, $_POST["publisher"]);
  $course       = mysqli_real_escape_string($connect, $_POST["course"]);
  $professor    = mysqli_real_escape_string($connect, $_POST["professor"]);
  $semester     = mysqli_real_escape_string($connect, $_POST["semester"]);
  $eudoxus_code = mysqli_real_escape_string($connect, $_POST["eudoxus_code"]);

  $query   = "UPDATE book
  SET title = '$title',  author = '$author', publisher = '$publisher', course = '$course', professor = '$professor', semester = '$semester', eudoxus_code = '$eudoxus_code'
  WHERE id='$edit_id'";
  $result  = mysqli_query($connect, $query);
 ?>

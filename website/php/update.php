<?php
  session_start();

  $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $edit_id      = mysqli_real_escape_string($connect, $_POST["edit_id"]);
  $title        = mysqli_real_escape_string($connect, $_POST["title"]);
  $author       = mysqli_real_escape_string($connect, $_POST["author"]); // The author name given by the user
  $publisher    = mysqli_real_escape_string($connect, $_POST["publisher"]); // The publisher name given by the user
  $course       = mysqli_real_escape_string($connect, $_POST["course"]);
  $professor    = mysqli_real_escape_string($connect, $_POST["professor"]);
  $semester     = mysqli_real_escape_string($connect, $_POST["semester"]);
  $eudoxus_code = mysqli_real_escape_string($connect, $_POST["eudoxus_code"]);

  $result = mysqli_query($connect,"SELECT author.id FROM author WHERE author.name='$author'");
  if(mysqli_num_rows($result)==1){
    $authorid = mysqli_fetch_array($result)['id'];
  }
  else {
    // In case the given author does not exist in our DB , we need to add him/her first
    mysqli_query($connect,"INSERT INTO author(name) VALUES('$author')");
    // Retrieve his id
    $authorid = mysqli_fetch_array(mysqli_query($connect,"SELECT author.id FROM author WHERE author.name='$author'"))['id'];
  }


  $result = mysqli_query($connect,"SELECT publisher.id FROM publisher WHERE publisher.name='$publisher'");
  if(mysqli_num_rows($result)==1){
    $publisherid = mysqli_fetch_array($result)['id'];
  }
  else {
    // In case the given publisher does not exist in our DB , we need to add him/her first
    mysqli_query($connect,"INSERT INTO publisher(name) VALUES('$publisher')");
    // Retrieve his id
    $publisherid = mysqli_fetch_array(mysqli_query($connect,"SELECT publisher.id FROM publisher WHERE publisher.name='$publisher'"))['id'];
  }

  $query   = "UPDATE book
  SET title = '$title',  author_id = '$authorid', publisher_id = '$publisherid', course = '$course', professor = '$professor', semester = '$semester', eudoxus_code = '$eudoxus_code'
  WHERE id='$edit_id'";
  $result  = mysqli_query($connect, $query);

 ?>

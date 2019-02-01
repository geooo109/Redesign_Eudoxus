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

  if(isset($_POST['edit_id'])){

    $edit_id      = $connect->real_escape_string($_POST['edit_id']);
    $title        = $connect->real_escape_string($_POST['title']);
    $author       = $connect->real_escape_string($_POST['author']); // The author name given by the user
    $publisher    = $connect->real_escape_string($_POST['publisher']); // The publisher name given by the user
    $course       = $connect->real_escape_string($_POST['course']); // The course name given by the user
    $professor    = $connect->real_escape_string($_POST['professor']);
    $semester     = $connect->real_escape_string($_POST['semester']);
    $eudoxus_code = $connect->real_escape_string($_POST['eudoxus_code']);

    $result = $connect->query("SELECT author.id FROM author WHERE author.name='$author'");

    if($result->num_rows==1){
      $authorid = $result->fetch_array()['id'];
    }
    else {
      // In case the given author does not exist in our DB , we need to add him/her first
      $connect->query("INSERT INTO author(name) VALUES('$author')");
      // Retrieve his id
      $authorid = mysqli_fetch_array($connect->query("SELECT author.id FROM author WHERE author.name='$author'"))['id'];
    }


    $result = $connect->query("SELECT publisher.id FROM publisher WHERE publisher.name='$publisher'");
    if($result->num_rows==1){
      $publisherid = $result->fetch_array()['id'];
    }
    else {
      // In case the given publisher does not exist in our DB , we need to add him/her first
      $connect->query("INSERT INTO publisher(name) VALUES('$publisher')");
      // Retrieve his id
      $publisherid = mysqli_fetch_array($connect->query("SELECT publisher.id FROM publisher WHERE publisher.name='$publisher'"))['id'];
    }

    $result = $connect->query("SELECT course.id FROM course WHERE course.title='$course'");
    if($result->num_rows==1){
      $courseid = $result->fetch_array()['id'];
    }
    else {
      // In case the given course does not exist in our DB , we need to add it first
      $connect->query("INSERT INTO course(title,semester,professor) VALUES('$course','$semester','$professor')");
      // Retrieve its id
      $courseid = mysqli_fetch_array($connect->query("SELECT course.id FROM course WHERE course.title='$course'"))['id'];
    }


    $query   = "UPDATE book
    SET title = '$title',  author_id = '$authorid', publisher_id = '$publisherid', course_id = '$courseid', eudoxus_code = '$eudoxus_code'
    WHERE id='$edit_id'";
    $result  = $connect->query($query);
  }
 ?>

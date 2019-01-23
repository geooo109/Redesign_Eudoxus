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

 if(!empty($_POST)){

   $title        = $connect->real_escape_string($_POST['title']);
   $author       = $connect->real_escape_string($_POST['author']);
   $publisher    = $connect->real_escape_string($_POST['publisher']);
   $course       = $connect->real_escape_string($_POST['course']);
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


   // Check connection
   if ($connect->connect_error) {
     die("Connection failed: " . $connect->connect_error);
   }

   $query1 = "INSERT INTO book(title,author_id,publisher_id,course_id,eudoxus_code)
   VALUES('$title' , '$authorid' , '$publisherid' , '$courseid' ,  '$eudoxus_code');";

   $save_data = $connect->query($query1);
 }

 ?>

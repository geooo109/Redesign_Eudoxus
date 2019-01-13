<?php

  $connect      = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

 if(!empty($_POST)){

   $title        = mysqli_real_escape_string($connect, $_POST['title']);
   $author       = mysqli_real_escape_string($connect, $_POST['author']);
   $publisher    = mysqli_real_escape_string($connect, $_POST['publisher']);
   $course       = mysqli_real_escape_string($connect, $_POST['course']);
   $professor    = mysqli_real_escape_string($connect, $_POST['professor']);
   $semester     = mysqli_real_escape_string($connect, $_POST['semester']);
   $eudoxus_code = mysqli_real_escape_string($connect, $_POST['eudoxus_code']);

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


   // Check connection
   if ($connect->connect_error) {
     die("Connection failed: " . $connect->connect_error);
   }

   $query1 = "INSERT INTO book(title,author_id,publisher_id,course,professor,semester,eudoxus_code)
   VALUES('$title' , '$authorid' , '$publisherid' , '$course' , '$professor' , '$semester' , '$eudoxus_code');";

   $save_data = mysqli_query($connect, $query1);
 }

 ?>

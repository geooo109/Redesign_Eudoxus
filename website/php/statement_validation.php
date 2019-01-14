<?php

  session_start();
  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  if ((isset($_SESSION['user_id'])) && ($_SESSION['user_type']==0)) {
    $userid  = $_SESSION['user_id'];

    if(isset($_REQUEST['book_ids'])){
      echo "LOL";
      $books_ids = $_REQUEST['book_ids'];
      foreach($books_ids as $id) {
        $date  = date("m.d.y");
        $query = "INSERT INTO statement(user_id,book_id,date) VALUES('$userid','$id','$date')";
      }
      echo "Επιτυχής Δήλωση Μαθημάτων !!!";
    }
  }
  else {
    header('location:./sign_in.php');
  }
?>

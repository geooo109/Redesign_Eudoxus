<?php
  session_start();

  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['del_id'])){
    $del_id = mysqli_real_escape_string($connect, $_POST['del_id']);
    $query  = "DELETE FROM book WHERE id = '$del_id'";
    $result = mysqli_query($connect, $query) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
  }
 ?>

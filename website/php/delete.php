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

  // Delete the given id from 'book' table
  if(isset($_POST['del_id'])){
    $del_id = $connect->real_escape_string($_POST['del_id']);
    $query  = "DELETE FROM book WHERE id=$del_id";
    $result = $connect->query($query);
  }
 ?>

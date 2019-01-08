<?php

  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");

  if(isset($_POST['del_id'])){
    $del_id = mysqli_real_escape_string($connect, $_POST['del_id']);
    $query  = "DELETE FROM book WHERE id = '$del_id'";
    $result = mysqli_query($connect, $query);
  }
 ?>

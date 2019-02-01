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

  if(isset($_POST['info_id'])){

    $info_id = $connect->real_escape_string($_POST['info_id']);
    $query   = "SELECT * from point WHERE id = '$info_id'";
    $result  = $connect->query($query);
    while ($data = $result->fetch_array()) {
      $name    = $data['name'];
      $zipcode = $data['zipcode'];
      $state   = $data['state'];
      $city    = $data['city'];
      $street  = $data['street'];
      $num     = $data['num'];
      $email   = $data['email'];
      $phone   = $data['phone'];
    }
  }
 ?>


 <input hidden name="info_id" id="info_id" value="<?php echo $info_id ?>">


   <label><strong>Όνομα</strong>: <?php echo $name; ?> </label>
   <br>

   <label><strong>Νομός</strong>: <?php echo $state; ?> </label>
   <br>

   <label><strong>Περιοχή</strong>: <?php echo $city; ?>  </label>
   <br>

   <label><strong>Ταχ.Κώδικας</strong>: <?php echo $zipcode; ?>  </label>
   <br>


   <label><strong>Διεύθυνση</strong>: <?php echo $street." ".$num; ?>   </label>
   <br>

   <label><strong>Τηλέφωνο</strong>: <?php echo $phone; ?>  </label>
   <br>

   <label><strong>Email</strong>: <?php echo $email; ?> </label>

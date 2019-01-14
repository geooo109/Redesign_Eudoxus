<?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "root", "sdi1400109");
  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  if(isset($_POST['info_id'])){

    $info_id = mysqli_real_escape_string($connect, $_POST['info_id']);
    $query   = "SELECT * from point WHERE id = '$info_id'";
    $result  = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_array($result)) {
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

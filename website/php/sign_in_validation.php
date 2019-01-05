
<?php
// Always start this first
session_start();
require_once '../../con_db.php';
if (empty($_POST) == 0) {
  if (isset( $_POST['email'] ) && isset( $_POST['pass'] ) ) {
    $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
    $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();

    echo $user->password;
    echo '<------vs------>';
    echo $_POST['pass'];

    echo '==========>';
    // Verify user password and set $_SESSION
    //if ( password_verify( $_POST['pass'], $user->password ) ) {
    if ($_POST['pass'] == $user->password ) {
      $_SESSION['user_id'] = $user->id;
      $msg = 'Logged in Successful';
      header('location:../../index.php');
    }
    else {
      $msg = 'Logged in Failed';
    }
  }
  else {
    $msg = 'Logged in Failed';
  }
  echo $msg;
  die();
}
?>

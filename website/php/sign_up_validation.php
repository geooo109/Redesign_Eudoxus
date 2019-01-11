<?php
/* We could minimzie the code (for ifs) but i want to make it simpler so i didnt minimze the ifs for student and secr */


session_start();
require_once '../../con_db.php';

$_SESSION["msg"] = "Αρχικό";

// LEAVE IT FOR DEBUG

/*
echo $_POST["username"];
echo "<br />\n";
echo $_POST["password"];
echo "<br />\n";
echo $_POST["re_password"];
echo "<br />\n";
echo $_POST["email"];
echo "<br />\n";
echo $_POST["name"];
echo "<br />\n";
echo $_POST["surname"];
echo "<br />\n";
echo $_POST["uni"];
echo "<br />\n";
echo $_POST["school"];
echo "<br />\n";
echo $_POST["dep"];
echo "<br />\n";
//echo $_POST["register_num"];
echo "<br />\n";
echo "<br />\n";
echo "<br />\n";
*/

//check if we have student
if (!empty($_POST)) {
    // student <================================================================================================================================
    if ($_POST["user_type"] == 0) {
      // create con + error check for error
      $connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
      mysqli_set_charset($connect,'utf8');

      if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }
      //---check username
      if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $query   = "SELECT username from user WHERE username = '$username'";
        $result  = mysqli_query($connect, $query);

        // error check
        if (!$result) {
          ($connect->error);
        }
        // means we found a username in our db
        if (mysqli_num_rows($result)) {
          $_SESSION["msg"] = "Υπάρχει ήδη αυτό το Όνομα Χρήστη";
          //header('location:./sign_up.php');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }
        //---check email
        if (isset($_POST["email"])) {
          $email = $_POST["email"];
          $query   = "SELECT email from user WHERE email = '$email'";
          $result  = mysqli_query($connect, $query);
          // error check
          if (!$result) {
            ($connect->error);
          }
          // means we found a username in our db
          if (mysqli_num_rows($result)) {
            $_SESSION["msg"] = "Υπάρχει ήδη αυτή η Ηλεκτρονική Διεύθυνση";
            //header('location:./sign_up.php');
            echo "<br>".$_SESSION["msg"]."<br/>";
            die();
          }

          //---register num
          if (isset($_POST["register_num"])) {
            $register_num = $_POST["register_num"];
            $query   = "SELECT register_num from user WHERE register_num = '$register_num'";
            $result  = mysqli_query($connect, $query);
            // error check
            if (!$result) {
              ($connect->error);
            }
            // means we found a username in our db
            if (mysqli_num_rows($result)) {
              $_SESSION["msg"] = "Υπάρχει ήδη αυτός ο Αριθμός Μητρώου";
              //header('location:./sign_up.php');
              echo "<br>".$_SESSION["msg"]."<br/>";
              die();
            }
            if (isset($_POST["password"]) && isset($_POST["re_password"])) {
              if ($_POST["password"] == $_POST["re_password"]) {
                $username = mysqli_real_escape_string($connect,$_POST["username"]);
                $password = mysqli_real_escape_string($connect,$_POST["password"]);
                $email    = mysqli_real_escape_string($connect,$_POST["email"]);
                $name     = mysqli_real_escape_string($connect,$_POST["name"]);
                $surname  = mysqli_real_escape_string($connect,$_POST["surname"]);
                $uni      = mysqli_real_escape_string($connect,$_POST["uni"]);
                $school   = mysqli_real_escape_string($connect,$_POST["school"]);
                $dep      = mysqli_real_escape_string($connect,$_POST["dep"]);
                $register_num = mysqli_real_escape_string($connect,$_POST["register_num"]);
                //rememebr 0 -> stud , 1 -> secr
                $user_type = 0;

                $queryf ="INSERT INTO user(username,password,email,name,surname,uni,school,dep,register_num,user_type)
                VALUES('$username','$password','$email','$name','$surname','$uni','$school','$dep','$resgiser_num','$user_type')";

                if ($connect->query($queryf) === TRUE) {
                    $_SESSION["msg"] = "Η Εγγραφή σας έγινε με επιτυχία";
                }
                else {
                    echo "Error: " . $queryf . "<br>" . $connect->error;
                    $_SESSION["msg"] = "<br> Εισαγωγή απέτυχε <br/>";
                }
              }
              else {
                $_SESSION["msg"] = "Οι κωδικοί που δώσατε δεν ταιριάζουν";
                //header('location:./sign_up.php');
                echo "<br>".$_SESSION["msg"]."<br/>";
                die();
              }
            }
          }
          else {
            $_SESSION["msg"] = "Δεν δόθηκε για είσοδο ο Αριθμός Μητρώου";
            //header('location:./sign_up.php');
            echo "<br>".$_SESSION["msg"]."<br/>";
            die();
          }
        }
        else {
          $_SESSION["msg"] = "Δεν δόθηκε για είσοδο η Ηλεκτρονική Διεύθυνση";
          //header('location:./sign_up.php');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }
      }
      // error check fro usernmae
      else {
        $_SESSION["msg"] = "Δεν δόθηκε για είσοδο το Όνομα Χρήστη";
      //header('location:./sign_up.php');
        echo "<br>".$_SESSION["msg"]."<br/>";
        die();
      }
    }
    //================================================================================================================================

    // secretary======================================================================================================================
    else if ($_POST["user_type"] == 1) {
      // create con + error check for error
      $connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
      mysqli_set_charset($connect,'utf8');

      if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }
      //---check username
      if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $query   = "SELECT username from user WHERE username = '$username'";
        $result  = mysqli_query($connect, $query);

        // error check
        if (!$result) {
          ($connect->error);
        }
        // means we found a username in our db
        if (mysqli_num_rows($result)) {
          $_SESSION["msg"] = "Υπάρχει ήδη αυτό το Όνομα Χρήστη";
          //header('location:./sign_up.php');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }
        //---check email
        if (isset($_POST["email"])) {
          $email = $_POST["email"];
          $query   = "SELECT email from user WHERE email = '$email'";
          $result  = mysqli_query($connect, $query);
          // error check
          if (!$result) {
            ($connect->error);
          }
          // means we found a username in our db
          if (mysqli_num_rows($result)) {
            $_SESSION["msg"] = "Υπάρχει ήδη αυτή η Ηλεκτρονική Διεύθυνση";
            //header('location:./sign_up.php');
            echo "<br>".$_SESSION["msg"]."<br/>";
            die();
          }

          if (isset($_POST["password"]) && isset($_POST["re_password"])) {
            if ($_POST["password"] == $_POST["re_password"]) {
              $username = mysqli_real_escape_string($connect,$_POST["username"]);
              $password = mysqli_real_escape_string($connect,$_POST["password"]);
              $email    = mysqli_real_escape_string($connect,$_POST["email"]);
              $name     = mysqli_real_escape_string($connect,$_POST["name"]);
              $surname  = mysqli_real_escape_string($connect,$_POST["surname"]);
              $uni      = mysqli_real_escape_string($connect,$_POST["uni"]);
              $school   = mysqli_real_escape_string($connect,$_POST["school"]);
              $dep      = mysqli_real_escape_string($connect,$_POST["dep"]);
              $semester_num = mysqli_real_escape_string($connect,$_POST["semester_num"]);
              $state = mysqli_real_escape_string($connect,$_POST["state"]);
              $city = mysqli_real_escape_string($connect,$_POST["city"]);
              $postal_address = mysqli_real_escape_string($connect,$_POST["postal_address"]);
              //rememebr 0 -> stud , 1 -> secr
              $user_type = 1;

              $queryff ="INSERT INTO user (username,password,email,name,surname,uni,school,dep,postal_address,state,city,user_type)
              VALUES('$username','$password','$email','$name','$surname','$uni','$school','$dep','$postal_address','$state','$city','$user_type')";

              if ($connect->query($queryff) === TRUE) {
                  $_SESSION["msg"] = "Η Εγγραφή σας έγινε με επιτυχία";
                  echo "<br>".$_SESSION["msg"]."<br/>";
                  die();
              }
              else {
                  echo "Error: " . $queryff . "<br>" . $connect->error;
                  $_SESSION["msg"] = "<br> Εισαγωγή απέτυχε <br/>";
                  echo "<br>".$_SESSION["msg"]."<br/>";
                  die();
              }
            }
            else {
              $_SESSION["msg"] = "Οι κωδικοί που δώσατε δεν ταιριάζουν";
              //header('location:./sign_up.php');
              echo "<br>".$_SESSION["msg"]."<br/>";
              die();
            }
          }
        }
        else {
          $_SESSION["msg"] = "Δεν δόθηκε για είσοδο η Ηλεκτρονική Διεύθυνση";
          //header('location:./sign_up.php');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }
      }
      // error check fro usernmae
      else {
        $_SESSION["msg"] = "Δεν δόθηκε για είσοδο το Όνομα Χρήστη";
      //header('location:./sign_up.php');
        echo "<br>".$_SESSION["msg"]."<br/>";
        die();
      }
    }
    //==============================================================================================================================

    //error
    else {
      echo 'button error';
      //header('location:../sign_up.php');
      die();
    }
}
?>

<?php
/*
-----------------------------INFO----------------------------
update_type 0 -> secretary + update basic stuff
update_type 1 -> secretary + update email (more db queries)

update_type 2 -> secretary + basic
update_type 3 -> secretary + update email (etc)
*/

session_start();
require_once '../../con_db.php';

/*
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

//check if we have secretary
if (!empty($_POST)) {
  $_SESSION["msg"] = "";
  // create con + error check for error
  $connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
  mysqli_set_charset($connect,'utf8');

  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  $curr_id = $_SESSION['user_id'];

  // this means we have a secretary + basic stuff
  if ($_POST["update_type"] == 2) {
      // get info from db
      $name      = mysqli_real_escape_string($connect,$_POST["name"]);
      $surname   = mysqli_real_escape_string($connect,$_POST["surname"]);
      $uni       = mysqli_real_escape_string($connect,$_POST["uni"]);
      $school    = mysqli_real_escape_string($connect,$_POST["school"]);
      $dep       = mysqli_real_escape_string($connect,$_POST["dep"]);
      $semesters = mysqli_real_escape_string($connect,$_POST["semesters"]);
      $state     = mysqli_real_escape_string($connect,$_POST["state"]);
      $city      = mysqli_real_escape_string($connect,$_POST["city"]);
      $zipcode   = mysqli_real_escape_string($connect,$_POST["zipcode"]);
      $phone     = mysqli_real_escape_string($connect,$_POST["phone"]);

      // must be unique
      $queryrn   = "SELECT * from user WHERE id = '$curr_id'";
      $result  = $connect->query($queryrn);
      // error check
      if (!$result) {
        ($connect->error);
        die();
      }
      $data  =  mysqli_fetch_array($result);
      // means we found a username in our db
      if (mysqli_num_rows($result) && $data['id'] != $_SESSION['user_id']) {
        $_SESSION["msg"] = "Τα στοιχεία δεν άλλαξαν";
        header('location:./edit_secretary.php?success=0');
        echo "<br>".$_SESSION["msg"]."<br/>";
        die();
      }
      if ($name != '' && $data['name'] != $name) {
        $queryf ="UPDATE user SET name = '$name' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }

      }

      if ($surname != '' && $data['surname'] != $surname) {
        $queryf ="UPDATE user SET surname = '$surname' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }

      if ($uni != '' && $data['uni'] != $uni) {
        $queryf ="UPDATE user SET uni = '$uni' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }

      if ($school != '' && $data['school'] != $school) {
        $queryf ="UPDATE user SET school = '$school' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }

      if ($dep != '' && $data['dep'] != $dep) {
        $queryf ="UPDATE user SET dep = '$dep' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }
      if ($semesters != '' && $data['semesters'] != $semesters) {
        $queryf ="UPDATE user SET semesters = '$semesters' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }
      if ($state != '' && $data['state'] != $state) {
        $queryf ="UPDATE user SET state = '$state' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }
      if ($city != '' && $data['city'] != $city) {
        $queryf ="UPDATE user SET city = '$city' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }
      if ($zipcode != '' && $data['zipcode'] != $zipcode) {
        $queryf ="UPDATE user SET  zipcode = '$zipcode' WHERE id = '$curr_id'";

        if ($connect->query($queryf) === TRUE) {
            $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
            header("location:./edit_secretary.php?success=1");
        }
        else {
            echo "Error: " . $queryf . "<br>" . $connect->error;
            $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
            header('location:./edit_secretary.php?success=0');
        }
      }
    }

    // secretary + email etc
    else if ($_POST["update_type"] == 3) {
      $username    = mysqli_real_escape_string($connect,$_POST["username"]);
      $password    = mysqli_real_escape_string($connect,$_POST["password"]);
      $re_passowrd = mysqli_real_escape_string($connect,$_POST["re_password"]);
      $email       = mysqli_real_escape_string($connect,$_POST["email"]);
      $queryrn     = "SELECT username,password,email from user WHERE id = '$curr_id'";
      $result      = $connect->query($queryrn);
      // error check
      if (!$result) {
        ($connect->error);
        die();
      }
      $data_main  =  mysqli_fetch_array($result);
      if ($username != '') {
        $queryrn   = "SELECT id from user WHERE username = '$username'";
        $result  = $connect->query($queryrn);
        // error check
        if (!$result) {
          ($connect->error);
          die();
        }
        $data  =  mysqli_fetch_array($result);
        if (mysqli_num_rows($result) && $curr_id != $data['id']) {
          $_SESSION["msg"] = "Τα στοιχεία δεν άλλαξαν, Υπάρχει ήδη αυτό το username";
          header('location:./edit_secretary.php?success=0');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }

        //if we are here we have to update
        if ($data_main['username'] != $username) {
          $queryf ="UPDATE user SET username = '$username' WHERE id = '$curr_id'";
          echo 'apadawwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww';
          if ($connect->query($queryf) === TRUE) {
              $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
              header("location:./edit_secretary.php?success=1");
          }
          else {
              echo "Error: " . $queryf . "<br>" . $connect->error;
              $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
              header('location:./edit_secretary.php?success=0');
          }
        }
      }
      if ($email != '') {
        $queryrn   = "SELECT id from user WHERE email = '$email'";
        $result  = $connect->query($queryrn);
        // error check
        if (!$result) {
          ($connect->error);
          die();
        }
        $data  =  mysqli_fetch_array($result);
        if (mysqli_num_rows($result) && $curr_id != $data['id']) {
          $_SESSION["msg"] = "Τα στοιχεία δεν άλλαξαν, Υπάρχει ήδη αυτό το email";
          header('location:./edit_secretary.php?success=0');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }

        //if we are here we have to update
        if ($data_main['email'] != $email) {
          $queryf ="UPDATE user SET email = '$email' WHERE id = '$curr_id'";

          if ($connect->query($queryf) === TRUE) {
              $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
              header("location:./edit_secretary.php?success=1");
          }
          else {
              echo "Error: " . $queryf . "<br>" . $connect->error;
              $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
              header('location:./edit_secretary.php?success=0');
          }
        }
      }

      if ($password != '') {
        if ($password != $re_passowrd) {
          $_SESSION["msg"] = "Τα στοιχεία δεν άλλαξαν, Οι κωδικοί που δώσατε δεν ταιριάζουν";
          header('location:./edit_secretary.php?success=0');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }
        $queryrn   = "SELECT id from user WHERE password = '$password'";
        $result  = $connect->query($queryrn);
        // error check
        if (!$result) {
          ($connect->error);
          die();
        }
        $data  =  mysqli_fetch_array($result);
        if (mysqli_num_rows($result) && $curr_id != $data['id']) {
          $_SESSION["msg"] = "Τα στοιχεία δεν άλλαξαν, Υπάρχει ήδη αυτός ο κωδικός";
          header('location:./edit_secretary.php?success=0');
          echo "<br>".$_SESSION["msg"]."<br/>";
          die();
        }

        //if we are here we have to update
        if ($data_main['password'] != $password) {
          $queryf ="UPDATE user SET password = '$password' WHERE id = '$curr_id'";

          if ($connect->query($queryf) === TRUE) {
              $_SESSION["msg"] = "Τα στοιχεία σας άλλαξαν με επιτυχία";
              header("location:./edit_secretary.php?success=1");
          }
          else {
              echo "Error: " . $queryf . "<br>" . $connect->error;
              $_SESSION["msg"] = "Η αλλαγή στοιχείων απέτυχε";
              header('location:./edit_secretary.php?success=0');
          }
        }
      }
    }
    echo $_SESSION["msg"];
}

?>

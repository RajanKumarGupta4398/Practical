<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  session_start();
  include('db.php');
  if (isset($_POST['login_user'])) {
    $username = $_POST['lgusername'];
    $password = $_POST['lgpassword'];
    if (($username == "admin") || ($username == "admin@123") ) {
      $table = 'users';
    } else {
      $password = md5($password);
      $table = 'student';
    }
    echo "Table = $table<br>";
    $users = "SELECT  * FROM  `$table` WHERE `email`='$username'";
    $result_user = mysqli_query($db, $users);
    $user = mysqli_fetch_assoc($result_user);
    if ($user) {
      $query = "SELECT * FROM  `$table` WHERE `email`='$username' AND password ='$password' ";
      echo "user found<br>";
      $results = mysqli_query($db, $query);
      $row  = mysqli_fetch_assoc($results);
      if ($results) {
        echo "username and password matched!!<br>";
        if ($username == "admin@123") {
          echo "Go to admin.php";
          $page = 'admin.php';
          print_r($_SESSION);
        } else {
          echo "Go to index page";
          $_SESSION['fname']       =    $row['fname'];
          $_SESSION['dob']         =    $row['dob'];
          $_SESSION['address']     =    $row['address'];
          $_SESSION['pin']         =    $row['pin'];
          $_SESSION['district']    =    $row['district'];
          $_SESSION['state']       =    $row['state'];
          $_SESSION['phone']       =    $row['phone'];
          $_SESSION['email']       =    $row['email'];
          $_SESSION['course']      =    $row['course'];
          $_SESSION['branch']      =    $row['branch'];
          $_SESSION['school']      =    $row['school'];
          $_SESSION['pic']         =    $row['pic'];
          $page = 'index.php';
        }
        $_SESSION['name'] = $row['name'];
        print_r($_SESSION);
      } else {
        echo "username and password NOT matched!!<br>";
        array_push($_SESSION['errors'],"Invalid Username");;
        echo $_SESSION['errors'];
        $page = 'login.php';
      }
    } else {
      echo "User Not Found!!";
      array_push($_SESSION['errors'],"Wrong Username/Password ");
      $page = 'login.php';
    }
  } else {
    array_push($_SESSION['errors'],"Log in first");
    $page = 'login.php';
  }
  print_r($_SESSION);
  header("location:$page");
  ?>
</body>
</html>
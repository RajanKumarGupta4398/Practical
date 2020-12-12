<?php
include('db.php');
session_start();
if (isset($_POST['reg_user'])) {
    print_r($_FILES);
    echo $_FILES['image']['error'];
    if (isset($_FILES['image'])) {
        echo "Image is set";
        $name = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $pict = "C:\\xampp\\htdocs\\xmproj\\Practical\\Images\\";
        if (move_uploaded_file($tmp, $pict . $name));
        echo "<h4 class='text-success'>File Uploaded Suceesfully at $pic !!!</h4>";
        echo "$pic <br> $tmp <br> $name";
    } else {
        error_get_last();
        array_push($_SESSION['errors'], "Pic Upload Failed!");
    }
    $pic = "Images/" . $name;
    echo $pic;
    $name =  $_POST['name'];
    $fname =  $_POST['fname'];
    $dob =  $_POST['dob'];
    $address =  $_POST['address'];
    $pin =  $_POST['pin'];
    $district =  $_POST['district'];
    $state =  $_POST['state'];
    $phone =  $_POST['phone'];
    $email =  $_POST['email'];
    $course =  $_POST['course'];
    $branch =  $_POST['branch'];
    $school =  $_POST['school'];
    $password_1 =  $_POST['password_1'];
    $password_2 =  $_POST['password_2'];
    if ($password_1 != $password_2) {
        array_push($_SESSION['errors'], "The two passwords do not match");
    }
    if ($pin > 999999 && $pin > 99999) {
        array_push($_SESSION['errors'], "Pin number is incorrect");
        $flag = 1;
    }
    echo "<br> $name <br> $fname <br> $dob <br> $address <br> $pin <br> $district <br> $state <br> $phone <br> $email <br> $password_1 <br> $course <br> $branch <br>$school";
    $password = md5($password_1);
    $query = "INSERT INTO `student` (`name`, `fname`, `dob`, `address`, `pin`, `district`, `state`, `phone`, `email`, `password`, `course`, `branch`, `school`,`pic`) VALUES ('$name', '$fname', '$dob', '$address', '$pin', '$district', '$state', '$phone','$email', '$password', '$course', '$branch', '$school','$pic');";

    $run_query = mysqli_query($db, $query);

    if ($run_query) {
        echo "<br>Data Insertion Succesful!!!<br>";
        $_SESSION['name'] = $name;
        $_SESSION['fname'] =  $fname;
        $_SESSION['dob'] =  $dob;
        $_SESSION['address'] =  $address;
        $_SESSION['pin'] =  $pin;
        $_SESSION['district'] =  $district;
        $_SESSION['state'] =  $state;
        $_SESSION['phone'] =  $phone;
        $_SESSION['email'] =  $email;
        $_SESSION['course'] =  $course;
        $_SESSION['branch'] =  $branch;
        $_SESSION['school'] =  $school;
        $_SESSION['pic'] = $pic;
        header('location:index.php');
    } else {
        array_push($_SESSION['errors'], "Data Insertion Failed!!!! ");
        print_r(mysqli_error($db));
    }
    $query2 = "INSERT INTO `users` (`name`, `password`, `email`) VALUES ('$name', '$password', '$email');";
    $run_query2 = mysqli_query($db, $query2);
    if (!$run_query2) {
        echo "failed";
        print_r(mysqli_error($db));
    } else {
        echo "Out because we found an error";
        print_r($errors);
    }
} else {
    array_push($_SESSION['errors'],"Fill The Form perfectly");
    header('location:register.php');
}

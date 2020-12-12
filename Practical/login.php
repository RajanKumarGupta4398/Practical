<?php

use function PHPSTORM_META\type;

session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/c40fc3f702.js" crossorigin="anonymous"></script>
    <title>Log in</title>
</head>

<body>
    <section style="margin-bottom:50px">
        <header>
            <!-- navbar start here -->
            <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light
             text-white shadow p-3 mb-5">
                <a href="#" class="mu-4 navbar-icon"><span><img src="logo.png" alt="logo" height=30px></span></a>
                <a class="navbar-brand" href="#">XYZ University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" style="border:  2px solid black; outline: none;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item ">
                            <a class="nav-link fas fa-home" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li> -->
                        <li class="nav-item active">
                            <?php
                            if (isset($_SESSION['name'])) {
                                $page = "index.php";
                                if ($_SESSION['name'] == "admin") {
                                    $page = "admin.php";
                                }
                                echo  "<a class='nav-link fas fa-user' href='$page'>" . $_SESSION['name'] . "
                                </a>
                                <li class='nav-item'>
                                <a class='nav-link fas fa-sign-out-alt' name='logout' href='login.php?logout='1' '>Logout</a>
                                </li>";
                            } else {
                                echo "<a class='nav-link fas fa-user'href='#'>Guest</a>
                               <li class='nav-item'>
                               <a class='nav-link fas fa-sign-out-alt' href='register.php'>Register</a>
                           </li>";
                            }
                            ?>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Nav bar end here -->
        </header>
    </section>

    <section>
        <div class="bg-dark text-light mt-5 p-3 ">
            <marquee behavior="" direction="">
                <h2 class="pt-4">Welcome To Quantum university</h2>
            </marquee>
        </div>
    </section>

    <section class="modallogin mt-5 ">
        <div class="container-fluid p-0 login-wrap ">
            <div class='login-html  p-5 container-fluid'>
                <div class='login-form container-fluid'>
                    <?php
                    if (isset($_SESSION['errors'])) {
                        include('errors.php');
                    }
                    ?>
                    <form action="server_login.php" method="post">
                        <!-- Register start here  -->
                        <h3 class="text-light">Login Form</h3>
                        <hr><br>
                        <div class="group">
                            <label for="user" class="label">Username or Email</label>
                            <input id="lgusername" name="lgusername" type="text" class="input" required>
                        </div>
                        <br>
                        <div class="group">
                            <label for="pass" class="label"> Enter Password</label>
                            <input id="lgpassword" name="lgpassword" type="password" class="input" data-type="password" required>
                        </div>
                        <br>
                        <div class="group">
                            <button type="submit" class="button btn-primary" id="lin" name="login_user">Log In</button>
                        </div>
                        <br>
                    </form>
                    <div class="group">
                        <a class=" text-white" href="forgot.php ">Forgot Password </a>
                        <br>
                        <label class="label">Dont have an account</label>
                        <br>
                        <a href="register.php">
                            <button class="text-white button btn-danger">Register</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<footer class="mt-5 bg-light text-dark p-3 text-center sticky-bottom">
    <a href="copyrght.html" class="text-dark ml-4">Copyright ©2020 University</a>
    <a href="tnc.html" class="text-dark ml-4">Terms of Use </a>
    <a href="pnp.html" class="text-dark ml-4">Privacy Policy</a>
    <a href="error.html " class="text-dark ml-4">Report Error</a>
</footer>
<!-- footer end  here  -->

</html>
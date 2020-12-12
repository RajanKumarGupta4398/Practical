<?php
session_start();
//  include('getdata.php');
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
    <title><?php echo $_SESSION['name'] ?? " Guest" ?></title>

    <script src="https://kit.fontawesome.com/c40fc3f702.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
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
                        <li class="nav-item "><a class="nav-link fas fa-home" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item active">
                            <?php
                            if (isset($_SESSION['name'])) {
                                echo  "<a class='nav-link fas fa-user p-1' href='#'> " . $_SESSION['name'] . "</a></i>
                                <li class='nav-item '>
                              <a class='nav-link fas fa-sign-out-alt p-1' name='logout' href='login.php?logout='1''>Logout</a>
                              </li>";
                            } else {
                                echo "<a class='nav-link fas fa-user' href='#'> Guest
                                    </a>
                               <li class='nav-item'>
                               <a class='nav-link fas fa-sign-in-alt' href='register.php'>Register</a>
                           </li>
                           <li class='nav-item'>
                               <a class='nav-link fas fa-sign-in-alt' href='login.php'>Login</a>
                           </li>";
                            }
                            ?>
                            <form class="form-inline my-2 my-lg-0">
                                <label class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"></label>
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>

    <!-- $_SESSION['name'] =  $row['name'];
          $_SESSION['fname']=  $row['fname'];
          $_SESSION['dob'] =  $row['dob'];
          $_SESSION['address'] =  $row['address'];
          $_SESSION['pin'] =  $row['pin'];
          $_SESSION['district'] =  $row['district'];
          $_SESSION['state'] =  $row['state'];
          $_SESSION['phone'] =  $row['phone'];
          $_SESSION['email'] =  $row['email'];
          $_SESSION['course'] =  $row['course'];
          $_SESSION['branch'] =  $row['branch'];
          $_SESSION['school'] =  $row['school'];
          $_SESSION['pic'] = $row['pic']; -->
    <section>
        <div class="bg-dark text-light mt-5 p-3 mb-5">
            <marquee behavior="" direction="">
                <h2 class="pt-4">Welcome <?php echo $_SESSION['name'] ?? "Guest"; ?> To Quantum university</h2>
            </marquee>
        </div>
    </section>
    <section class="modallogin mt-5 ">
        <div class="container-fluid p-0 login-wrap ">
            <div class="login-html  p-5 container-fluid">
                <div class="login-form container-fluid">
                    <form action="getdata.php" method="post" enctype="multipart/form-data">
                        <!-- ====================        PROFILE PICTURE START HERE ====================== -->
                        <div class="picture-container">
                            <h4><?php echo $_SESSION['name'];?></h4>
                            <hr>
                            <h3>Student Profile</h3>
                            <hr>
                            <div class=" picture">
                                <img src="<?php echo $_SESSION['pic'] ?? 'asset/user.png' ?>"
                                class="picture-src" id="wizardPicturePreview" title="">
                                <label type="file" id="wizard-picture" name="image">
                            </div>
                        </div>
                        <hr>
                        <div class="group ">
                            <label class="label">Name</label>
                            <input type="text" class="input" value="<?php echo $_SESSION['name']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">DOB </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['dob']?>" readonly>   
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label"> School </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['school']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">Course</label>
                            <input type="text" class="input" value="<?php echo $_SESSION['course']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">Branch</label>
                            <input type="text" class="input" value="<?php echo $_SESSION['branch']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">Father's Name </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['fname']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">Address </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['address']?>" readonly>
                        </div>
                        <hr>
                        <div class="group ">
                            <label class="label">Pin </label>
                            <input type="text" class="input" value="<?php echo  $_SESSION['pin'] ?>"readonly>
                        </div>
                        <hr>
                        <div class="group ">
                            <label class="label">District </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['district']?>" readonly>
                        </div>
                        <hr>
                        <div class="group ">
                            <label class="label">State </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['state']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">Phone Number </label>
                            <input type="text" class="input" value="<?php echo $_SESSION['phone']?>" readonly>
                        </div>
                        <hr>
                        <div class="group">
                            <label class="label">Email</label>
                            <input type="text" class="input" value="<?php echo $_SESSION['email']?>" readonly>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

<footer class="mt-5 bg-light text-dark p-4 text-center sticky-bottom">
    <a href="copyrght.html" class="text-dark ml-4">Copyright ©2020 University</a>
    <a href="tnc.html" class="text-dark ml-4">Terms of Use </a>
    <a href="pnp.html" class="text-dark ml-4">Privacy Policy</a>
    <a href="error.html " class="text-dark ml-4">Report Error</a>
</footer>
<!-- footer end  here  -->

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/c40fc3f702.js" crossorigin="anonymous"></script>

    <title>Registration </title>
</head>
<!-- =================================      BODY     ===================================== -->

<body>
    <section style="margin-bottom:50px">
        <header>
            <!--===================================NAVBAR START HERE  ============================ -->
            <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light text-white shadow p-3 mb-5">
                <a href="#" class="mu-4 navbar-icon"><span><img src="logo.png" alt="logo" height=30px></span></a>
                <a class="navbar-brand" href="#">XYZ University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" style="border:  2px solid black; outline: none;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item ">
                           <span><a class="nav-link ml-3 fas fa-home" href="index.php">Home</span></a>
                        </li> -->
                        <li class="nav-item active">
                            <?php
                            session_start();
                            if (isset($_SESSION['name'])) {
                                echo  "<a class='nav-link ml-3 fas fa-user' href='#'>$_SESSION[name]</a>
                              <li class='nav-item'>
                              <a class='nav-link ml-3 fas fa-sign-out-alt' name='logout' href='login.php?logout='1''>Logout</a>
                              </li>";
                            } else {
                                echo "<a class='nav-link ml-3 fas fa-user' href='#'>Guest</a>
                               <li class='nav-item'>
                               <a class='nav-link ml-3 fas fa-sign-out-alt' href='login.php'>Login</a>
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
            <!-- ====================================     Nav bar end here ==========================-->
        </header>
    </section>
    <!-- ==================== WELCOME START HERE ================================= -->
    <section>
        <div class="bg-dark text-light mt-5 p-3 mb-5">
            <marquee behavior="" direction="">
                <h2 class="pt-4">Welcome To Quantum university</h2>
            </marquee>
        </div>
    </section>
    <!-- ==================== WELCOME END HERE ================================= -->

    <!-- ============================ FORM START HERE ======================= -->
    <section class="modallogin mt-5 ">
        <div class="container-fluid p-0 login-wrap ">
            <div class="login-html  p-5 container-fluid">
                <div class="login-form container-fluid">
                    <?php
                    if (isset($_POST['reg_user'])) {
                        include('errors.php');
                    }
                    ?>
                    <form action="getdata.php" method="post" enctype="multipart/form-data">
                        <!-- ====================        PROFILE PICTURE START HERE ====================== -->
                        <div class=" container">
                            <div class="picture-container">
                                <br>
                                <h3 class="text-light">Registration Form</h3>
                                <hr>
                                <div class=" group picture">
                                    <img src="asset/user.png" class="picture-src" id="wizardPicturePreview" title="">
                                    <input type="file" id="wizard-picture" name="image" required>
                                </div>
                                <div class="group">
                                    <label class="label" name="piclabel"><?php echo  $_FILES['image%0D%0A____________']['name'] ?? 'Choose Image' ?></label>
                                </div>
                            </div>
                        </div>
                        <!-- ==================PROFILE PITURE END HERE ================== -->

                        <!-- =================DATA ENTRIES START HERE ================== -->

                        <div class="group ">
                            <label for="user" class="label">Name </label>
                            <input id="name" name="name" type="text" class="input" required>
                        </div>
                        <br>
                        <div class="group">
                            <label for="user" class="label">DOB </label>
                            <input type="date" name="dob" class="input" required>
                        </div>
                        <br>
                        <div class="group">
                            <span class="input text-light"><label>School</label><br>
                                <select name="school" class="input " onchange="mycourse(this.value)">
                                    <div class="">
                                        <option class="input text-dark ">Select Here</option>
                                        <option class=" text-dark">School of Technology</option>
                                        <option class=" text-dark">School of Business</option>

                                </select></span></div> <br>
                        <div class="group">
                            <span class="input text-light"><label>Course</label><br>
                                <select name="course" class="input " onchange="mybranch(this.value)" id="course">
                                    <option>Course Select</option>
                                </select></span>
                        </div>
                        <br>
                        <div class="group">
                            <span class="input text-light"><label>Branch</label><br>
                                <select class="input" id="branch" name="branch">
                                    <option>Select Branch</option>
                                </select></span>
                        </div>
                        <br>
                        <div class="group">
                            <label for="user" class="label">Father's Name </label>
                            <input type="text" name="fname" class="input" required>
                        </div>
                        <hr>
                        <div class="group">
                            <label for="user" class="label">Address </label>
                            <input type="text" name="address" class="input" required>
                        </div>
                        <br>
                        <div class="group ">
                            <label for="user" class="label">Pin </label>
                            <input type="number" name="pin" class="input" required>
                        </div>
                        <br>
                        <div class="group ">
                            <label for="user" class="label">District </label>
                            <input type="text" name="district" class="input" required>
                        </div>
                        <br>
                        <div class="group ">
                            <label for="user" class="label">State </label>
                            <input type="text" name="state" class="input" required>
                        </div>
                        <br>
                        <div class="group">
                            <label for="user" class="label">Phone Number </label>
                            <input type="number" name="phone" class="input" required>
                        </div>
                        <br>
                        <div class="group">
                            <label for="user" class="label">Email</label>
                            <input id="email" name="email" type="email" class="input" required>
                        </div>
                        <br>
                        <div class="group">
                            <label for="pass" class="label"> Create Password</label>
                            <input id="password_1" name="password_1" type="password" class="input" required data-type="password">
                        </div>
                        <br>
                        <div class="group">
                            <label for="pass" class="label"> Re-enter Password</label>
                            <input id="password_2" name="password_2" type="password" class="input" required data-type="password">
                        </div>
                        <br>
                        <div class="group">
                            <button type="submit" class=" btn-danger button" id="reg" name="reg_user">Register</button>
                        </div>
                        <br>
                    </form>
                    <!-- ==================   FORM END HERE =========================== -->
                    <div class="group">
                        <label for="pass" class="label"> Already have an Account Log In</label>
                        <a class="text-white " href="login.php"><button class="btn-primary button " id="reg" name="reg_user">Login</button></a>
                    </div>
                    <!--============================= DATA ENTRIES END HERE   ================================= -->
                </div>
            </div>
        </div>
    </section>
</body>
<!-- footer start here -->
<footer class="mt-5 bg-light text-dark p-4 text-center sticky-bottom">
    <a href="copyrght.html" class="text-dark ml-4">Copyright ©2020 University</a>
    <a href="tnc.html" class="text-dark ml-4">Terms of Use </a>
    <a href="pnp.html" class="text-dark ml-4">Privacy Policy</a>
    <a href="error.html " class="text-dark ml-4">Report Error</a>
</footer>
<!-- footer end  here  -->
<!-- ====================  SCRIPTS USING AJAX FOR SCHOOL,BRANCH AND COURSE START HERE =============== -->
<script>
    function mycourse(data) {
        // alert(data);
        const ajaxreq = new XMLHttpRequest();
        ajaxreq.open('GET', 'school.php?course=' + data);
        ajaxreq.send();
        ajaxreq.onreadystatechange = function() {
            if (ajaxreq.readyState == 4 && ajaxreq.status == 200) {
                document.getElementById('course').innerHTML =
                    ajaxreq.responseText;
            }
        }
    }

    function mybranch(data) {
        const ajaxreq2 = new XMLHttpRequest();
        ajaxreq2.open('GET', 'school.php?branch=' + data, 'TRUE');
        ajaxreq2.send();
        ajaxreq2.onreadystatechange = function() {
            if (ajaxreq2.readyState == 4 && ajaxreq2.status == 200) {
                document.getElementById('branch').innerHTML =
                    ajaxreq2.responseText;
            }
        }
    }
</script>
<!-- ==================SCRIPTS USED FOR PROFILE PREVIEW START HERE ============ -->
<script>
    $(document).ready(function() {
        // Prepare the preview for profile picture
        $("#wizard-picture").change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</html>
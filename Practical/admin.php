<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
}
if($_SESSION['name']!= "admin"){
    array_push($errors, "You have No authorization!!"); 
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">

    <script src="https://kit.fontawesome.com/c40fc3f702.js" crossorigin="anonymous"></script>

    <title>Admin</title>
</head>

<link rel="stylesheet" href="style.css">

<body>
    <section>
        <header>
            <!-- navbar start here -->
            <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light
             text-white shadow p-3 mb-5">
                <a href="#" class="mu-4 navbar-icon"><span><img src="logo.png" alt="logo" height=30px></span></a>
                <a class="navbar-brand" href="#">University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" style="border:  2px solid black; outline: none;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link fas fa-home" href="admin.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- =====================/ -->
                        <!-- ======================= -->
                        <li class="nav-item active">
                            <?php
                            if (isset($_SESSION['name'])) {
                                if ($_SESSION['name'] != "Guest") {
                                    echo  "<a class='nav-link fas fa-user p-1' href='#'> " . $_SESSION['name'] . "</a></i>
                                <li class='nav-item '>
                              <a class='nav-link fas fa-sign-out-alt p-1' name='logout' href='login.php?logout='1''>Logout</a>
                              </li>";
                                }} else {
                                    echo "<a class='nav-link fas fa-user' href='#'> Guest
                                    </a>
                               <li class='nav-item'>
                               <a class='nav-link fas fa-sign-in-alt' href='register.php'>Register</a>
                           </li>";
                                }   
                            ?>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>
    <section>
        <div class="bg-dark text-light mt-5 p-3 mb-5">
            <marquee behavior="" direction="">
                <h2 class="pt-4">Welcome <?php echo "Admin"; ?> To Quantum university</h2>
            </marquee>
        </div>
    </section>
    <section>
        <div class="container text-dark">
            <div class="row">
                <!-- <div class="col-sm-3 mb-5">
                    <div class="card shadow-lg   m-2 mt-3 p-1 rounded ">
                        <img class="card-img-top img-fluid  " src="../asset/logo.png" alt="Card image cap">
                        <div class="card-header">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div> -->
                <?php @include('fetch_all.php');?>
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
</html>
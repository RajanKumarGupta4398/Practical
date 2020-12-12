<?php
@session_start();
$username = "";
$email    = "";
$_SESSION['errors'] =  array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'university') or die("The site database appears to be down.");
if (mysqli_connect_errno()) {
	"<p class='error'> Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
	die();
} else {
	"<p class='error'> Successfully connected to MySQL: " . mysqli_connect_error() . "</p>";
}

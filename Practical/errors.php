<?php
@session_start();
if(isset($_SESSION['errors'])){
$errors = $_SESSION['errors'];
if (count($_SESSION['errors']) > 0){
foreach ($_SESSION['errors'] as $error) 
{
	echo "<div class='alert alert-danger '> $error</div>";
}
}
// session_unset();
session_destroy();
}
?>
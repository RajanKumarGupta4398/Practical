<?php
session_start();
include('db.php');
$query = "SELECT * FROM `student` WHERE 1";
$results = mysqli_query($db, $query);
if ($results) {
    // print_r($results);
    // while($row = mysqli_fetch_array($results)){
    // echo "<hr><br>".$row['pic'];
    // echo "<br>===========================================<br>";
    while ($row = mysqli_fetch_array($results)) {
        echo " <div class='col-sm-4'>
                    <div class='card shadow-lg         m-2 mt-3 p-1 rounded '>
                        <img class='card-img-top img-fluid' src='" . $row['pic'] . "' alt='Card image cap'>
                        <div class='card-header'>
                            <h4 class='card-title text-muted'>" . $row['name'] . "</h4>
                        </div>
                        <div class='card-block'>
        <p class='card-text'>";
        echo "<br>Name - " . $row['name'];
        echo "<hr><br>Fname - " . $row['fname'];
        echo "<hr><br>Dob - " . $row['dob'];
        echo "<hr><br>Address - " . $row['address'];
        echo "<hr><br>Pin - " . $row['pin'];
        echo "<hr><br>District - " . $row['district'];
        echo "<hr><br>State - " . $row['state'];
        echo "<hr><br>Phone - " . $row['phone'];
        echo "<hr><br>Email - " . $row['email'];
        echo "<hr><br>Course - " . $row['course'];
        echo "<hr><br>Branch - " . $row['branch'];
        echo "<hr><br>School - " . $row['school'];
        echo "</p></div></div></div>";    
    }
} else {
   $_SESSION['error'] = "Error in performing query";
}
?>
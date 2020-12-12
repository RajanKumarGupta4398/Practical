<?php
$school = $_GET['course'];
$tech = array('B.tech','BCA','Bsc','Diploma');
$busi = array('BBA','B.Com','B.A');
switch($school){
    case 'School of Technology' : foreach($tech as $v1 ){
            echo "	<option class='text-dark'> $v1 </option> ";
    }
        break;
    case 'School of Business' : foreach($busi as $v1 ){
        echo "	<option class='text-dark'> $v1 </option> ";
    }
    break;
    default :
}
?>
<?php 
$course = $_GET['branch'];
$btech = array("Computer Science","Mechatronics","Mechanical","Civil","Petroleum");
$bca = array("Computer Science","Informatio Technology");
$bba = array("HR","Planning","Tours and Travels","Digital Marketing");
$bcom = array("Accounts","Finance");
$bsc = array("Physics","Chemistry","Maths","Biology","Computer Science");
$ba = array("History","Political Science","Economics");
switch($course){
    case 'B.tech' : foreach($btech as $v1 ){
        echo "	<option class='text-dark'> $v1 </option> ";
}
    break;
case 'Bsc' : foreach($bsc as $v1 ){
    echo "	<option class='text-dark'> $v1 </option> ";
}
break;
case 'BCA' : foreach($bca as $v1 ){
    echo "	<option class='text-dark'> $v1 </option> ";
}
break;
case 'BBA' : foreach($bba as $v1 ){
    echo "	<option class='text-dark'> $v1 </option> ";
}
break;
case 'B.Com' : foreach($bcom as $v1 ){
    echo "	<option class='text-dark'> $v1 </option> ";
}
break;
case 'B.A' : foreach($ba as $v1 ){
    echo "	<option class='text-dark'> $v1 </option> ";
}
break;
case 'Diploma' : foreach($btech as $v1 ){
    echo "	<option class='text-dark'> $v1 </option> ";}
break;
default :
;
}
?>


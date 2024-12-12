<!--Ekanayake J.K.B
    It23199262 -->
<?php


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tranqilsafari";

$conn = new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection failed: " . $con->connect_error);
}


$mydata = "SELECT * FROM `tours`";
$alldata = $conn->query($mydata);




?>

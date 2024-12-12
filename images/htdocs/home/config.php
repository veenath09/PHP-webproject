<?php

//lets make a connection with Addtocart database

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "product_list";

$conn = new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection failed: " . $con->connect_error);
}


?>

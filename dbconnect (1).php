<?php
$servername = "localhost";
$username   = "nurulid1_foodgoodmin";
$password   = "LMM@Vd#}dXTO";
$dbname     = "nurulid1_foodgood";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
}
else{
    echo "success";
}
?>
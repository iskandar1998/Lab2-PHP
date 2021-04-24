<?php
include_once("dbconnect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$passha1 = sha1($password);
$otp = rand(1000,9999);
$rating = "0";
$credit = "0";
$status = "active";

$sqlregister = "INSERT INTO tbl_user(user_name,password,otp,rating,credit,status) VALUES('$email','$passha1','$otp','$rating','$credit','$status')";
if ($conn->query($sqlregister) === TRUE){
    echo "success";
}else{
    echo "failed";
}

function sendEmail($otp,$email){
    $from = "noreply@foodgood.com";
    $to = $email;
    $subject = "From Foodgood. Please Verify your account";
    $message = "Use the following link to verify your account :"."\n https://slumberjer.com/263592/foodgood/php/verify_account.php?email".$email."&key=".$otp;
    $headers = "From:" . $from;
    mail($email,$subject,$message,$headers);
}

?>
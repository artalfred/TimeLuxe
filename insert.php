<?php 

include 'dbcon.php';

$form_fname = $_GET['fname'];
$form_lname = $_GET['lname'];
$form_email = $_GET['email'];
$form_password = $_GET['password'];
$form_location = $_GET['location'];

$sql2 = " INSERT INTO `account_tbl` (`email`, `password`) VALUES ('$form_email', '$form_password')";
$sql3 = " INSERT INTO `userinfo_tbl` (`fname`, `lname`, `location`) VALUES ('$form_fname', '$form_lname', '$form_location')";
mysqli_query($con, $sql2);
mysqli_query($con, $sql3);

header("location: login.php");

?>
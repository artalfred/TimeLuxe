<?php
include 'dbcon.php';

if (isset($_GET['email']) && isset($_GET['password'])) {

    
    $email = $_GET['email'];
    $password = $_GET['password'];
    
    $validate = "SELECT * FROM `account_tbl` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($con, $validate);

    $signin = 'sign-in';
    
    if ($result && mysqli_num_rows($result) > 0) {
        // Account credentials are valid
        header("location: index.php");
        exit();

    } else {
        // Account credentials are invalid
        echo "Invalid account credentials.";
    }
}
    

mysqli_close($con);
?>

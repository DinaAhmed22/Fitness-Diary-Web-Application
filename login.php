<?php

require('conn.php'); 


if (isset($_POST['email']) && isset($_POST['pswd'])) {


    $email = $_POST['email'];
    $password = $_POST['pswd'];

 
    $query = "SELECT * FROM users WHERE email='$email' and password='$password' ";

    $result = mysqli_query($con, $query); //or die(mysqli_error($con));

    $count = mysqli_num_rows($result);

    if ($count > 0) {

  

        header("location:MainPageFD.php");
    } 
    else {
        header("location:reg.html"); //go to register form
    }
}
?>
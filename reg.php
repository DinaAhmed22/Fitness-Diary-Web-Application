<?php

require('conn.php');

if (isset($_POST['email']) && isset($_POST['pswd']) && isset($_POST['rpswd'])) {
  if ($_POST['pswd'] === $_POST['rpswd']) {

 
    $email = $_POST['email'];
    $pass = $_POST['pswd'];

    $query = "INSERT INTO users (id, email, password) VALUES ('', '$email', '$pass')";

    //check 
    if (mysqli_query($con, $query)) {
      header("location:login.html");
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
  } else {
    echo "<script type='text/javascript'>alert('please enter the right password')</script>";
  }
}
?>
<?php

$invalid='';

if(isset($_POST['submit'])){
    session_destroy();
    session_start();
  if(empty($_POST['email'])|| empty($_POST['pass'])){
    $invalid = "incorrect";
  }
  else {
    $email=$_POST['email'];
    $pass=$_POST['pass'];


    $conn = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conn,"Fashionweb");

    $query = mysqli_query($conn,"SELECT * FROM customer WHERE password='$pass' AND email='$email'");

    $rows = mysqli_num_rows($query);

    if($rows==1){
      $_SESSION['email']=$email;
      $_SESSION['fname']=$f_name;
      header("Location: login-access.php");
      
    }
    else {
      $invalid = "incorrect username or password";
    }
    mysqli_close($conn);
  }
}

?>
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
    function emailExist($conn,$email,$id){
      $sql = "SELECT * FROM customer WHERE email = ? or id = ? ";
      $stmt = mysqli_stmt_init($conn);
       
      if (!mysqli_stmt_prepare($stmt,$sql)) {
          header("location: ../registration.php?error=stmtfailed2");
          exit();
      }
  
      mysqli_stmt_bind_param($stmt, "ss",$email,$id);
      mysqli_stmt_execute($stmt);
  
      $resultData = mysqli_stmt_get_result($stmt);
  
      if ($row = mysqli_fetch_assoc($resultData)) {
          return $row;
      } else {
          $result = false;
          return $result;
      }
  
      mysqli_stmt_close($stmt);
  }
    $query = mysqli_query($conn,"SELECT * FROM customer WHERE password='$pass' AND email='$email'");
    $emailExist = emailExist($conn,$email,$email);
    $rows = mysqli_num_rows($query);

    if($rows==1){
      $_SESSION['email']=$email;
      $_SESSION['fname']=$emailExist['fname'];
      $_SESSION['id']=$emailExist['id'];
      header("Location: index.php");
      
    }
    else {
      $invalid = "incorrect username or password";
    }
    mysqli_close($conn);
  }
}

?>
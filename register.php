<?php 
$invalid='';
//session_destroy();


$conn= mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"Fashionweb");
function emailExist($conn,$email,$id){
    $sql = "SELECT * FROM customer WHERE email = ? or id = ?";
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
if(isset($_POST['submit'])){
    session_destroy();
    session_start();

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];

   // if any thing empty
   if(empty($_POST['email'])|| empty($_POST['pass']) || empty($_POST['fname']) || empty($_POST['lname']) 
   || empty($_POST['pass2'])){
    $invalid = "All Fields Are Reqired";
  }
    else if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else if($pass != $pass2){
        $invalid="Passwords do not match";
        
    }
    
    else {
     $SELECT = "SELECT email From customer Where email = ? Limit 1";
     $emailExist = emailExist($conn,$email,$email);
     $query = "INSERT INTO customer(email, password,fname, lname) VALUES (?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
    }
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ssss", $email,$pass,$f_name,$l_name);
      $stmt->execute();
     }
   /* else if($pass == $pass2){
        //create user 
        //$pass = md5($pass); //hash password for security purposes
        
        mysqli_query($db,$query);
        }*/
   
    else{
        $_SESSION['message']= "The two passwords do not match";
        $stmt->close();
        $db->close();
    }
    $_SESSION['message']= "You've Register Successfully!";
    $_SESSION['fname']= $f_name;
    $_SESSION['email']='';
    $_SESSION['id']=$emailExist['id'];
    header("location: index.php");
}

?>
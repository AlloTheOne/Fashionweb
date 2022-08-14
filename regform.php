<?php
    session_start();
    include 'register.php';
    require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login | Register</title>
       
        </head>
        <body class"back" style="background-image: url(photos/modern-neon-sign.jpg)">




<header >

</header>>

<div class="regform">
      <h1 align="center">We'd love to have you here! <br /> Register now </h1>
      <form align="center" action="register.php" method="POST" style="text-align:center;">
      <input type="text" placeholder="Fist Name" id="f_name" name="fname" required> <br /> <br />
      <input type="text" placeholder="Last Name" id="l_name" name="lname" required> <br /> <br />
        <input type="text" placeholder="email" id="email" name="email" required> <br /> <br />
        <input type="password" placeholder="password" id="pass" name="pass" required><br /> <br />
        <input type="password" placeholder="re-enter password" id="pass2" name="pass2" required><br /> <br />
        <input type="submit" value="Register" name="submit">
        <span><?php echo $invalid; ?></span>
        <h4>Already have an account? <a href="loginform.php"> Sign In Now</a></h4>
      </form>
</div>
      </body>
</html>
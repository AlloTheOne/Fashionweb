<?php
    include 'loginserver.php';
    require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login | Register</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    <style>
      
/* ***************************** */
.navbar #fimg{
  display: none;
}
/*
#secimg {
  display: none;
}*/

/* ***************************** */

/* ***************************** */
body{
  color: white;
  /* The image used
  background-image: url(photos/earth/Earth1.jpg);
*/
  /* Set a specific height */
  min-height: 90vh;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
/* ********************************************** */

    </style>
    </head>
    <!-- end of parallax effect -->



    <body class"back" style="background-image: url(photos/young-man-in-front-of-neon-lights.jpg)">

<!-- menu -->



<header >

</header>

<div class="loginform">
      <h1 align="center">Welcome Back! <br /> Login </h1>
      <form align="center" action="" method="post" style="text-align:center;">
        <input type="text" placeholder="email" id="email" name="email"required > <br /> <br />
        <input type="password" placeholder="password" id="pass" name="pass" required><br /> <br />
        <span Style="color:red; border:1px solid red; margin-bottom:5px; border-radius:6px;"><?php echo $invalid; ?></span> <br /> <br />
        <input type="submit" value="Login" name="submit">

        <h4>new? you can now <a href="regform.php"> Register</a></h4>
      </form>
</div>
<!-- new parallax -->

<!--Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.-->
</section>
</div>

<script src="whyus.js"></script>
    </body>
</html>

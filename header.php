<?php 
 session_status() === PHP_SESSION_ACTIVE ?: session_start();

?>

<!DOCTYPE html>
<html lang="en">
<!-- parallax effect -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fashion Website</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    
    </head>
    <!-- end of parallax effect -->



    <body>
    
<!-- menu -->
<div class="navbar">
<!-- starting of the list -->
<ul class="clearfix" style="
    margin-bottom: 0px;
    margin-top: 0px;">
   <li class="level1">
        <a href="index.php">Home</a>
 </li>

 <li class="level1">
  <a href="#new">New</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"> <a href="">New Discount</a></li>
    <li class="level-2"><a href="">New Summer</a></li>
  </ul>
 </li>
 <li class="level1">
  <a href="#shopbycoll">Shop By Collection</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"><a href="streetwear.php">Street Wear Collection</a></li>
    <li class="level-2"><a id="ignorant" href="" >&nbsp; &nbsp;&nbsp; Spring Collection&nbsp;&nbsp;&nbsp;</a></li>
  </ul>
 </li>
 <li class="level1">
  <a href="#categ">Shop By Category</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"><a href="">Women</a></li>
    <li class="level-2"><a href="">Children</a></li>
  </ul>
 </li>
  <li class="level1">
  <a href="whyus.php">Why Us?</a>
  </li>
  <?php 
if (!isset($_SESSION["id"])) { ?>
    <li class="level1">
    <a href="loginform.php" class="login" style="text-decoration:none;"><!-- <img  src="photos/baseline_login_white_18dp.png" id="fimg"> <img src="photos/baseline_login_black_18dp.png" id="secimg"> --> Login </a>
</li>

<?php
}else {
    $conn= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"Fashionweb");
$sql = "SELECT * from customer where id = '".$_SESSION["id"]."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
      

?>
<li class="level1"> <a href="logout.php"><?php echo $row['fname'];?>
<li class="level1"></li>
    <a href="logout.php" class="login" style="text-decoration:none; display:inline-block;"> <!--<img  src="photos/outline_logout_white_24dp.png" id="fimg"> <img src="photos/outline_logout_black_24dp.png" id="secimg"> --> Logout</a>
</li>
</a> <?php }}} ?>




</li>
</div>
</div>

<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['f_name']);
session_unset();
session_destroy();
header("location: index.php")

?>
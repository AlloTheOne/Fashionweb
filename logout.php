<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['f_name']);
header("location: index.php")
?>
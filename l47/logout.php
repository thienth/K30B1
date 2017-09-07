<?php 
session_start();
// session_destroy();
unset($_SESSION['userinfo']);
header('location: index.php');

 ?>
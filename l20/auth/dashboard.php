<?php 
session_start();
// 1. Kiểm tra xem session auth có tồn tại hay không | có giá trị hay không
if(!isset($_SESSION['AUTH']) || count($_SESSION['AUTH']) == 0){
	header('location: login.php');
}

 ?>

 <h2>Hello, Mr.<?= $_SESSION['AUTH']['username']?></h2>
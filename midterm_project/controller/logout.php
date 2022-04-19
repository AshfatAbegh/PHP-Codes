<?php 
	/*session_start();
	unset($_SESSION['flag']);*/
	setcookie('flag', true, time()+0, '/');
	setcookie('name', "" ,time()+0, '/');
	setcookie('username', "", time()+0, '/');
	setcookie('password', "", time()+0, '/');
	header('location:../view/login.php');
?>
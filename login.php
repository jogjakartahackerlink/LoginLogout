<?php
include "functions.php";
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if(login($user, $pass)){
		$_SESSION['login'] = True;
		echo alert("Login Success");
		echo redirect("/index.php");
	}else{
		echo alert("Wrong Pass!");
		echo redirect("/index.php");
	}
}else{
	echo redirect("/index.php");
}
?>
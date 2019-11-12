<?php

require('dbConnection.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$USERNAME = mysqli_real_escape_string($db_conn,$_POST['username']);
	$PASSWORD = mysqli_real_escape_string($db_conn,$_POST['password']);

	$sql = "SELECT adminID FROM adminTable WHERE username = '$USERNAME' AND password='$PASSWORD'";
	$result = mysqli_query($db_conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active =$row['active'];
	
	$count = mysqli_num_rows($result);
	
	if($count ==1){
		$_SESSION['username']= "USERNAME";
		$_SESSION['login_user'] =$USERNAME;
		header("location:action_login.php");
	} else {
		header("location:adminInlogg.php");
		$error = "Your username or password is invalid.";
	}

}


$db_conn->close();

?>
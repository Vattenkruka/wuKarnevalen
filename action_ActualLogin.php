<?php

require('dbConnection.php');

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$myusername = mysqli_real_escape_string($db_conn,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db_conn,$_POST['password']);

	$sql = "SELECT id FROM admin WHERE username = '$myusername' AND password='$mypassword'";

	$result = mysqli_query($db_conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active =$row['active'];

	$count = mysqli_num_rows($result);

	if($count ==1){
		session_register("myusername");
		$_SESSION['login_user'] =$myusername;

		header("location:action_login.php");
	} else {
		$error = "Your username or password is invalid.";
	}
}

$db_conn->close();

?>
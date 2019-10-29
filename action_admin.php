<?php
require('dbConnection.php');


<$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');


$ADMINId = $_POST["adminID"];
$PASSWORD = $_POST["password"];
$USERNAME = $_POST["username"];
if($_POST["createAdminBtn"]){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";

}
if($_POST["deleteAdminBtn"]){
	$sql = "DELETE FROM adminTable
	WHERE adminID = $ADMINID OR username = $USERNAME";

}
if($_POST["updateAdminBtn"]){
	$sql = "UPDATE adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";

}







$db_conn->close();

?>
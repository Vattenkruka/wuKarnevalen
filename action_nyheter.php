<?php
require('dbConnection.php');
$NAME = $_POST["name"];
$COMMENT =
$_POST["comment"];


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "CREATE TABLE newsTable (newsID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, headline varchar(255), nmessage varchar(1000))";

if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
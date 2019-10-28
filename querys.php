<?php
define('DB_USER','4003497_zw91539');
define('DB_PASSWORD','REWvoJs6');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db10');

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');


function functionName(){
	$USERNAME = $_POST["username"];
	$PASSWORD =
	$_POST["password"];

	$sql = "SELECT * FROM adminTable";

}

/*
<!--CREATE TABLE FOR ADMIN-->

<!-- $sql = "CREATE TABLE adminTable (adminID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username varchar(30), password varchar(30))";

if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
-->
*/
/*
<!--DROP TABLE FOR ADMIN-->

<!--

$sql = "DROP TABLE adminTable";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

-->
*/
/*
<!--DELETE TABLE FOR ADMIN -->

<!--

$sql = "DELETE FROM adminTable WHERE adminID = ''";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

-->
*/
/*<!--INSERT INTO TABLE FOR ADMIN -->

if(!empty($USERNAME)){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES ('$USERNAME','$PASSWORD')";

	if ($db_conn->query($sql) === TRUE) {
	echo "New Admin has been created:";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
}
*/
/*
<!-- UPDATE TABLE FOR ADMIN -->


<!-- SELECT * FROM adminTable -->

<!--

$sql = "SELECT * FROM adminTable";

if ($db_conn->query($sql) === TRUE) {
	echo "Table has been selected";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

-->
*/


$db_conn->close();

?>
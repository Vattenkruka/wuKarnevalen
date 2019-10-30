<!--CREATE TABLE FOR ADMIN-->


<?php
require('dbConnection.php');


<$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

/*
$sql = "CREATE TABLE ticketTable (ticketID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, event varchar(30), email varchar(30))";
*
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
*/

$EVENT = $_POST["event"];
$EMAIL =
$_POST["email"];
if (!empty($EMAIL)) {
	$sql = "UPDATE INTO ticketTable (email)
	VALUES ('$EMAIL')
	WHERE email = null AND event = $EVENT LIMIT 1"
	
	;

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din biljett är reserverad min gode herre<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}
}








$db_conn->close();

?>


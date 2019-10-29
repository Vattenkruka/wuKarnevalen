<?php
require('dbConnection.php');
$HEADLINE = $_POST["headline"];
$NMESSAGE =
$_POST["nmessage"];


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

if (!empty($HEADLINE)) {
	$sql = "INSERT INTO newsTable (headline,nmessage)
	VALUES ('$HEADLINE','$NMESSAGE')";

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din nyhet har laddats upp!<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		
		$db_conn->error;
	}
};

?>

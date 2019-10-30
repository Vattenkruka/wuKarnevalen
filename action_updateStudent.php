<?php

require('dbConnection.php');

$STUDENTID = $_POST["studentID"]; 
$FÖRNAMN = $_POST["förnamn"];
$EFTERNAMN = $_POST["efternamn"];
$EMAIL = $_POST["email"];
$TELEFON = $_POST["telefon"];


if(!empty($STUDENTID)) { 
	$sql = "UPDATE studentTable
	SET förnamn='$FÖRNAMN',
	efternamn='$EFTERNAMN',
	email='$EMAIL',
	telefon='$TELEFON'
	WHERE studentID='$STUDENTID'";


	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Du har editerat en student!<br /><br />"; 
	} else {
		echo "Fel: " . $sql . "<br>" . $db_conn->error;
	}
}

$db_conn->close();

?>
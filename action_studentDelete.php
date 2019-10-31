<?php

require('dbConnection.php');

$STUDENTID = $_POST["studentID"]; 


if(!empty($STUDENTID)) { 
	$sql = "DELETE 
	FROM studentTable
	WHERE studentID='$STUDENTID'";

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Du har tagit bort en student!<br /><br />"; 
	} else {
		echo "Fel: " . $sql . "<br>" . $db_conn->error;
	}
}

$db_conn->close();

?>
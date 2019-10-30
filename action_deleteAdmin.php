<?php

require('dbConnection.php');

$ADMINId = $_POST["adminId"]; 

if(!empty($ADMINId)) { 
	$sql = "DELETE 
	FROM adminTable
	WHERE adminId='$ADMINId'";

	echo "Hohoh";

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Du har tagit bort en admin!<br /><br />"; 
	} else {
		echo "Fel: " . $sql . "<br>" . $db_conn->error;
	}
}

$db_conn->close();

?>
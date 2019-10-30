<?php
require('dbConnection.php');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');


$SECTION = $_POST["section"];
$STUDENTID = $_POST["studentID"]

/*if($_POST["searchAdminBtn"]){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";
	}
*/

/*if($_POST["searchAllAdminBtn"]){*/
	if(!empty($STUDENTID)) { 
	$sql = "UPDATE studentTable
	SET section='$SECTION',
	WHERE studentID='$STUDENTID'";
}


	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Du har editerat en student!<br /><br />"; 
	} else {
		echo "Fel: " . $sql . "<br>" . $db_conn->error;
	}

		

		
/*}*/
/*if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din biljett är reserverad min gode herre<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}


}
*/






$db_conn->close();

?>
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
	$resultTable = mysqli_query($db_conn, "UPDATE studentTable SET '$SECTION' = section WHERE '$STUDENTID' = studentID" );
	echo"<h3> Studentens sektion uppdaterad </h3>";
		
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
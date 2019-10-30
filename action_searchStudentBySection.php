<a href="action_login.php"> Tillbaka </a>
<?php
require('dbConnection.php');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');


$SECTION = $_POST["section"];
/*if($_POST["searchAdminBtn"]){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";
	}
*/

/*if($_POST["searchAllAdminBtn"]){*/
	$resultTable = mysqli_query($db_conn, "SELECT * FROM adminTable WHERE '$SECTION'= section" );
	echo"<h3> Hittat studenter enligt section </h3>";
		while ($array = mysqli_fetch_array($resultTable)) {
		echo "<br>";
		echo " <tr> <td>". $array[0] . "</td> <td>" . $array[1] . "</td> <td> " . $array[2]. "</td> </tr>";
		
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
<?php
require('dbConnection.php');


<$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');


$ADMINId = $_POST["adminID"];
$PASSWORD = $_POST["password"];
$USERNAME = $_POST["username"];
/*if($_POST["searchAdminBtn"]){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";
	}
*/

if($_POST["searchAllAdminBtn"]){
	$resultTable = mysqli_query($db_conn, "SELECT * FROM adminTable");
		while ($array = mysqli_fetch_array($resultTable)) {

		echo "<div class='adminViewTable'> <h3> ". $array[0] . "</h3><p>" . $array[1] . "</p></div>";

}
if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din biljett är reserverad min gode herre<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}

}







$db_conn->close();

?>
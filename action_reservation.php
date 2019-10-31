

<?php
require('dbConnection.php');



$EMAIL = $_POST["email"];
$EVENT = $_POST["event"];

if(!empty($EMAIL)) { 
	$sql = "UPDATE ticketTable
	SET email='$EMAIL'
	
	WHERE email IS NULL AND '$EVENT' = event ORDER BY ticketID LIMIT 1";


	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Du har bokat en biljett!<br /><br />"; 
	} else {
		echo "Fel: " . $sql . "<br>" . $db_conn->error;
	}
}


$resultTable = mysqli_query($db_conn, "SELECT * FROM ticketTable");
	echo"<h3> Alla biljetter </h3>";
		while ($array = mysqli_fetch_array($resultTable)) {
		echo "<br>";
		echo " <tr> <td>". $array[0] . "</td> <td>" . $array[1] . "</td> <td> " . $array[2]. "</td> </tr>";
		
		}

/*if (!empty($EMAIL)) {
	$sql = "INSERT INTO ticketTable (event)
	VALUES ('$EVENT')"	
	;

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Tack för din ansökan!<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}
}*/

/*
$sql = "CREATE TABLE ticketTable (ticketID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, event varchar(30), email varchar(30))";
*
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
*/








/*$resultTable = mysqli_query($db_conn, "SELECT * FROM ticketTable");
	echo"<h3> Nuvarande adminkonton </h3>";
		while ($array = mysqli_fetch_array($resultTable)) {
		echo "<br>";
		echo " <tr> <td>". $array[0] . "</td> <td>" . $array[1] . "</td> <td> " . $array[2]. "</td> </tr>";
		
		}
*/











$db_conn->close();

?>


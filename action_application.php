<?php
require('dbConnection.php');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

/*
$sql = "CREATE TABLE studentTable (studentID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, förnamn varchar(30), efternamn varchar(30), email varchar(30), telefon INT, section varchar(30), medlem varchar(30))";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}*/


$FÖRNAMN = $_POST["förnamn"];
$EMAIL = $_POST["email"];
$EFTERNAMN = $_POST["efternamn"];
$TELEFON = $_POST["telefon"];
$SECTION = $_POST["section"];
$MEDLEM = "ej medlem";
if (!empty($EMAIL)) {
	$sql = "INSERT INTO studentTable (förnamn, efternamn, email, telefon, section, medlem)
	VALUES ('$FÖRNAMN', '$EFTERNAMN', '$EMAIL', '$TELEFON', '$SECTION', '$MEDLEM')"	
	;

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din biljett är reserverad min gode herre<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}
}
/*
$sql = "DROP TABLE studentTable";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}*/




/*$result = mysqli_query($db_conn, "SELECT * FROM studentTable");
while ($array = mysqli_fetch_array($result)){
	echo $array[0];
	echo $array[1];
	echo $array[2];
	echo $array[3];
	echo $array[4];
	echo $array[5];
	echo $array[6];
}
*/


$db_conn->close();

?>
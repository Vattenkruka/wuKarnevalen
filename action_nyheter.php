<?php
require('dbConnection.php');
$HEADLINE = $_POST["headline"];
$IMAGE = $_POST["image"];
$NMESSAGE = $_POST["nmessage"];

/*$sql = "DROP TABLE newsTable";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
*/

/*$tmpQuery = "CREATE TABLE newsTable (
newsID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
headline varchar(30),
image varchar(30), 
nmessage varchar(400)
)";*/

/*$result = mysqli_query($db_conn, $tmpQuery);
echo $result;*/


if (!empty($HEADLINE)) {
	$sql = "INSERT INTO newsTable (headline, image, nmessage)
	VALUES ('$HEADLINE', '$IMAGE', '$NMESSAGE')";

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din nyhet har laddats upp!<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		
		$db_conn->error;
	}
}




$db_conn->close();


?>

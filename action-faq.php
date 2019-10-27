					




<?php
require('dbConnection.php');
$NAME = $_POST["name"];
$COMMENT =
$_POST["comment"];


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

echo "<h2>Diskussionsforum</h2>";

/*
$sql = "DROP TABLE commentTable";
if ($db_conn->query($sql) === TRUE) {
    echo "Table has been dropped!";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

*/

/*

$sql = "CREATE TABLE commentTable (commentID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, name varchar(255), comment varchar(1000))";

if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

*/


if (!empty($NAME)) {
	$sql = "INSERT INTO commentTable (name,comment)
	VALUES ('$NAME','$COMMENT')";

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din kommentar har laddats upp!<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}
}




/*
$sql = "DELETE FROM commentTable WHERE name = 'Svante'";

if ($db_conn->query($sql) === TRUE) {
    echo "row deleted successfully";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}




$sql = "SELECT * FROM commentTable";

if ($result=mysqli_query($db_conn,$sql))
  {
    echo "<table style='border:1px solid #ccc; border-collapse: collapse;'><tr><td style='border:1px solid #ccc'><b>Name:</b></td><td style='border:1px solid #ccc'><b>Comment:</b></td></tr>";
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<tr> <td style='border:1px solid #ccc'> %s </td> <td style='border:1px solid #ccc'> %s </td> <tr />\n",$row[0],$row[1]);
    }

    echo "</table>";
  // Free result set
  mysqli_free_result($result);
}

*/

$db_conn->close();

header("Location: faq.php");
exit;

?>
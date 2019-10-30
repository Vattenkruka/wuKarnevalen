<?php
require('dbConnection.php');

$ADMINId = $_POST["adminID"]; 
$USERNAME = $_POST["username"];
$PASSWORD = $_POST["password"];

if(!empty($USERNAME)) { 
	$sql = "UPDATE adminTable(username,password)
	VALUES ('$USERNAME','$PASSWORD') WHERE adminID=$ADMINId";

	echo "Hohoh";

	if ($db_conn->query($sql) === TRUE) {
		echo "<br />Du har editerat en admin!<br /><br />";
		echo "$USERNAME" ."<br>". "$PASSWORD"; 
	} else {
		echo "Fel: " . $sql . "<br>" . $db_conn->error;
	}
}


/*
if($_POST['createAdminBtn'] =="Submit"){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";

}
if($_POST['deleteAdminBtn']){
	$sql = "DELETE FROM adminTable
	WHERE adminID = $ADMINID OR username = $USERNAME";

}
if($_POST['updateAdminBtn']){
	$sql = "UPDATE adminTable(username, password)
	VALUES('$USERNAME', '$PASSWORD')";

if ($db_conn->query($sql) === TRUE) {
		echo "<br />Din biljett är reserverad min gode herre<br /><br />";
	} else {
		echo "Fel: " . $sql . "<br>" . 
		$db_conn->error;
	}

}

*/

$db_conn->close();

?>
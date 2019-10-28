<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LundaKarnevalen 2022</title>
	<link rel="shortcut icon" type="image/jpg" href="images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src='main.js'> </script>
</head>
<header>
		<?php include 'header.php';?>
	</header>
<body>

<?php
require('dbConnection.php');
$USERNAME = $_POST["username"];
$PASSWORD =
$_POST["password"];


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

/*
<!--CREATE TABLE FOR ADMIN-->

<!-- $sql = "CREATE TABLE adminTable (adminID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username varchar(30), password varchar(30))";

if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
-->
*/
/*
<!--DROP TABLE FOR ADMIN-->

<!--

$sql = "DROP TABLE adminTable";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

-->
*/
/*
<!--DELETE TABLE FOR ADMIN -->

<!--

$sql = "DELETE FROM adminTable WHERE adminID = ''";
if ($db_conn->query($sql) === TRUE) {
	echo "New table created successfully";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

-->
*/
/*<!--INSERT INTO TABLE FOR ADMIN -->

if(!empty($USERNAME)){
	$sql = "INSERT INTO adminTable(username, password)
	VALUES ('$USERNAME','$PASSWORD')";

	if ($db_conn->query($sql) === TRUE) {
	echo "New Admin has been created:";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
}
*/
/*
<!-- UPDATE TABLE FOR ADMIN -->


<!-- SELECT * FROM adminTable -->

<!--

$sql = "SELECT * FROM adminTable";

if ($db_conn->query($sql) === TRUE) {
	echo "Table has been selected";
} else {
	echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

-->
*/




$db_conn->close();

?>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	</html>
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

include('querys.php');
functionName();



$db_conn->close();

?>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	</html>
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
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<div class="Main_login_container">
			<div class="login_h1">
				<h1>AdminPortalen För Karnevalen</h1>
			</div>
			<form action="action_login.php" method="post">
				<div class="login-container">
					<div class="userbox">
					<label for="username"><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="username" required>
					</div>
					<div class="passwordbox">
					<label for="password"><b>Password</b></label>
					<input type="text" placeholder="Enter Password" name="password"
					required>
					</div>
					<div class="loginbox">
					<button type="submit" name="loginBtn">Login</button>
				</div>
				</form>
				</div>
			</div>
		</main>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	</html>
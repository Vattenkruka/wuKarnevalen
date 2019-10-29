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

	$db_conn->close();
	?>

	<div class="portalh1"> 
		<h1> Karnevalsportalen För Administratörer </h1>
	</div>
	<div class="admin_crud_wrapper">
		<div class="link_list_wrapper">
			<div class="linkh2">
				<h2>Adminfunktioner </h2>
			</div>
			<ol>
				<li id="hantering_av_admin">
				Hantering av Admin</li>
				<li> <a href="#Nyhetshantering">Nyhetshantering</a></li>
				<li> <a href="#Ansökanhantering">Ansökanhantering</a></li></ol>
			</div>
			<div class="admin_cdu_wrapper">
				<div class="linkh2">
					<h2>Adminverktyg gällande Admins</h2>
				</div>
				<div  class="adminverktygform">
					<form action="action_admin" method="POST" id="adminForm">
						<div class="adminID_field">
							<label>adminID:*</label>
							<input type="text" name="adminID"
							placeholder="Enter adminID" pattern= "[0-9]"  required>

						</div>
						<div class="username_field">
							<label>Username:</label>
							<input type="text" name="adminID"
							placeholder="Enter username">

						</div>
						<div class="password_field">
							<label>Password:</label>
							<input type="text" name="adminID"
							placeholder="Enter password">
						</div>
						<button input type="button" name="createAdminbtn" id="createAdminbtn" onclick="commentSubmit()" value="Submit"
						> Skapa Admin</button>
						<button input type="button" name="commentBtn" id="commentBtnId" onclick="commentSubmit()" value="Submit"
						> Uppdatera Admin</button>
						<button input type="button" name="commentBtn" id="commentBtnId" onclick="commentSubmit()" value="Submit"
						> Ta bort Admin</button>
					</form>
					<div class="notificationh4">
					<h4> Notifikationsfönster</h4>
					</div>	
					<div class="admin_messagebox">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum mattis aliquet.  </p>
					</div>
				</div>
			</div>
			<div class="admin_read_wrapper">
			<div class="linkh2">
			<h2> Adminsök</h2>
			</div>
			<div class="adminform_wrapper">
			<form action="action_adminSearch" method="post" id = "searchForm">
			<div class="adminID_field">
							<label>adminID:</label>
							<input type="text" name="adminID"
							placeholder="Enter adminID" pattern= "[0-9]">

						</div>
						<div class="username_field">
							<label>Username:</label>
							<input type="text" name="username"
							placeholder="Enter username">

						</div>
						<div class="password_field">
							<label>Password:</label>
							<input type="text" name="password"
							placeholder="Enter password">
						</div>
						<button input type="button" name="searchAdminBtn" id="searchAdminBtn" onclick="searchAdminSubmit()" value="Submit"
						> Sök Admin!</button>
						<button input type="button" name= "searchAllAdminBtn" id="searchAllAdminBtn" onclick="searchAdminSubmit()" value="submit"> Sök Alla Admins</button>
					</form>
					<div class="adminViewTable">
					
					</div>
				</div>
			</div>
			
		</div>
		<div class="KarnevalsAdminH2">
		<h2> Nyhetshantering</h2>
		</div>
		<div class="admin_crud_wrapper">
		<div class="link_list_wrapper">
			<div class="linkh2">
				<h2>Adminfunktioner </h2>
			</div>
			<ol>
				<li> <a href="#hantering_av_admin">
				Hantering av Admin</a></li>
				<li id="Nyhetshantering">Nyhetshantering</li>
				<li> <a href="#Ansökanhantering">Ansökanhantering</a></li></ol>
			</div>
			<div class="admin_cdu_wrapper">
				<div class="linkh2">
					<h2>Adminverktyg gällande Nyheter</h2>
				</div>
				<div  class="adminverktygform">
					<form action="action_nyheter.php" method="POST" id="adminNyhetsForm">
					<div>
						<label>Headline: *</label>
						<input type="text" name="headline" placeholder="Enter Headline" required>
					</div>
						<label>News Message: *</label>
						<div class="nyhetTextAreaWrapper">
						<textarea name="nmessage" form="adminNyhetsForm" id="newsTextArea" required></textarea>
					</div>
					</div>
					<div>
					<button input type="button" name="newsBtn" id=newsBtnID onclick="" value="Submit">Post!</button>
					</div>

					</form>
					<div class="notificationh4">
					<h4> Notifikationsfönster</h4>
					</div>	
					<div class="admin_messagebox">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum mattis aliquet.  </p>
					</div>
				</div>
			</div>
			<div class="admin_read_wrapper">
			<div class="linkh2_2">
			<h2> Nuvarande Nyhetsflöde</h2>
			</div>
			<div class="adminform_wrapper">
			
					<div class="adminViewTable2">
					<p>Här ska vi fixa inkludera ett nyhetsflöde</p>
					</div>
				</div>
			</div>
		</div>
		<div class="KarnevalsAdminH2">
		<h2> Ansökanhantering</h2>
		</div>
		<div class="admin_crud_wrapper">
		<div class="link_list_wrapper">
			<div class="linkh2">
				<h2>Adminfunktioner </h2>
			</div>
			<ol>
				<li> <a href="#hantering_av_admin">
				Hantering av Admin</a></li>
				<li> <a href="#Nyhetshantering">Nyhetshantering</a></li>
				<li id="Ansökanhantering">Ansökanhantering</li></ol>
			</div>
			<div class="admin_cdu_wrapper">
				<div class="linkh2">
					<h2>Adminverktyg gällande Ansökan</h2>
				</div>
				<div  class="adminverktygform">
					<form action="#" method="POST" id="adminForm">
					</form>
					<div class="notificationh4">
					<h4> Notifikationsfönster</h4>
					</div>	
					<div class="admin_messagebox">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum mattis aliquet.  </p>
					</div>
				</div>
			</div>
			<div class="admin_read_wrapper">
			<div class="linkh2">
			<h2> Data över Ansökningar</h2>
			</div>
			<div class="adminform_wrapper">
			
					<div class="adminViewTable2">
					<p>Här ska vi inkludera en rolig tabell över ansökningar</p>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	</html>
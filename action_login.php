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
<body>	<div class="portalh1"> 
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
			<div class="Form_admin_wrapper">
				<div  class="adminverktygform">
					<h3> Skapa Admin</h3>
					<form action="action_admin.php" method="POST" id="adminCreateForm">
						<div class="username_field">
							<label>Username:</label>
							<input type="text" name="username"
							placeholder="Enter username" required>
						</div>
						<div class="password_field">
							<label>Password:</label>
							<input type="text" name="password"
							placeholder="Enter password" required>
						</div>
						<button input type="button" name="createAdminBtn" id="createAdminBtnId" onclick="adminCreateSubmit()" value="Submit"
						> Skapa Admin</button>
					</form>
				</div>
				<div  class="adminverktygform">
					<h3>Uppdatera/Redigera Admin</h3>
					<form action="action_updateAdmin.php" method="POST" id="adminUpdateForm">
						<div class="adminID_field">
							<label>adminID:*</label>
							<input type="text" name="adminId"
							placeholder="Enter adminId" pattern= "[0-9]"  required>
						</div>
						<div class="username_field">
							<label>Username:</label>
							<input type="text" name="username"
							placeholder="Enter username" Required>

						</div>
						<div class="password_field">
							<label>Password:</label>
							<input type="text" name="password"
							placeholder="Enter password" Required>
						</div>
						<button input type="button" name="updateAdminBtn" id="updateAdminBtnId" onclick="adminUpdateSubmit()" value="Submit"
						> Uppdatera Admin</button>
					</form>
				</div>
				<div  class="adminverktygform">
					<h3>Ta Bort Admin</h3>
					<form action="action_deleteAdmin.php" method="POST" id="adminDeleteForm">
						<div class="adminID_field">
							<label>adminID:*</label>
							<input type="text" name="adminId"
							placeholder="Enter adminId" pattern= "[0-9]"  required>
						</div>
						<button input type="button" name="deleteAdminBtn" id="deleteAdminBtnId" onclick="adminDeleteSubmit()" value="Submit"
						> Ta bort Admin</button>
					</form>
				</div>
			</div>
			<div class="admin_read_wrapper">
				<div class="linkh2">
					<h2> Adminsök</h2>
				</div>
				<div class="adminform_wrapper">
					<form action="action_adminSearchByInput.php" method="post" id="searchForm">
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
						<button input type="button" name="searchAdminBtn" id="searchAdminBtn" onclick="searchAdminByIdSubmit()" value="Submit"
						> Sök Admin!</button>
					</form>
					<form action="action_adminSearch.php" method="post" id="searchAllForm">
					<button input type="button" name= "searchAllAdminBtn" id="searchAllAdminBtn" onclick="searchAdminSubmit()" value="Submit"> Sök Alla Admins</button>
				</form>
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
						<div>
							<label>Image:</label>
							<input type="text" name="image" placeholder="Enter image name" required>
						</div>
						<label>News Message: *</label>
						<div class="nyhetTextAreaWrapper">
							<textarea name="nmessage" form="adminNyhetsForm" id="newsTextArea" required></textarea>
						</div>
					</div>
					<div>
						<button input type="button" name="newsBtn" id=newsBtnID onclick="newsSubmit()" value="Submit">Post!</button>
					</div>

				</form>
			</div>
		</div>
		<div class="admin_read_wrapper">
			<div class="adminform_wrapper">
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
				</div>
			</div>
			<div class="admin_read_wrapper">
				<div class="linkh2">
					<h2> Data över Ansökningar</h2>
				</div>
				<div class="adminform_wrapper">
				</div>
			</div>
		</div>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	</html>
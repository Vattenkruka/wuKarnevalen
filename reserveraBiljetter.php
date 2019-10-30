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
			<div class= "container-biljett">
			<div class="reserveTicket">
					<h3> Reservera Biljett</h3>
					

					<form  action="action_reservation.php" method="POST" id="ticketForm">
						<div>
							<label>Email: *</label>
							<input type="text" name="name"
							placeholder="Enter Your Email!" required>
						</div>
						<br>
						<div>
						<label>Önskad Biljett *</label>
						<select name="section">
							<option value="administerIT">Spexet</option>
							<option value="biljonsen">Cirkusen</option>
							<option value="blädderiet">Revyn</option>
						</select>
					</div>						
					<br>
						<button input type="button" name="reservationBtn" id="reservationBtnId" onclick="reservationSubmit()" value="Submit"
						> Reservera Biljett</button>
					</form>
				</div>
				<div class= biljett_info>
					<article class ="nöje3">
						<h2> Cirkusen </h2>
						<div class="nöjes-bild">  
							<img class="barnevalenBild" src="images/cirkus.jpg" alt="Cirkus">
						</div>
						<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.</p>
					</article>
					<article class="nöje3">
						<h2> Revyn </h2>
						<div class="nöjes-bild">  
							<img class="barnevalenBild" src="images/revy.jpg" alt="Revyn">
						</div>
						<p>Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
							Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
						</p>
					</article>
					<article class="nöje3">
						<h2> Spexet </h2>
						<div class="nöjes-bild">  
							<img class="barnevalenBild" src="images/spexet.jpg" alt="Spexet">
						</div>
						<p>Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
						</p>
					</article>
				</div>
		</main>
				<footer>
					<?php include 'footer.php';?>
				</footer>
			</body>
			</html>
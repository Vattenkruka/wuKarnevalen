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
		<div class="gap-40"></div>

		<div class="container-2-nöje">
			<aside class="box-3-nöje"> <!--News-->	
				<h1> Frequently Asked Questions</h1>
				<div class="Nöjenwrapper">
					<article class="nöje1">
						<h2> När är Karnevalen? </h2>
						<p>Nästa Lundakarneval är år 2022.
						</p>
						<h2>Kostar det något att titta på Karnelvalståget?</h2>
						<p> 
						Nej, Karnevalståget är helt gratis och kan ses från valfri plats enligt kartan över tågets rutt! 
						</p>
						<h2> När och var kan jag titta på Karnevalståget</h2>
						<p> Du kan se tåget lördagen den 19 maj och söndagen den 20 maj. Tåget startar 13:00 och du kan titta på tåget från någon av alla de platser som finns längs med tågets rutt. Se karta för rutten under fliken ”Om Karnevalen” --> ”Tåg”.
						</p>
						<h2> Vilka artister kommer på Lundakarnevalen 2022?</h2>
						<p> Lundakarnevalen 2022 kommer att få besök av några av världens bästa artister: Michael Jackson Hologram, Phil Collins, Simon Da Rapper och Dj Ogge MCBeatboxer!
						</p>

					</article>
					<article class ="nöje2">
						<h2> Var kan jag parkera min cykel på Lundakarnevalen?
 						</h2>
						<p> Helst i de officiella cykelställ som finns lite överallt i Lund. Men akta er för att parkera cykeln bredvid ett cykelställ utanför ICA Clementstorget, då kommer polisen och tar den efter 5 röda sekunder!
						</p>
						<h2> Vad kan jag göra av min väska och värdesaker?
						 </h2>
						<p> Lundakarnevalen ansvarar inte för besökares värdesaker. Vi rekommenderar att ni, som på andra festivaler/karnevaler bara tar med det mest nödvändiga, men om ni prompt vill att någon ska ta hand om era värdesaker så rekommenderar vi ficktjuvarna som stryker omkring. De står så gärna till er tjänst!
						</p>
						<h2> Hur kommer kollektivtrafiken att fungera under Lundakarnevalen?
						</h2>
						<p> Troligtvis lika uselt som vanligt.
						</p>
						<h2> Hur har ni ordnat för små barn på festivalen?
						</h2>
						<p> Det finns alltid roliga barnaktiviteter som håller på främst under dagarna. Vi rekommenderar dock att alla barn och unga mellan 0 till 12 år eskorteras av en vuxen. Vad gäller små människor så står Lundakarnevalen inte för eventuell begränsad sikt under konserter, men borttappade korta vänner kan hämtas upp vid huvudingången för Karnevalsområdet! 
						</p>

					</article>			
				</div>
			</aside>

			
			<div class="commentHeader">
				<h2> Comment Section </h2>
			</div>
			<div class="commentsection">
				<div class="commentSide">
					<h3>Comments </h3>
					<?php
					require('dbConnection.php');
					$resultTable = mysqli_query($db_conn, "SELECT name, comment FROM commentTable");
					while ($array = mysqli_fetch_array($resultTable)) {

						echo "<div class='comment-body'> <h3> ". $array[0] . "</h3><p>" . $array[1] . "</p></div>";

					}

					$db_conn->close();

					?>

					
				</div>
				<div class="commentInfo">
					<h3> Submit A Comment</h3>
					<p> Enter the fields below <br> to submit a comment!</p>

					<form  action="action-faq.php" method="POST" id="commentForm">
						<div>
							<label>Name: *</label>
							<input type="text" name="name"
							placeholder="Enter Your Name!" required>
						</div>
						<br>
						<div>
							<label>Comment: *</label>
							<textarea name="comment" form="commentForm" id="newsTextArea"
							placeholder="Enter Your Comment!" required></textarea>
						</div>
						<br>
						<button input type="button" name="commentBtn" id="commentBtnId" onclick="commentSubmit()" value="Submit"
						> Post!</button>
					</form>
				</div>
			</div>
		</main>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	</html>
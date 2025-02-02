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

		<div class="container-2">
			<div class="box-2-ansök"> <!--Main, FORMS-->
				<h3> Ansök till Lundakarnevalen! </h3>
				<div id="error"></div>
				<form name="RegForm" action="action_application.php" onsubmit="return validateForm()" method="POST" id="applicationForm">
					<div>
						<label>Förnamn *</label>
						<input type="text" name="förnamn"
						placeholder="Enter first name" pattern= "[a-zA-Z]+"  required>
					</div>
					<br>
					<div>
						<label>Efternamn *</label>
						<input type="text" name="efternamn"
						placeholder="Enter last name" pattern="[a-zA-Z]+" required>
					</div>
					<br>
					<div>
						<label>Email *</label>
						<input type="email" name="email"
						placeholder="Enter email" required>
					</div>
					<br>
					<div>
						<label>Telefon</label>
						<input type="text" name="telefon"
						placeholder="Enter phone number" pattern= "[0-9]">
					</div>
					<br>
					<div>
						<label>Önskad Sektion *</label>
						<select name="section">
							<option value="administerIT">AdministerIt</option>
							<option value="biljonsen">Biljonsen</option>
							<option value="blädderiet">Blädderiet</option>
							<option value="dansen">Dansen</option>
						</select>
					</div>
					<br>
					<div class="submitbtn">
						<input type="button" name="applicationBtn" id="applicationBtnId" onclick="applicationSubmit()" value="Submit" >
					</div>
				</form>
			</div>
			<aside class="box-3-ansök"> <!--Aside-->	
				<div class="NyhetWrapper2">
					<h1>Vakanta Platser Inom Lundakarnevalen!</h1>
					<article class="nyhet1">
						<h2>Vakanta platser Inom Inom Dansen: 39</h2>
						<img class="nyhetsbild1" src="images/Lundakarnevalen201001.jpg" alt="Vakant position för Koreograf>">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper tempus porta. Nullam tincidunt varius efficitur. In imperdiet velit vel neque fermentum bibendum. Morbi vestibulum vulputate magna, id auctor nisl feugiat eget. Nulla gravida justo sit amet dictum pretium. Nam congue, felis eu condimentum commodo, leo enim elementum mi, nec bibendum turpis dolor id nunc. Quisque scelerisque gravida fermentum. Praesent lorem felis, aliquet et diam non, dapibus ullamcorper diam.

							Etiam non tempor felis. Morbi ornare, dui vel porta condimentum, ante elit fermentum tellus, ut dictum ex eros in elit. Mauris orci dui, tincidunt sit amet leo in, vulputate tincidunt quam. Praesent fringilla porttitor velit, sed tempus tortor varius vitae. Vivamus placerat tempor ante, tempus congue ligula pretium non. Maecenas blandit, ante et efficitur finibus, augue metus ultrices magna, ac interdum lorem nisl eget eros. Nam egestas euismod dui sed sollicitudin. Donec fermentum velit nec urna fermentum, feugiat dictum odio eleifend. Mauris posuere porttitor justo.
						</p>
					</article>
					<article class ="nyhet2">
						<h2>Vakanta platser Inom AdministerIT: 89</h2>
						<img class = "nyhetsbild2" src="images/systemadmin.jpg" alt ="Vakant position som systemadministratör">
						<p> Vestibulum porta finibus orci, eu gravida diam tincidunt eget. Duis maximus scelerisque leo, a tristique dui blandit nec. Nullam bibendum felis sed pellentesque sodales. Etiam tempus lacus vel est imperdiet, eget rhoncus lacus porta. Etiam nec dignissim nunc, quis ultricies dui. Quisque vitae efficitur metus. Phasellus non sodales quam. Suspendisse ut felis elit. Duis nibh arcu, aliquet ac imperdiet vitae, lobortis vitae ipsum. Nullam porttitor magna a odio viverra vestibulum. Morbi tincidunt at eros a commodo. Suspendisse potenti. Nulla odio turpis, auctor vel orci ac, finibus porttitor dui. Praesent mollis lacus ac est rhoncus, eget varius mauris faucibus. Maecenas orci mi, imperdiet at ultrices quis, viverra at ipsum.

						Cras scelerisque risus sapien, id eleifend mi iaculis at. Integer urna justo, viverra a pharetra sed, fermentum at mauris. Fusce ac aliquam massa. Integer sodales tellus id urna ultrices dapibus. Mauris non leo tempor ligula ullamcorper egestas nec non nibh. Aliquam erat volutpat. Nullam ullamcorper posuere tortor ut vulputate. Quisque et euismod ipsum, nec laoreet arcu. Sed eu semper nibh. Cras eu ex risus.</p>
					</article>
					<article class="nyhet3">
						<h2>Antalet Vakanta Platser Inom Biljonsen: 18</h2>
						<img class= "nyhetsbild3" src="images/ekonomiassistent.png" alt="Vakant position som ekonomiassistent">
						<p>Ut tempor arcu fringilla massa facilisis, ac ultrices quam pellentesque. Donec hendrerit consequat magna, vitae mollis lacus egestas in. Aenean venenatis volutpat ullamcorper. Maecenas elementum quam sit amet nibh blandit, eget vulputate neque dapibus. Proin egestas ante risus, nec pellentesque lectus venenatis id. Integer sagittis finibus massa, lobortis venenatis ipsum rutrum nec. Aliquam lorem odio, feugiat condimentum velit eu, tempus pharetra velit. Phasellus nibh purus, malesuada sit amet laoreet a, iaculis ut purus. Maecenas pulvinar finibus tellus, in scelerisque urna pharetra ut.

							Morbi porttitor magna condimentum ipsum blandit luctus. Suspendisse non mattis arcu, nec accumsan elit. Nunc quam nunc, bibendum tincidunt turpis sit amet, lacinia fermentum lectus. Phasellus dictum metus ante. Nullam nibh lectus, lobortis eget nulla vitae, elementum pretium mauris. Aenean dapibus augue erat, venenatis commodo est ornare a. Vestibulum mauris justo, imperdiet vitae porttitor ac, facilisis eget dui. Nam finibus tincidunt nibh, vel pharetra tortor efficitur nec. Ut porttitor libero vitae libero rutrum, a porttitor mi semper. Praesent laoreet arcu eget ex porta, non aliquet est mattis. Quisque iaculis massa nec malesuada commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur in justo eu felis varius porta. Nunc pharetra eget mi vitae molestie. Nam id finibus erat, nec pellentesque orci.
						</p>
					</article>
					<article class="nyhet4">
						<h2>Antal Vakanta Platser Inom Blädderiet: 92</h2>
						<img class= "nyhetsbild4" src="images/blädderiet.jpg" alt="Vakant position inom blädderiet">
						<p>Duis id sem dignissim, malesuada nisi ac, sagittis felis. Duis a elit lacus. In venenatis venenatis felis non viverra. Quisque nec eros vitae nisi interdum euismod pellentesque vitae nibh. Maecenas aliquet eget erat non luctus. Sed eget lacinia neque. Maecenas ligula felis, egestas viverra nisl vitae, vestibulum scelerisque nisi. Cras nec urna non sem fermentum suscipit ac iaculis mi. Sed magna nibh, maximus at risus pretium, hendrerit commodo felis. Sed viverra magna a sapien faucibus, a gravida orci tempor. Nam vulputate maximus augue non cursus. Integer faucibus diam suscipit justo congue, at aliquam neque sollicitudin. Sed sit amet nulla at nisi ultricies consequat. Donec eu fringilla nisl.

							Suspendisse ligula enim, blandit tempor hendrerit id, egestas a urna. Ut mollis metus nec arcu auctor cursus. Curabitur sagittis leo placerat lectus hendrerit, sit amet dignissim ligula malesuada. Vivamus eu ipsum rutrum, ullamcorper nisi et, venenatis diam. Sed dapibus tortor vitae fringilla bibendum. Curabitur eget metus cursus, volutpat enim at, tempus dolor. Vestibulum lacinia augue risus, vel lacinia nibh congue vel.
						</p>
					</article>
				</div>
			</aside>
		</main>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>

	</html>
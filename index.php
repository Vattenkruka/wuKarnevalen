
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
			<section class="box-1"> <!--Section-->
				<div class="bild-1-wrapper">
					<h1> Karnevalståget</h1>
					<div class="mySlides1">
						<img src="images/Karneval02.jpg" style="width:100%">
					</div>
					<div class="mySlides1">
						<img src="images/Karneval2010020.jpg" style="width:100%">
					</div>
					<div class="mySlides1">
						<img src="images/Karneval2010022.jpg" style="width:100%">
					</div>
					<div class="mySlides1">
						<img src="images/Karneval2010025.jpg" style="width:100%">
					</div>
				</div>
				<div class="bild-2-wrapper">
					<h1> Karnevalister</h1>
					<div class="mySlides2">
						<img src="images/Karneval2010069.jpg" style="width:100%">
					</div>
					<div class="mySlides2">
						<img src="images/Karneval2010072.jpg" style="width:100%">
					</div>
					<div class="mySlides2">
						<img src="images/Karneval2010076.jpg" style="width:100%">
					</div>
					<div class="mySlides2">
						<img src="images/Karneval2010002.jpg" style="width:100%">
					</div>
				</div>
			</section>
			<div class="box-2"> <!--Main-->
				<h3> Välkommen till LundaKarnevalen </h3>
				<p>Aliquam lectus odio, dapibus et efficitur vel, facilisis at est. Maecenas pulvinar convallis pulvinar. Curabitur dictum lobortis ante vitae placerat. Nam turpis sapien, convallis sit amet tincidunt non, aliquam id orci. In lorem est, pharetra quis ipsum ut, condimentum rhoncus magna. Praesent eu tempor erat. Nullam dui nulla, condimentum vitae laoreet id, elementum quis velit. Cras ac magna vitae metus maximus lobortis. Sed eget vestibulum dolor. Fusce et enim et purus dapibus imperdiet ut quis elit. Suspendisse convallis massa nibh, vitae dictum arcu rhoncus non. Pellentesque sodales nulla sed urna interdum, a tincidunt nisl feugiat. Donec sodales auctor justo, ac blandit felis imperdiet et.</p>
				<p>
				Praesent interdum urna eget tincidunt interdum. Vivamus suscipit a turpis id rutrum. Quisque tincidunt at tellus sed dictum. Quisque eget vulputate justo. Maecenas eget malesuada ipsum, in commodo ligula. Duis sit amet semper ante. Aenean sed imperdiet orci, nec auctor nunc. Phasellus molestie et metus congue venenatis. Pellentesque aliquet porttitor libero, ac vulputate lacus pretium et. Nunc ultrices enim eget lacus vestibulum condimentum. Maecenas tortor ante, commodo quis tempus et, porttitor id massa. Pellentesque eu auctor libero. Quisque eleifend est ligula, a semper tellus condimentum quis. Vivamus venenatis enim diam, sit amet posuere tortor varius non. Fusce euismod egestas sapien a tempus.</p>
			</div>
			<aside class="box-3"> <!--News-->	
				<div class="NyhetWrapper">
					<?php
					require('dbConnection.php');
					$resultTable = mysqli_query($db_conn, "SELECT headline,image, nmessage FROM newsTable");
					while ($array = mysqli_fetch_array($resultTable)) {

						echo "<div class='comment-body'> <h3> ". $array[0] . "</h3><p>" . $array[1] . "</p>" . $array[2] ."</div>";

					}


					$db_conn->close();

					?>
					<article class="nyhet1">
						<h2> Detta är en nyhet om en robot </h2>
						<img class="nyhetsbild1" src="images/bild1.jpg" alt="nyhetsbilds>">
						<p>Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
						</p>
					</article>
					<article class ="nyhet2">
						<h2> Detta är inte en nyhet om en robot </h2>
						<img class = "nyhetsbild2" src="images/Karneval2010010.jpg" alt ="nyhetsbild">
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
					</article>
					
				</div>
			</aside>
		</main>
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</body>
	<script src='main.js'> </script>
	</html>
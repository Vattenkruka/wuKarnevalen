<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LundaKarnevalen 2022</title>
	<link rel="shortcut icon" type="image/jpg" href="images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header id="main-header">
		<div class="container">
			<a href="index.php">
				<h1> LundaKarnevalen </h1>
				<a href="index.php">
					<div class="img-logga">  
						<img class="Logga" src="images/LundaKarnevalen2022Logga.png" alt="logotyp">
					</div>
				</div>
				<nav id="navbar">
					<ul>
						<li><a> Bli Karnevalist ▼</a> 
							<ul>
								
								<li><a href="bliKarnevalist.php">Bli Karnevalist! </a></li>
								
								<li><a href="ansök.php"> Ansök</a></li>

								<li><a> Sektioner </a>
									<ul>
										<li><a href="sektioner.php"> Alla sektioner</a></li>
										<li><a href="administerIT.php"> AdministerIT</a></li>
										<li><a href="biljonsen.php"> Biljonsen</a></li>
										<li><a href="blädderiet.php"> Blädderiet</a></li>
										<li><a href="dansen.php"> Dansen</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a> Om Karnevalen ▼</a>
							<ul>
								
								<li><a href="omKarnevalen.php">Om Karnevalen</a></li>
								<li><a href="nöjen.php"> Nöjen</a></li>
								<li><a href="artister.php"> Artister</a></li>
								<li><a href="tåget.php"> Tåget</a></li>
								<li><a href="faq.php" > FAQ</a></li>
								<li><a href="hittaHit.php"> Hitta hit</a></li>
							</ul>
						</li>
						<li><a href="reserveraBiljetter.php"> Reservera Biljetter</a></li>
						<li><a href="gästbok.php"> Gästbok</a></li>
					</ul>
				</nav>
			</header>
			<main>
				<div class="gap-40"></div>

				<div class="container-2-nöje">
					<aside class="box-3-nöje"> <!--News-->	
							<h1> Frequently Asked Questions</h1>
						<div class="Nöjenwrapper">
							<article class="nöje1">
								<h2> Fråga 1? </h2>
								<p>Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>
								<h2> Fråga 3? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>
								<h2> Fråga 5? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>
								<h2> Fråga 7? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>

							</article>
							<article class ="nöje2">
								<h2> Fråga 2? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.</p>
								<h2> Fråga 4? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>
								<h2> Fråga 6? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>
								<h2> Fråga 8? </h2>
								<p> Nulla consectetur, nunc eu sodales congue, risus risus dignissim nulla, quis venenatis augue nisi molestie elit. Sed venenatis porttitor ultricies. Nunc ante arcu, efficitur eu scelerisque maximus, aliquam at magna. Maecenas sit amet lorem ac odio eleifend iaculis nec ac purus. Duis vel nulla fringilla, convallis purus quis, condimentum nisl.
								</p>

							</article>			
						</div>
					</aside>

					<?php
					define ('DB_USER','4003497-db10');
					define('DB_PASSWORD','REWvoJs6');
					define('DB_HOST','my06s.sqlserver.se');
					define('DB_NAME','4003497-db10');


					$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
					OR die ('No DB-connection via MySQLi');

					echo "<h2>Diskussionsforum</h2>";

					$db_conn->close();

					?>
					<div class="commentHeader">
						<h2> Comment Section </h2>
					</div>
					<div class="commentsection">
						<div class="commentSide">
							<h3>Comments </h3>
							<div class="comment-wrapper">
								<div class="comments-list">

									<ul class ="comments-holder-ul">

										<li class="comment-holder" id="_1"> 

											<div class="comment-body">
												<h3 class="name-field">
													Stenkil Dahlquist
												</h3>

												<div class="comment-text">
													Snygg hemsida! Hur får man tag på karnevalsbiljetter?
												</div>
											</div>
										</li>
										<li class="comment-holder" id="_1"> 
											<div class="comment-body">
												<h3 class="name-field">
													Greger Arnshed
												</h3>
												<div class="comment-text">
													Hej! Vilka är artisterna för i år?
												</div>
											</div>
										</li>
										<li class="comment-holder" id="_1"> 
											<div class="comment-body">
												<h3 class="name-field">
													Arnold "The Terminator" Schwarzenegger
												</h3>
												<div class="comment-text">
													I'll be back!
												</div>
											</div>
										</li>
										<li class="comment-holder" id="_1"> 
											<div class="comment-body">
												<h3 class="name-field">
													Elon Musk
												</h3>
												<div class="comment-text">
													Vilken futuristisk och bra hemsida!
												</div>
											</div>
										</li>
										<li class="comment-holder" id="_1"> 
											<div class="comment-body">
												<h3 class="name-field">
													Bill Gates
												</h3>
												<div class="comment-text">
													Remember that your most unhappy customers are your greatest source of learning.
													Success is a lousy teacher. It seduces smart people into thinking they can't lose.
													Life is not fair; get used to it.
												</div>
											</div>
										</li>
										<li class="comment-holder" id="_1"> 
											<div class="comment-body">
												<h3 class="name-field">
													Johan Glans
												</h3>
												<div class="comment-text">
													A Sql-statement walks into a bar and sees two tables, it approaches and asks: "May I join you?"
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
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
									<textarea name="comment" form="commentForm" id="commentTextArea"
									placeholder="Enter Your Comment!" required></textarea>
								</div>
								<br>
								<button input type="button" name="commentBtn" id="commentBtnId" onclick="commentSubmit()" value="Submit"> Post!</button>
							</form>
							</div>
						</div>
					</main>
					<footer>
						<div class="footer"> 
							<div class="left-footer">
								<h2> Contact Info</h2>

								<p> Email:Lundakarnevalen@gmail.com <br>
									Phone:<a href="tel:123-456-7890">123-456-789</a>
								</p>
							</div>
							<div class= "center-footer">
								<h2> Nästa Karneval </h2>
								<ul>
									<li><span id="days"></span>Days</li>
									<li><span id="hours"></span>Hours</li>
									<li><span id="minutes"></span>Minutes</li>
									<li><span id="seconds"></span>Seconds</li>
								</ul>
							</div>
							<div class="right-footer">
								<h2> Social Media</h2>
								<a href="https://www.facebook.com/Lundakarnevalen/" target="_blank">
									<div class="facebook-wrapper"> 
										<img class="facebooklogo" src="images/facebooklogo.png" alt="Facebooklogo>">
									</div>
									<a href="https://twitter.com/lundakarnevalen?lang=en" target="_blank">
										<div class="twitter-wrapper"> 
											<img class="twitterlogo" src="images/twitterlogo.png" alt="Twitterlogo>">
										</div>
										<a href="https://www.instagram.com/lundakarnevalen/?hl=en" target="_blank">
											<div class="instagram-wrapper"> 
												<img class="instragramlogo" src="images/instagramLogo.png" alt="Instagramlogo>">
											</div>
											<a href="https://www.youtube.com/user/lundakarnevalen" target="_blank">
												<div class="youtube-wrapper"> 
													<img class="youtubelogo" src="images/youtubelogo.png" alt="Youtubelogo>">
												</div>
											</div>
										</div>
									</footer>
								</body>
								<script src="main.js"></script>

								</html>
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
							<textarea name="comment" form="commentForm" id="commentTextArea"
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
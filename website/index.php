<html>
	<head>
		<title>Mobile Application for Musicians</title>
		<link rel="stylesheet" href="css/product.css" />
		<link rel="stylesheet" href="css/photo-viewer.css" />
		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/photo-viewer.js"></script>
	</head>
	<body>
		<h1>Mobile Application for Musicians</h1>
		<a href="team.html">The Team</a>
		<hr />
		<h2><b>Product Description</b></h2>
		<p>The product we plan to build is a social media iOS mobile application designed for musicians and ultimately anyone who has a desire to learn an instrument,
		   regardless of musical ability.  Some key features of our application would include an eBay-like marketplace for buying and selling instruments, finding a tutor,
		   and bringing musicians together through local concerts and jam sessions.  The goal of our application is to meet anybody at any musical skill level and help them
		   improve and enjoy playing music.  For users with no prior musical experience, we would want them to be able to start playing music in as streamlined of a process
		   as possible.  They would be able to find a cheap instrument to buy on the marketplace, find a tutor in their area, and organize a lesson, all within our
		   application.  For more musically-experienced users, they could find a more suitable tutor for their skill level.  A section of the application would include a map
		   of all local concerts and "jam sessions" nearby, helping musicians come together and perhaps even form the next big band.  Overall, this application would
		   be capable of meeting anybody wherever they're at musically and help them improve, all the while enjoying playing music.</p>
		<hr />
		
		<?php
			if (isset($_REQUEST["feedback"])) {
				echo "Thank you for your feedback!";
				
				$feedbackText = fopen("feedback.txt", "a+") or die("Unable to open file!");
				$userFeedback = $_REQUEST["feedback"];
				fwrite($feedbackText, $userFeedback . PHP_EOL . PHP_EOL);
				fclose($feedbackText);
			}
			else {
		?>
		
		<p>Send us feedback:</p>
		<form action="index.php" method="GET">
		<input type="text" name="feedback">
		<br /><input type="submit" value="Submit">
		
		<?php
			}
		?>
		
		<hr />
		<p><i>Original mock screenshots of the product made using the Justinmind prototyping tool</i></p>
		<img src="img/product_pic1.png" />
		<img src="img/product_pic2.png" />
		<img src="img/product_pic3.png" />
		<br />
		<hr />
		<p><i>New interface sketches</i></p>
		<section class="page panel">
			<div class="gallery">
				<div id="photo-viewer"></div>
				<div id="thumbnails">
					<a href="img/Photo(1).jpg" class='thumb active' title="One">
						<img src="img/Photo(1).jpg" alt="One" height="67" width="50"></a>
					<a href="img/Photo(2).jpg" class='thumb' title="Two">
						<img src="img/Photo(2).jpg" alt="Two" height="67" width="50"></a>
					<a href="img/Photo(3).jpg" class='thumb' title="Three">
						<img src="img/Photo(3).jpg" alt="Three" height="67" width="50"></a>
				</div>
			</div>
		</section>
		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/photo-viewer.js"></script>
	</body>
</html>
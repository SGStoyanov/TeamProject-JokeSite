<!DOCTYPE html>
<html>
	<head>
		<title>JokeUni</title>
		<meta charset="UTF-8"/>
		<link href="Images/favicon.png" type="text/ico" rel="shortcut icon"></link>
		<link href="styles/JokeUniMainStyle.css" rel="stylesheet" type="text/css"></link><!-- Main Style -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Pacifico|Raleway:400,700|Lily+Script+One&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css"> --><!-- Additional font - disabled -->
		<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'></link><!-- Additional font -->
	</head>
	
	<body>
		<header>
			<?php include ('header.php'); ?>
		</header>

		<nav>
			<ul>
				<li><a href="index.php" class="navigation">Начало</a></li>
				<li><a href="quotes.php" class="navigation">Цитати</a></li>
				<li><a href="jokes.php" class="navigation">Бисери</a></li>
				<li><a href="contact-us.php" class="navigation">Връзка с нас</a></li>
			</ul>
		</nav>
		
		<section>
			Some Text
		</section>
		
		<aside>
			<h2>Вицове за програмисти:</h2>
			<ul class="block">
				<li><a href="http://softuni.bg/forum/questions/details/38" target="_blank">1. SoftUniForum</a></li>
				<li><a href="http://animacii.net/humor/1624-zabavni-programisti-programirane-smeshni-smqh-humor.html" target="_blank">2. 101 начина да вбесите програмиста!</a></li>
				<li><a href="http://www.vicmania.com/?cat=1059&amp;paged=4" target="_blank">4. Виц Мания</a></li>
				<li><a href="http://www.yes.bg/fun/?cat=24" target="_blank">5. Още вицове</a></li>
			</ul>
			<div><img src="Images/LaughingFace.jpg" alt="LaughingFace" class="laughingFace"></div>
		</aside>
		
		<footer>
			<?php include('footer.php'); ?>
		</footer>
	</body>
</html>
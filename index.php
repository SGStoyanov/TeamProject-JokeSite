<!DOCTYPE html>
<html>
	<head>
		<title>JokeUni</title>
		<meta charset="UTF-8"/>
		<link href="Images/favicon.png" type="text/ico" rel="shortcut icon">
		<link href="styles/JokeUniMainStyle.css" rel="stylesheet" type="text/css"><!-- Main Style -->
		<link href='http://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'><!-- Additional font -->
	</head>
	<body>
		<header>
			<?php include('header.php');?>
		</header>
		<nav>
			<ul>
				<li><a href="index.php" class="navigation">Начало</a></li>
				<li><a href="quotes.php" class="navigation">Цитати</a></li>
				<li><a href="nakov.php" class="navigation">Нашият гуру</a></li>
				<li><a href="jokes.php" class="navigation">Бисери</a></li>
                <li><a href="contact-us.php" class="navigation">Връзка с нас</a></li>
			</ul>
		</nav>
		
		<section>
			<div class="mainPage">
				<h1>Добре дошли в нашия сайт <a href="index.php"><img src="Images/JokeUniLogo.jpg" alt="JokeUni logo"></a></h1>
				<h3>Нашето мото: "keep coding and joking"</h3>
				<h4>Нашата мисия: да накараме всички "IT-хора" да не се вземат много на сериозно.</h4>
				<p>Този сайт е направен от група кандидат-програмисти, които се бoрят за някоя и друга точка в повече,
				с цел да подобрят оценките си. Упс, пардон, знанията си...</p>
				<p style="color:white">Toва, че сайтът ни е пародия на нашата Alma mater <a href="http://softuni.bg" target="_blank"><img src="Images/SoftUniLogo.png" alt="SoftUni logo"></a>, май няма да ни помогне много,
				но се оставяме в ръцете и на добрата воля на трейнърите :))), а докато чакаме да ни хванат, ето и малко неизвестни, но важни факти за любимият ни трейнър (на чужд гръб и 100 тояги са малко): </p>
            </div>  
                
			<div class="mainPage">
				РАБОТЯ ПО ТОЗИ ДИВ
			</div>
			
			
		</section>
		
		<aside>
			<h2>Вицове за програмисти:</h2>
			<ul class="block">
				<li><a href="http://softuni.bg/forum/questions/details/38" target="_blank">1. SoftUniForum</a></li>
				<li><a href="http://animacii.net/humor/1624-zabavni-programisti-programirane-smeshni-smqh-humor.html" target="_blank">2. 101 начина да вбесите програмиста!</a></li>
				<li><a href="http://www.vicmania.com/?cat=1059&amp;paged=4" target="_blank">3. Виц Мания</a></li>
				<li><a href="http://www.yes.bg/fun/?cat=24" target="_blank">4. Още вицове</a></li>
			</ul>
			<div><img src="Images/LaughingFace.jpg" alt="LaughingFace" class="laughingFace"></div>
			<div id="softuni-logo">
				<a class="softuni-logo" href="https://softuni.bg/" target="_blank">
				    <img id="softuni-logo1" src="Images/softuni-logo.png" alt="Software University">
				</a>
			</div>
			
		</aside>
		
		<footer>
			<?php include('footer.php'); ?>
		</footer>
	</body>
</html>
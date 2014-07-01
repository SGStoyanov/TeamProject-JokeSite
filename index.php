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
				<li><a href="jokes.php" class="navigation">Бисери</a></li>
                <li><a href="photos.php" class="navigation">Колажи</a></li>
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
                
                <div>
                <h1>10 факта, които може би не знаете за Светлин Наков:</h1>
                1. Учени от академията на ТеРлик* откриха най-сигурната защита срещу вируси, червеи, spyware, коне и всички други злонамерени твари. Дори не е нужно „програмата“ да се подновява. Всъщност тя е едва няколкостотин kb. Трябва просто да си сложите снимка на Светлин Наков на десктопа и машината Ви се предпазва от всички вируси (дори от тези, които ще се измислят утре). Очаква се най-големите производители на антивирусен софтуер да прекратят работата си и да фалират.
                <br><br>
                2. Когато бил едва на 8 месеца, Наков изтрил папката „System32“ и компютърът му започнал да работи по-бързо.
                <br><br>
                3. По време на интервюто за работа в Microsoft Наков създал Word документ на личния лаптоп на Бил Гейтс. Направил го през калкулатора, който купил от кварталната книжарница в Каспичан. Не приел работата, защото вече бил измислил нова финална версия на Microsoft Office, където може да се сменя шрифтът чрез мисълта.
                <br><br>
                4. Линус Торвалдс спи с пижама с лика на Светлин Наков. Дори тайно разработили Linux дистрибуция под името Nakovuntu с offline Google, който се подновява постоянно.
                <br><br>
                5. Първата оценка на Наков в училище била 2 - по български език. Трябвало да напишат азбуката. Когато стигнал до „С“, той написал „С++“.
                <br><br>
                6. В мазето на ТеРлик академията Наков има свръхкомпютър, чрез който хаква сървърите на НАСА, Зона 51 и се свързва с „Тъмните сили“. Машината съдържа информация за цялата Вселена.
                <br><br>
                7. Наков има флашка с ∞ памет.
                <br><br>
                8. Докато се къпеш, Светлин Наков може да ти включи или изключи бойлера през JavaScript.
                <br><br>
                9. Наскоро го поканили на интервю за работа от друга галактика. Той обаче отказал, защото все още се придържа към идеята да направи Каспичан Силициевата долина на Европа.
                <br><br>
                10. Наков направил логото на ТеРлик академи на Тетрис, докато гледал „Американски нинджа“.
                </div>
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
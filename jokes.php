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
			<?php include ('header.php'); ?>
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
		
		<section class="short2">
			<h1>Ето ги и нашите ИЗцепки</h1>
			<p>
                Няма такава простотия: поправяш кода онлайн в GitHub, после правиш поправки в локалните си файлове,
				commit-ваш и merge-ваш сам себе си. Автор и патентни права: Юлия
            </p>
            <p>
                Може и някой ден да схвана как в крайна сметка работи тази костенурка (TortoiseGit), евентуално... :)
                <br>
                Стоян
            </p>
            <p>
            	Да гледаш 30 минутен клип как да инсталираш Windows 7 и Linux на своя компютър и след това да си форматираш целия хард диск - безценно! Автор и патентни права:  Теодор
            </p>
            <h2>Вицове за програмисти:</h2>
			<p>
                Колко програмисти трябват, за да убият една хлебарка?
				<br>Отговор	: Двама - единият да я държи да не мърда, докато другия й инсталира Windows 98.
            </p>
            <p>
                Към директора на пивоварна от група програмисти: 
				Молба 
				Молим, да ни включите към завода по наета линия със скорост 0.5 л/с.
            </p>
            <p>
            	Разговор с потребител по телефона: - Сложете курсора върху иконката и натиснете десния бутон на мишката. - 
				Нямам такъв бутон! И двата са ми леви. - Завъртете мишката по часовниковата стрелка на 90 градуса. 
				- Охо..Така е доста по-удобно!
            </p>
		</section>
		
		<aside class="short">
			<h2>Вицове за програмисти:</h2>
			<ul class="block">
				<li><a href="http://softuni.bg/forum/questions/details/38" target="_blank">1. SoftUniForum</a></li>
				<li><a href="http://animacii.net/humor/1624-zabavni-programisti-programirane-smeshni-smqh-humor.html" target="_blank">2. 101 начина да вбесите програмиста!</a></li>
				<li><a href="http://www.vicmania.com/?cat=1059&amp;paged=4" target="_blank">4. Виц Мания</a></li>
				<li><a href="http://www.yes.bg/fun/?cat=24" target="_blank">5. Още вицове</a></li>
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
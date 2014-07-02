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
		
		<section>
			<h1>Забавни мисли на известни и НЕизвестни програмисти</h1>
			<dl>
				<dt>"Не може да правиш страхотен софтуер без страхотен тим, а повечето софтуерни тимове се държат като семейства пред развод."</dt>
					<dd>Джим Маккарти</dd>
				<dt>"Обектно ориентираната версия на 'спагети код', естествено, e 'лазаня код' - твърде много слоеве."</dt>
					<dd>Роберто Уолтман</dd>
				<dt>"PHP е малко зло извършено и създадено от некомпетентни аматьори, докато Perl е голямо и коварно зло извършено от умели, но перверзи професионалисти."</dt>
					<dd>Йон Рибенс</dd>
				<dt>"FORTRAN не е цвете, а плевел - издръжлив е, понякога цъфти и расте във всеки компютър."</dt>
					<dd>Алън Перлис</dd>
				<dt>"Ако Макдоналдс беше софтуерна компания, един на всеки сто БигМак-а щеше да причинява хранително отравяне и отговора щеше да е 'съжаляваме, ето ви купон за още два'."</dt>
					<dd>Марк Минаси</dd>
				<dt>"Внимавайте за бъгове в горния код. Аз само доказах че е верен, но не съм го пробвал."</dt>
					<dd>Доналд Кнут</dd>
				<dt>"Не ме интересува дали работи на вашата машина. Аз не ви доставям машините."</dt>
					<dd>Видю Платон</dd>
				<dt>"Понякога си струва да останеш в леглото в понеделник, отколкото да похабиш цяла седмица дебъгвайки понеделнишкия код."</dt>
					<dd>Кристофър Tомпсън</dd>
				<dt>"Да съдиш за програма по редовете код, е като да съдиш за самолет по тонажа."</dt>
					<dd>Бил Гейтс</dd>
				<dt>"На първо място, дебъгването е двойно по-трудно от писането на код. Следователнно, ако пишеш кода максимално умно, по дефиниция няма да си достатъчно умен да го дебъгнеш."</dt>
					<dd>Браян Керниган</dd>
				<dt>"Повечето от днешния софтуер е като египетска пирамида с милиони тухли насипани една върху друга, без структурна цялост, просто направени с груба сила и хиляди роби."</dt>
					<dd>Алан Кей</dd>
				<dt>"Проблемът с програмистите е, че никога не можеш да разбереш какво прави един програмист преди да е станало твърде късно."</dt>
					<dd>Сиймър Крей</dd>
				<dt>"Два пъти съм бил питан (от членове на Парламента):' Мистър Бабидж, ако въведете в машината грешни данни, ще изведе ли правилен отговор?'. Аз съм неспособен да проумея какво объркване на идеи може да доведе до подобен въпрос."</dt>
					<dd>Чарлз Бабидж</dd>
				<dt>"Повечето добри програмисти програмират не защото очакват да им се плати или да получат похвала от публиката, а защото е забавно да програмираш."</dt>
					<dd>Линус Торвалдс</dd>
				<dt>"Винаги пиши код така, сякаш човека, който ще го поддържа е опасен психопат, който знае къде живееш."</dt>
					<dd>Мартин Голдинг</dd>
				<dt>"Има два начина да направиш софтуерен дизайн. Първият е да го направиш толкова прост, че очевидно да няма недостатъци. Вторият е да го направиш толкова сложен, че да няма очевидни недостатъци."</dt>
					<dd>Тони Хоър</dd>
				<dt>"The greatest inspiration is the deadline!!"</dt>
					<dd>Стамо Гочев (Софтуерна Академия Телерик)</dd>
			</dl>
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
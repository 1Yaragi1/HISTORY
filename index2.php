<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HISTORY</title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="container">
				<div class="header__row">
					<div class="header__logos">
						<a href="index2.php"><img src="img/icon/logo.png" alt="logo"></a>
						<a href="index2.php" class="header__logotxt">HISTORY</a>
					</div>
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="header__search">
							<input class="header-search" type="text" placeholder="Введите содержимое по тематике"><img src="img/icon/search.png" alt="search">
						</div>
					</form>
					<div class="header__enter">
						<a href="index.html"><?= $_SESSION['user']['login'] ?></a>
						<a href="#"><img src="img/icon/Enter.png" alt="enter"></a>
					</div>
				</div>
			</div>


				<section class="content">
					<div class="container">
						<div class="content__row">
							<div class="content__contents">
								<h1 class="content__title title">
								Тема: Основные этапы информатизации общества
								</h1>

								<h2 class="content__subtitle title">Введение</h2>

								<div class="content__text">
									<p>Информатизация является одним из самых ярких моментов организации общественных отношений передовых государств. Человеческое сообщество подошло к такому периоду своего эволюционного развития, в котором информация и познания стали определяющим фактором во всех областях человеческой деятельности. При этом информация стала в сегодняшнем обществе самым важным параметром экономического развития. Необходимо отметить, что технологическое развитие считается сегодня не просто основным параметром, обеспечивающим благополучие человечества, но и самым важным условием его постоянного прогресса. Причём самое главное внимание должно уделяться именно информационным технологиям, обладающим каталитическими свойствами, и поэтому активно содействующим технологическому рывку государства не только в сфере информации, но и в других важнейших направлениях.</p>
									<p>
									В нынешнем информационном сообществе возрастает роль информации как товара. Это следствие общего возрастания потребностей в информации и выражение прогресса сферы информационных услуг. Свидетельством этому является возрастание доли информационного сектора в формирование национального достояния.
								    </p>
								</div>

								<h2 class="content__subtitle title">
									Основные этапы информатизации общества
								</h2>

								<p class="content__label">В истории развития человеческого общества можно выделить следующие этапы, которые принято считать информационными революциями, внёсшими существенные коррективы в его развитие:
								</p>
								<ol class="content__list">
									<li>Этап связан с появлением письменности. Это привело к огромному качественному и количественному скачку в развитии людского сообщества. Появилась возможность накопления знаний и передачи их следующим поколениям людей, то есть возникли методики и средства, позволяющие накапливать информацию.</li>
									<li>Этап, который произошёл в середине шестнадцатого века, связан с изобретением печатания книг. Это событие явилось новым методом информационного хранения, и, помимо этого, позволило сделать доступнее культурное наследие человечества.</li>
									<li>Этап, наступивший в конце девятнадцатого века, был обусловлен изобретением электричества и приборов на его основе. Были изобретены телеграфная и телефонная связь, затем появилась радиосвязь. Всё это позволяло оперативно транслировать и копить информационные данные практически в любых объёмах. То есть, были разработаны методы и средства информационной коммуникации.</li>
									<li>Этап стартовал в семидесятые годы прошлого века и сопряжён с изобретением микропроцессорных технологий и появлением персонального компьютера. Основание этого революционного прорыва было заложено ещё в сороковые годы двадцатого века, и это было изобретение электронных вычислительных машин. Этот революционный скачок послужил толчком к переходу нашей цивилизации от индустриального общества к информационному сообществу, где очень большое количество работников занимается воспроизводством, сохранением, обработкой и реализацией информации, включая её высшую форму, называемую знанием. Началом этого процесса стало проникновение в разные области человеческой деятельности передовых технологий обработки и трансляции информационных данных. Данный процесс и является информатизацией общества.</li>
								</ol>

								<div class="content-text">
									Информатизация общества считается процессом, при котором формируются условия, отвечающие потребностям людей в приобретении требуемых информационных данных. Ещё сравнительно недавно вместо «информатизации» применялся термин «компьютеризация», означающий разработку и повсеместное использование компьютерного оборудования. Однако термин «информатизация сообщества» стал более обширным понятием, поскольку на сегодняшний день базовым считается не столько техническое оборудование, сколько направления и целевые установки социального и технического прогресса, в общем и целом. Компьютеры выступают лишь частью этого процесса, называемого информатизацией общества, его основным техническим компонентом.
								</div>

								<h2 class="content__subtitle title">
									Характерные черты информационного общества
								</h2>

								<p class="content__label2">
									Главными чертами информационного общества являются следующие:
								</p>

								<ol class="content__list2">
									<li>Возрастание информационных объёмов ведёт к тому, что люди самостоятельно не могут их обрабатывать. Для этого им требуется применять специализированное компьютерное оборудование.</li>
									<li>Производство информационных продуктов становится основной движущей силой сообщества. Вторая половина двадцатого века ознаменовалась появлением целого социального слоя, названного белыми воротничками, то есть это работники, которые не производят материальных ценностей, но занимаются информационной обработкой.</li>
									<li>Возрастает значение и доля умственного труда, поскольку производственным продуктом информационного сообщества будут интеллектуальные знания.</li>
									<li>Будет выполнена переоценка ценностей, жизненного уклада и поменяется сфера культурного досуга. Уже сегодня компьютерные игры составляют значительную часть свободного времени очень многих людей. Кроме того, всё больше распространяются сетевые игры. Увеличиваются временные интервалы, проводимые людьми в сети Интернет, где возможно осуществлять «путешествия» по сайтам самых разных направлений, связанным, например, с образованием, виртуальными музеями, общением между пользователями, чтением книг.</li>
									<li>Предстоит дальнейшее развитие компьютерного оборудования, компьютерных сетей, информационных технологий.</li>
									<li>Будут разрабатываться новые типы электронных компьютеризированных бытовых приборов. Есть предположения, что жилые дома будут оснащены едиными информационными кабелями, которые будут исполнять все функции по информационным связям, куда, естественно, должны войти все телевизионные каналы и связь с сетью Интернет. А специализированный электронный модуль должен выполнять контроль над всей бытовой техникой.</li>
								</ol>

								<div class="content__go"><a href="#">Далее</a></div>
								<div class="content__author"><a href="https://spravochnick.ru/informatika/osnovnye_etapy_informatizacii_obschestva/#osnovnye-etapy-informatizacii-obschestva">Автор статьи: Сергей.А.Д</a></div>
							</div>
							<div class="content__catalog">
								<div class="content__head">
									<h3 class="content-catalog">Каталог</h3>
									<div class="content__arrow">
										<img src="img/icon/right-arrow.png" alt="arrow">
									</div>
								</div>

								<div class="content__links">
									<a href="#" class="content__link">
										1. Тема: Основные этапы информатизации общества.
									</a>
									<a href="#" class="content__link">
										2. Тема: «История появления информационных технологий.
									</a>
									<a href="#" class="content__link">
										3. Тема: «Особенности функционирования первых ЭВМ.
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
		</div>


		<div class="footer">
			<div class="container">
				<div class="footer__row">
					<div class="footer__logos">
						<p class="footer__logo">HISTORY</p>
						<p class="footer__tel">Тел: +7 (928) 050 22-72</p>
						<p class="footer__email">Почта: IconKhamel@mail.ru</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
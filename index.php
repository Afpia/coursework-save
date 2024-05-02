<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Страховая компания Save's</title>
	<link type="image/x-icon" rel="shortcut icon" href="./assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
	<link type="image/png" sizes="192x192" rel="icon" href="./assets/favicon/android-chrome-192x192.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body data-barba="wrapper" class="">
	<div class="app">
		<div class="fade" data-barba="container" data-barba-namespace="home" style="overflow: hidden;">
			<div class="preloader">
				<div class="preloader__loader">
					<img src="./assets/header/logo.png" alt="Logo" class=" preloader__logo" />
				</div>
			</div>
			<header class="header" id="header">
				<div class="header__gradient"></div>
				<div class="wrapper">
					<div class="header__inner">
						<a data-off-click class="header__logo" href="./"><img src="./assets/header/logo.png" alt="Logo" class="logo" /></a>
						<nav class="header__nav">
							<ul class="header__list">
								<a data-off-click href="./" class="header__nav-link active">
									<li>Главная</li>
								</a>
								<a href="#choice" class="header__nav-link">
									<li>Страхование</li>
								</a>
								<a href="#" class="header__nav-link">
									<li>О нас</li>
								</a>
							</ul>
						</nav>
						<div class="header__right">
							<button class="header__call">Позвонить</button>
							<a href="./page/login.php" class="header__login"><img src="./assets/header/key.svg" alt="Key-login" class="header__key" />Войти</a>
						</div>
					</div>
				</div>
			</header>
			<main>
				<section class="home">
					<div class="wrapper">
						<div class="home__inner">
							<h1 class="home__title">Save's страховая компания</h1>
							<div class="home__benefits">
								<div class="home__benefits-1">
									<img src="./assets/index/asterisk.svg" alt="Asterisk" class="logo" />
									<p>Наше страхование позволяет экономить страхователям 30% - 60%</p>
								</div>
								<div class="home__benefits-2">
									<img src="./assets/index/asterisk.svg" alt="Asterisk" class="logo" />
									<p>Мы предлагаем на выбор низкие цены страхования и включаем бесплатные дополнительные услуги.</p>
								</div>
								<a class="home__benefits-arrow" href="#choice">
									<img src="./assets/index/bottom-arrow.png" alt="Arrow-bottom" />
								</a>
							</div>
							<div class="home__block-img">
								<img src="./assets/index/main.png" alt="Main-picture" class="home__img" />
							</div>
						</div>
					</div>
				</section>
				<section class="choice" id="choice">
					<div class="wrapper">
						<div class="choice__inner">
							<div class="choice__row">
								<a href="#" class="choice__item-1 choice__item">
									<img src="./assets/index/image-1.jpg" alt="1" />
									<button class="choice__button">Страхование жилья</button>
								</a>
								<a href="#" class="choice__item-2 choice__item">
									<img src="./assets/index/image-2.png" alt="2" />
								</a>
								<div class="choice__item-3">
									<div class="choice__header">
										<h2>Лучший выбор</h2>
										<p>Не все страховки одинаковы. Поэтому поэтому агентство знает, что ваша страховка должно быть адаптировано к вашей ситуации.</p>
									</div>
									<button>Все услуги</button>
								</div>
							</div>
							<div class="choice__row-second">
								<a href="#" class="choice__item-4 choice__item">
									<img src="./assets/index/image-3.png" alt="3" />
									<button class="choice__button">Автострахование</button>
								</a>
								<a href="#" class="choice__item-5 choice__item">
									<img src="./assets/index/image-4.png" alt="4" />
									<button class="choice__button">Страхование ипотеки</button>
								</a>
								<a href="#" class="choice__item-6 choice__item">
									<img src="./assets/index/image-5.png" alt="5" />
									<button class="choice__button">Все для здоровья</button>
								</a>
							</div>
						</div>
					</div>
				</section>


				<section class='about'>
					<div class='wrapper'>
						<div class="about__inner">
							<div class="about__swiper swiper">
								<div class="about__swiper-wrapper swiper-wrapper">
									<!-- Slides -->
									<div class="about__slide swiper-slide">
										<img src="./assets/index/women.png" alt="Women">
										<div class="about__content">
											<h2 class="about__name">
												Куприянова Софья
											</h2>
											<h3 class="about__subtitle">
												Основатель агентства
											</h3>
											<p class="about__text">
												Имея более чем двадцатилетний опыт работы в отрасли, "Страховая компания Save’s" многому научилась. Единственное, что мы знаем наверняка, - это то, что мы заботимся о вас. Если поиск страховки вызывает у вас затруднения, мы готовы помочь.
											</p>

											<button class="about__btn">
												Получить консультацию
											</button>
										</div>
									</div>
									<div class="about__slide swiper-slide"><img src="./assets/index/women.png" alt="Women">
										<div class="about__content">
											<h2 class="about__name">
												Куприянова Софья
											</h2>
											<h3 class="about__subtitle">
												Основатель агентства
											</h3>
											<p class="about__text">
												Имея более чем двадцатилетний опыт работы в отрасли, "Страховая компания Save’s" многому научилась. Единственное, что мы знаем наверняка, - это то, что мы заботимся о вас. Если поиск страховки вызывает у вас затруднения, мы готовы помочь.
											</p>

											<button class="about__btn">
												Получить консультацию
											</button>
										</div>
									</div>

								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination">
								</div>
							</div>

							<div class="about__title">
								<img src="./assets/index/asterisk.svg" alt="Asterisk" class="logo" />
								<h1>Наши
									эксперты
									говорят</h1>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer class="footer">
				<div class="wrapper">
					<div class="footer__inner">
						<a href="#header" class="footer__logo">
							<img class="logo" src="./assets/index/white-logo.svg" alt="White-logo">
							<p>Save’s страховая компания</p>
						</a>
						<p href="#" class="footer__policy"><a href="">Privacy Policy</a> </p>
					</div>
					<div class="footer__gradient"></div>
				</div>
			</footer>
		</div>
	</div>
	<script src="./js/lib/cleave.min.js"></script>
	<script src="./js/lib/cleave-phone.ru.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script type="module" src="./js/script.js"></script>
</body>

</html>
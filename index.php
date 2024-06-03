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
						<a data-off-click class="header__logo" href="./"><img src="/./assets/header/logo.png" alt="Logo" class="logo" /></a>
						<nav class="header__nav">
							<ul class="header__list">
								<a data-off-click href="/./" class="header__nav-link">
									<li>Главная</li>
								</a>
								<a href="/#choice" class="header__nav-link">
									<li>Страхование</li>
								</a>
								<a href="/#about" class="header__nav-link">
									<li>О нас</li>
								</a>
							</ul>
						</nav>
						<div class="header__right">
							<div class="header__toggle">
								<span class="header__switch"></span>
								<svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" class="header__sun">
									<rect fill="none" height="256" width="256" />
									<circle cx="128" cy="128" r="68" />
									<path d="M128,44a8,8,0,0,0,8-8V16a8,8,0,0,0-16,0V36A8,8,0,0,0,128,44Z" />
									<path d="M57.3,68.6a8.1,8.1,0,0,0,11.3,0,8,8,0,0,0,0-11.3L54.5,43.1A8.1,8.1,0,1,0,43.1,54.5Z" />
									<path d="M44,128a8,8,0,0,0-8-8H16a8,8,0,0,0,0,16H36A8,8,0,0,0,44,128Z" />
									<path d="M57.3,187.4,43.1,201.5a8.1,8.1,0,0,0,0,11.4,8.5,8.5,0,0,0,5.7,2.3,8.3,8.3,0,0,0,5.7-2.3l14.1-14.2a8,8,0,0,0-11.3-11.3Z" />
									<path d="M128,212a8,8,0,0,0-8,8v20a8,8,0,0,0,16,0V220A8,8,0,0,0,128,212Z" />
									<path d="M198.7,187.4a8,8,0,0,0-11.3,11.3l14.1,14.2a8.3,8.3,0,0,0,5.7,2.3,8.5,8.5,0,0,0,5.7-2.3,8.1,8.1,0,0,0,0-11.4Z" />
									<path d="M240,120H220a8,8,0,0,0,0,16h20a8,8,0,0,0,0-16Z" />
									<path d="M193.1,70.9a7.8,7.8,0,0,0,5.6-2.3l14.2-14.1a8.1,8.1,0,0,0-11.4-11.4L187.4,57.3a8,8,0,0,0,0,11.3A7.8,7.8,0,0,0,193.1,70.9Z" />
								</svg>
								<svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" class="header__moon">
									<title />
									<path d="M264,480A232,232,0,0,1,32,248C32,154,86,69.72,169.61,33.33a16,16,0,0,1,21.06,21.06C181.07,76.43,176,104.66,176,136c0,110.28,89.72,200,200,200,31.34,0,59.57-5.07,81.61-14.67a16,16,0,0,1,21.06,21.06C442.28,426,358,480,264,480Z" />
								</svg>
							</div>
							<button class="header__call">Позвонить</button>
							<a href="/./page/login.php" class="header__login">
								<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="header__key">
									<path d="M8.11265 8.828L16.2204 0.979004L17.681 2.393L16.2204 3.808L18.7759 6.282L17.3153 7.697L14.7587 5.222L13.2981 6.636L15.4891 8.757L14.0284 10.172L11.8375 8.05L9.57326 10.242C10.2761 11.276 10.558 12.5256 10.3644 13.7491C10.1708 14.9727 9.51546 16.0832 8.52508 16.8661C7.5347 17.649 6.27964 18.0486 5.00257 17.9876C3.72551 17.9267 2.51716 17.4094 1.61117 16.536C0.703219 15.6603 0.164011 14.4891 0.0983421 13.25C0.0326727 12.0109 0.445233 10.7925 1.25584 9.83142C2.06645 8.87039 3.21719 8.23544 4.48442 8.05C5.75165 7.86455 7.04484 8.14185 8.11265 8.828ZM7.45465 15.121C7.75557 14.8455 7.99638 14.5143 8.16283 14.1471C8.32929 13.7799 8.41802 13.3842 8.42378 12.9832C8.42954 12.5823 8.35221 12.1843 8.19637 11.8128C8.04052 11.4412 7.80932 11.1037 7.51643 10.8202C7.22355 10.5367 6.87491 10.3128 6.49114 10.162C6.10737 10.0111 5.69626 9.93623 5.28209 9.9418C4.86793 9.94738 4.45912 10.0333 4.07983 10.1944C3.70054 10.3556 3.35848 10.5887 3.07385 10.88C2.50936 11.4458 2.19701 12.2036 2.20407 12.9902C2.21113 13.7768 2.53703 14.5292 3.1116 15.0855C3.68616 15.6417 4.4634 15.9572 5.27592 15.964C6.08844 15.9709 6.87123 15.6685 7.45568 15.122L7.45465 15.121Z" fill="var(--color-main)" />
								</svg>Войти</a>
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
									<svg class="logo" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="20" cy="20" r="20" fill="var(--background-third)" />
										<path d="M31.2841 23.9657L24.0625 20L31.2841 16.0343C31.8831 15.7054 32.0946 14.9484 31.7529 14.3567L30.7637 12.6433C30.4221 12.0515 29.6607 11.8562 29.0764 12.2105L22.0313 16.4818L22.2077 8.24485C22.2224 7.56169 21.6726 7 20.9892 7H19.0108C18.3275 7 17.7777 7.56169 17.7924 8.24485L17.9688 16.4818L10.9236 12.2105C10.3393 11.8563 9.57798 12.0516 9.23632 12.6433L8.2471 14.3567C7.90544 14.9485 8.117 15.7055 8.71596 16.0344L15.9375 20L8.71591 23.9657C8.11695 24.2946 7.90539 25.0516 8.2471 25.6433L9.23632 27.3567C9.57798 27.9485 10.3393 28.1438 10.9236 27.7895L17.9688 23.5182L17.7923 31.7551C17.7777 32.4383 18.3275 33 19.0108 33H20.9893C21.6726 33 22.2224 32.4383 22.2078 31.7551L22.0313 23.5182L29.0764 27.7895C29.6607 28.1437 30.4221 27.9484 30.7637 27.3567L31.7529 25.6433C32.0946 25.0515 31.8831 24.2946 31.2841 23.9657Z" fill="black" />
									</svg>
									<p>Наше страхование позволяет экономить страхователям 30% - 60%</p>
								</div>
								<div class="home__benefits-2">
									<svg class="logo" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="20" cy="20" r="20" fill="var(--background-third)" />
										<path d="M31.2841 23.9657L24.0625 20L31.2841 16.0343C31.8831 15.7054 32.0946 14.9484 31.7529 14.3567L30.7637 12.6433C30.4221 12.0515 29.6607 11.8562 29.0764 12.2105L22.0313 16.4818L22.2077 8.24485C22.2224 7.56169 21.6726 7 20.9892 7H19.0108C18.3275 7 17.7777 7.56169 17.7924 8.24485L17.9688 16.4818L10.9236 12.2105C10.3393 11.8563 9.57798 12.0516 9.23632 12.6433L8.2471 14.3567C7.90544 14.9485 8.117 15.7055 8.71596 16.0344L15.9375 20L8.71591 23.9657C8.11695 24.2946 7.90539 25.0516 8.2471 25.6433L9.23632 27.3567C9.57798 27.9485 10.3393 28.1438 10.9236 27.7895L17.9688 23.5182L17.7923 31.7551C17.7777 32.4383 18.3275 33 19.0108 33H20.9893C21.6726 33 22.2224 32.4383 22.2078 31.7551L22.0313 23.5182L29.0764 27.7895C29.6607 28.1437 30.4221 27.9484 30.7637 27.3567L31.7529 25.6433C32.0946 25.0515 31.8831 24.2946 31.2841 23.9657Z" fill="black" />
									</svg>
									<p>Мы предлагаем на выбор низкие цены страхования и включаем бесплатные дополнительные услуги.</p>
								</div>
								<a class="home__benefits-arrow" href="#choice">
									<svg width="13" height="60" viewBox="0 0 13 60" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.544 59L6.258 1ZM6.544 59L1 50.1885ZM6.544 59L12 49.9654Z" />
										<path d="M6.544 59L6.258 1M6.544 59L1 50.1885M6.544 59L12 49.9654" stroke="var(--color-main)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
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
								<a href="./page/catalog.php#content-3" class="choice__item-1 choice__item">
									<img src="./assets/index/image-1.jpg" alt="1" />
									<button class="choice__button">Страхование жилья</button>
								</a>
								<a class="choice__item-2 choice__item">
									<img src="./assets/index/image-2.png" alt="2" />
								</a>
								<div class="choice__item-3">
									<div class="choice__header">
										<h2>Лучший выбор</h2>
										<p>Не все страховки одинаковы. Поэтому агентство знает, что ваша страховка должно быть адаптировано к вашей ситуации.</p>
									</div>
									<button>Все услуги</button>
								</div>
							</div>
							<div class="choice__row-second">
								<a href="./page/catalog.php#content-1" class="choice__item-4 choice__item">
									<img src="./assets/index/image-3.png" alt="3" />
									<button class="choice__button">Автострахование</button>
								</a>
								<a href="./page/catalog.php#content-2" class="choice__item-5 choice__item">
									<img src="./assets/index/image-4.png" alt="4" />
									<button class="choice__button">Страхование ипотеки</button>
								</a>
								<a href="./page/catalog.php#content-4" class="choice__item-6 choice__item">
									<img src="./assets/index/image-5.png" alt="5" />
									<button class="choice__button">Все для здоровья</button>
								</a>
							</div>
						</div>
					</div>
				</section>


				<section class='about' id="about">
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
								<svg class="logo" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="20" cy="20" r="20" fill="var(--background-third)" />
									<path d="M31.2841 23.9657L24.0625 20L31.2841 16.0343C31.8831 15.7054 32.0946 14.9484 31.7529 14.3567L30.7637 12.6433C30.4221 12.0515 29.6607 11.8562 29.0764 12.2105L22.0313 16.4818L22.2077 8.24485C22.2224 7.56169 21.6726 7 20.9892 7H19.0108C18.3275 7 17.7777 7.56169 17.7924 8.24485L17.9688 16.4818L10.9236 12.2105C10.3393 11.8563 9.57798 12.0516 9.23632 12.6433L8.2471 14.3567C7.90544 14.9485 8.117 15.7055 8.71596 16.0344L15.9375 20L8.71591 23.9657C8.11695 24.2946 7.90539 25.0516 8.2471 25.6433L9.23632 27.3567C9.57798 27.9485 10.3393 28.1438 10.9236 27.7895L17.9688 23.5182L17.7923 31.7551C17.7777 32.4383 18.3275 33 19.0108 33H20.9893C21.6726 33 22.2224 32.4383 22.2078 31.7551L22.0313 23.5182L29.0764 27.7895C29.6607 28.1437 30.4221 27.9484 30.7637 27.3567L31.7529 25.6433C32.0946 25.0515 31.8831 24.2946 31.2841 23.9657Z" fill="black" />
								</svg>
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
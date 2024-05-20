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
			<?php require_once __DIR__ . './php/components/header.php' ?>
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
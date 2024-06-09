<?php
require_once '../php/helpers.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Восстановление пароля</title>
	<link type="image/x-icon" rel="shortcut icon" href="../assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png" />
	<link type="image/png" sizes="192x192" rel="icon" href="../assets/favicon/android-chrome-192x192.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body data-barba="wrapper" class="">
	<div class="app">
		<div class="fade" data-barba="container" data-barba-namespace="forgot.password">
			<div class="password">
				<div class="password__inner block">
					<div class="password__logo-block">
						<a href="../"><img src="../assets/header/logo.png" alt="Logo-login" class="password__logo logo" /></a>
					</div>
					<h1 class="password__title">Восстановление пароля</h1>
					<p class="password__text">Укажите адрес электронной почты</p>
					<form action="" class="password__form">
						<label class="login__form-label">
							<input type="text" name="email" placeholder="Адрес почты" class="login__form-input login__form-input_mail password__input" />
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none" class="login__form-mail">
								<g clip-path="url(#clip0_32_30)">
									<path d="M24 3.30351C24 1.98748 22.9504 0.920639 21.6557 0.920639H2.34432C1.04958 0.920639 0 1.98748 0 3.30351V18.8354C0 20.1514 1.04958 21.2183 2.34432 21.2183H21.6557C22.9504 21.2183 24 20.1514 24 18.8354V3.30351ZM2.35688 2.82489H21.6741C21.9326 2.82489 22.1407 3.03448 22.1407 3.29729V3.31797L12.3465 13.2743C12.2271 13.3957 12.0881 13.4139 12.0156 13.4139C11.9431 13.4139 11.8036 13.3957 11.6841 13.2743L1.88764 3.31661V3.29729C1.88764 3.03448 2.09835 2.82489 2.35688 2.82489ZM21.6741 19.314H2.35688C2.09835 19.314 1.88764 19.0964 1.88764 18.8336V6.01251L10.3583 14.6223C10.8011 15.0723 11.3899 15.3202 12.016 15.3202C12.6423 15.3201 13.2299 15.0722 13.6727 14.6222L22.1407 6.01385V18.8336C22.1407 19.0964 21.9326 19.314 21.6741 19.314Z" fill="var(--color-main)" fill-opacity="0.25" />
								</g>
								<defs>
									<clipPath id="clip0_32_30">
										<rect width="25" height="20.2976" fill="var(--color-main)" transform="translate(0 0.920639)" />
									</clipPath>
								</defs>
							</svg>
						</label>
						<input type="submit" class="login__form-submit password__button" value="Восстановить">
					</form>
					<a href="./login.php" class="password__back back-button">Назад</a>
				</div>
				<div class="password__background"></div>
			</div>
		</div>
	</div>
	<script src="../js/lib/cleave.min.js"></script>
	<script src="../js/lib/cleave-phone.ru.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script type="module" src="../js/script.js"></script>
</body>

</html>
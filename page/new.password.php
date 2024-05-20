<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Новый пароль</title>
	<link type="image/x-icon" rel="shortcut icon" href="../assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png" />
	<link type="image/png" sizes="192x192" rel="icon" href="../assets/favicon/android-chrome-192x192.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body data-barba="wrapper">
	<div class="app">
		<div class="fade" data-barba="container" data-barba-namespace="new.password">
			<div class="new-pass">
				<div class="new-pass__inner block">
					<div class="password__logo-block">
						<a href="../"><img src="../assets/header/logo.png" alt="Logo-login" class="password__logo logo" /></a>
					</div>
					<h1 class="password__title">Восстановление пароля</h1>
					<p class="password__text">Введите новый пароль</p>
					<form action="#" method="" class="new-pass__form">
						<label class="new-pass__form-label">
							<input type="password" name="password" placeholder="Новый пароль" class="new-pass__input" />
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="27" viewBox="0 0 21 27" fill="none" class="new-pass__form-lock">
								<path d="M18.375 26.25H2.625C1.92881 26.25 1.26113 25.9734 0.768845 25.4812C0.276562 24.9889 0 24.3212 0 23.625V14C0 13.3038 0.276562 12.6361 0.768845 12.1438C1.26113 11.6516 1.92881 11.375 2.625 11.375H18.375C19.0712 11.375 19.7389 11.6516 20.2312 12.1438C20.7234 12.6361 21 13.3038 21 14V23.625C21 24.3212 20.7234 24.9889 20.2312 25.4812C19.7389 25.9734 19.0712 26.25 18.375 26.25ZM2.625 13.125C2.39294 13.125 2.17038 13.2172 2.00628 13.3813C1.84219 13.5454 1.75 13.7679 1.75 14V23.625C1.75 23.8571 1.84219 24.0796 2.00628 24.2437C2.17038 24.4078 2.39294 24.5 2.625 24.5H18.375C18.6071 24.5 18.8296 24.4078 18.9937 24.2437C19.1578 24.0796 19.25 23.8571 19.25 23.625V14C19.25 13.7679 19.1578 13.5454 18.9937 13.3813C18.8296 13.2172 18.6071 13.125 18.375 13.125H2.625Z" fill="var(--color-main)" fill-opacity="0.25" />
								<path d="M17.5 13.125H3.5C3.26794 13.125 3.04538 13.0328 2.88128 12.8687C2.71719 12.7046 2.625 12.4821 2.625 12.25V7C2.625 5.14348 3.3625 3.36301 4.67525 2.05025C5.98801 0.737498 7.76848 0 9.625 0H11.375C13.2315 0 15.012 0.737498 16.3247 2.05025C17.6375 3.36301 18.375 5.14348 18.375 7V12.25C18.375 12.4821 18.2828 12.7046 18.1187 12.8687C17.9546 13.0328 17.7321 13.125 17.5 13.125ZM4.375 11.375H16.625V7C16.625 5.60761 16.0719 4.27226 15.0873 3.28769C14.1027 2.30312 12.7674 1.75 11.375 1.75H9.625C8.23261 1.75 6.89726 2.30312 5.91269 3.28769C4.92812 4.27226 4.375 5.60761 4.375 7V11.375Z" fill="var(--color-main)" fill-opacity="0.25" />
								<path d="M10.5 19.25C10.1539 19.25 9.81554 19.1474 9.52775 18.9551C9.23997 18.7628 9.01566 18.4895 8.88321 18.1697C8.75076 17.8499 8.7161 17.4981 8.78363 17.1586C8.85115 16.8191 9.01782 16.5073 9.26256 16.2626C9.50731 16.0178 9.81913 15.8512 10.1586 15.7836C10.4981 15.7161 10.8499 15.7508 11.1697 15.8832C11.4895 16.0157 11.7628 16.24 11.9551 16.5278C12.1474 16.8155 12.25 17.1539 12.25 17.5C12.25 17.9641 12.0656 18.4092 11.7374 18.7374C11.4092 19.0656 10.9641 19.25 10.5 19.25Z" fill="var(--color-main)" fill-opacity="0.25" />
								<path d="M11.375 18.375H9.625V21.875H11.375V18.375Z" fill="var(--color-main)" fill-opacity="0.25" />
							</svg>
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="new-pass__cross">
								<path d="M1.18331 16.8167C1.41665 17.05 1.64998 17.1667 1.99998 17.1667C2.34998 17.1667 2.58331 17.05 2.81665 16.8167L8.99998 10.6333L15.1833 16.8167C15.4166 17.05 15.7666 17.1667 16 17.1667C16.2333 17.1667 16.5833 17.05 16.8166 16.8167C17.2833 16.35 17.2833 15.65 16.8166 15.1833L10.6333 9L16.8166 2.81667C17.2833 2.35 17.2833 1.65 16.8166 1.18334C16.35 0.716669 15.65 0.716669 15.1833 1.18334L8.99998 7.36667L2.81665 1.18334C2.34998 0.716669 1.64998 0.716669 1.18331 1.18334C0.716646 1.65 0.716646 2.35 1.18331 2.81667L7.36665 9L1.18331 15.1833C0.716646 15.65 0.716646 16.35 1.18331 16.8167Z" fill="var(--color-main)" fill-opacity="0.25" />
							</svg>
							<div class="new-pass__eyeClose-button">
								<svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="new-pass__eyeClose">
									<g clip-path="url(#clip0_32_12)">
										<path d="M20.93 16.445C18.9357 17.6394 16.5073 18.3011 14 18.3333C5.83335 18.3333 1.16669 11 1.16669 11C2.61789 8.87507 4.63068 7.01855 7.07002 5.555M11.55 3.88666C12.3531 3.73897 13.1753 3.66514 14 3.66666C22.1667 3.66666 26.8334 11 26.8334 11C26.1252 12.041 25.2806 13.021 24.3134 13.9242M16.4734 12.9433C16.1529 13.2135 15.7665 13.4302 15.3372 13.5805C14.9079 13.7308 14.4444 13.8117 13.9745 13.8182C13.5045 13.8247 13.0377 13.7568 12.6019 13.6184C12.1661 13.4801 11.7702 13.2743 11.4378 13.0131C11.1055 12.752 10.8435 12.4409 10.6674 12.0985C10.4914 11.7561 10.405 11.3893 10.4133 11.0201C10.4216 10.6508 10.5244 10.2867 10.7157 9.94936C10.907 9.61203 11.1828 9.30843 11.5267 9.05666" stroke="var(--color-main)" stroke-opacity="0.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M1.16669 0.916664L26.8334 21.0833" stroke="var(--color-main)" stroke-opacity="0.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</g>
									<defs>
										<clipPath id="clip0_32_12">
											<rect width="28" height="22" fill="white" />
										</clipPath>
									</defs>
								</svg>
								<svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="new-pass__eye new-pass__eye-hidden">
									<path d="M14.0035 18C9.73852 18 5.70252 16.193 2.63652 12.912C2.54689 12.816 2.47705 12.7033 2.43098 12.5803C2.38491 12.4573 2.36352 12.3265 2.36803 12.1952C2.37253 12.064 2.40284 11.9349 2.45723 11.8153C2.51162 11.6958 2.58902 11.5881 2.68502 11.4985C2.78102 11.4089 2.89373 11.339 3.01671 11.293C3.1397 11.2469 3.27056 11.2255 3.40182 11.23C3.53307 11.2345 3.66215 11.2648 3.7817 11.3192C3.90124 11.3736 4.00889 11.451 4.09852 11.547C6.78152 14.419 10.2985 16 14.0035 16C18.7665 16 23.1525 13.395 25.8435 9C23.1535 4.605 18.7665 2 14.0035 2C9.06552 2 4.53152 4.801 1.87352 9.493C1.8093 9.60824 1.72292 9.70963 1.61934 9.79133C1.51577 9.87304 1.39705 9.93344 1.27003 9.96907C1.143 10.0047 1.01019 10.0148 0.879231 9.99889C0.748274 9.98296 0.621763 9.94128 0.506987 9.87624C0.392212 9.8112 0.291439 9.72409 0.210476 9.61993C0.129512 9.51578 0.0699577 9.39663 0.0352431 9.26936C0.000528604 9.14208 -0.00865981 9.0092 0.00820719 8.87836C0.0250742 8.74752 0.0676633 8.62131 0.133521 8.507C3.15052 3.18 8.33652 0 14.0035 0C19.6715 0 24.8565 3.18 27.8735 8.507C27.9585 8.65722 28.0032 8.82689 28.0032 8.9995C28.0032 9.17211 27.9585 9.34178 27.8735 9.492C24.8565 14.819 19.6715 18 14.0035 18Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M14.0035 14C11.2465 14 9.00354 11.757 9.00354 9C9.00354 6.243 11.2465 4 14.0035 4C16.7605 4 19.0035 6.243 19.0035 9C19.0035 11.757 16.7605 14 14.0035 14ZM14.0035 6C12.3495 6 11.0035 7.346 11.0035 9C11.0035 10.654 12.3495 12 14.0035 12C15.6575 12 17.0035 10.654 17.0035 9C17.0035 7.346 15.6575 6 14.0035 6Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</div>
						</label>
						<div class="new-pass__validation validation">
							<div class="new-pass__min validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="new-pass__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="New password cross" class="validation__cross" />
								<p class="validation__text">8 символов минимум</p>
							</div>
							<div class="new-pass__symbol validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="new-pass__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="New password cross" class="validation__cross" />
								<p class="validation__text">1 специальный символ</p>
							</div>
							<div class="new-pass__number validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="new-pass__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="New password cross" class="validation__cross" />
								<p class="validation__text">1 число</p>
							</div>
							<div class="new-pass__upper validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="new-pass__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="New password cross" class="validation__cross" />
								<p class="validation__text">1 заглавная буква</p>
							</div>
						</div>
						<input type="submit" value="Создать новый" class="new-pass__form-submit" />
					</form>
					<a href="./forgot.password.php" class="password__back back-button">Назад</a>
				</div>
				<div class="new-pass__background"></div>
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
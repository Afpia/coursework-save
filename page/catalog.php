<?php require_once __DIR__ . '/../php/helpers.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Купить полис</title>
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
		<div class="fade" data-barba="container" data-barba-namespace="catalog" style="overflow: hidden;">
			<?php require_once __DIR__ . '/../php/components/header.php' ?>
			<div class="wrapper">
				<div class="catalog">
					<h1 class="catalog__title">Купить полис</h1>
					<div class="catalog__nav">
						<button class="catalog__btn-item" data-button="#content-1">Автострахование</button>
						<button class="catalog__btn-item" data-button="#content-2">Страхование ипотеки</button>
						<button class="catalog__btn-item" data-button="#content-3">Страхование жилья</button>
						<button class="catalog__btn-item" data-button="#content-4">Страхование жизни</button>
					</div>
					<div class="catalog__tabs">
						<div class="catalog__content" data-button-content id="content-1">
							<?php foreach (FindInsurance('Автострахование') as $insurance) { ?>
								<div class="catalog__content-item">
									<h3><?= $insurance['TypeName'] ?></h3>
									<h4><?= $insurance['Price'] ?> Р / год</h4>
									<form action="/php/policies.php" method="POST">
										<input type="hidden" value="<?php echo $insurance['TypeID']; ?>" name="TypeID">
										<button>Купить онлайн</button>
									</form>
									<div class="catalog__info">
										<?php foreach (FindType($insurance['TypeName']) as $type) { ?>
											<div class="catalog__row">
												<div class="catalog__left">
													<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="11.5" cy="11.5" r="11" stroke="white" />
														<path d="M10.9205 16V9.45455H11.9261V16H10.9205ZM11.4318 8.36364C11.2358 8.36364 11.0668 8.29688 10.9247 8.16335C10.7855 8.02983 10.7159 7.86932 10.7159 7.68182C10.7159 7.49432 10.7855 7.33381 10.9247 7.20028C11.0668 7.06676 11.2358 7 11.4318 7C11.6278 7 11.7955 7.06676 11.9347 7.20028C12.0767 7.33381 12.1477 7.49432 12.1477 7.68182C12.1477 7.86932 12.0767 8.02983 11.9347 8.16335C11.7955 8.29688 11.6278 8.36364 11.4318 8.36364Z" fill="white" />
													</svg>
													<h5><?= $type['ParameterName'] ?></h5>
												</div>
												<p><?= $type['ParameterValue'] ?></p>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="catalog__content" data-button-content id="content-2">
							<?php foreach (FindInsurance('Ипотечное страхование') as $insurance) { ?>
								<div class="catalog__content-item">
									<h3><?= $insurance['TypeName'] ?></h3>
									<h4><?= $insurance['Price'] ?> Р / год</h4>
									<form action="/php/policies.php" method="POST">
										<input type="hidden" value="<?php echo $insurance['TypeID']; ?>" name="TypeID">
										<button>Купить онлайн</button>
									</form>
									<p>Риски:</p>
									<div class="catalog__info">
										<?php foreach (FindType($insurance['TypeName']) as $type) { ?>
											<div class="catalog__row">
												<div class="catalog__left">
													<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="11.5" cy="11.5" r="11" stroke="white" />
														<path d="M10.9205 16V9.45455H11.9261V16H10.9205ZM11.4318 8.36364C11.2358 8.36364 11.0668 8.29688 10.9247 8.16335C10.7855 8.02983 10.7159 7.86932 10.7159 7.68182C10.7159 7.49432 10.7855 7.33381 10.9247 7.20028C11.0668 7.06676 11.2358 7 11.4318 7C11.6278 7 11.7955 7.06676 11.9347 7.20028C12.0767 7.33381 12.1477 7.49432 12.1477 7.68182C12.1477 7.86932 12.0767 8.02983 11.9347 8.16335C11.7955 8.29688 11.6278 8.36364 11.4318 8.36364Z" fill="white" />
													</svg>
													<h5><?= $type['ParameterName'] ?></h5>
												</div>
												<p><?= $type['ParameterValue'] ?></p>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="catalog__content" data-button-content id="content-3">
							<?php foreach (FindInsurance('Страхование жилья') as $insurance) { ?>
								<div class="catalog__content-item">
									<h3><?= $insurance['TypeName'] ?></h3>
									<h4><?= $insurance['Price'] ?> Р / месяц</h4>
									<form action="/php/policies.php" method="POST">
										<input type="hidden" value="<?php echo $insurance['TypeID']; ?>" name="TypeID">
										<button>Купить онлайн</button>
									</form>
									<div class="catalog__info">
										<?php foreach (FindType($insurance['TypeName']) as $type) { ?>
											<div class="catalog__row">
												<div class="catalog__left">
													<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="11.5" cy="11.5" r="11" stroke="white" />
														<path d="M10.9205 16V9.45455H11.9261V16H10.9205ZM11.4318 8.36364C11.2358 8.36364 11.0668 8.29688 10.9247 8.16335C10.7855 8.02983 10.7159 7.86932 10.7159 7.68182C10.7159 7.49432 10.7855 7.33381 10.9247 7.20028C11.0668 7.06676 11.2358 7 11.4318 7C11.6278 7 11.7955 7.06676 11.9347 7.20028C12.0767 7.33381 12.1477 7.49432 12.1477 7.68182C12.1477 7.86932 12.0767 8.02983 11.9347 8.16335C11.7955 8.29688 11.6278 8.36364 11.4318 8.36364Z" fill="white" />
													</svg>
													<h5><?= $type['ParameterName'] ?></h5>
												</div>
												<p><?= $type['ParameterValue'] ?>Р</p>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="catalog__content" data-button-content id="content-4">
							<?php foreach (FindInsurance('Страхование жизни и здоровья') as $insurance) { ?>
								<div class="catalog__content-item">
									<h3><?= $insurance['TypeName'] ?></h3>
									<h4><?= $insurance['Price'] ?> Р / месяц</h4>
									<form action="/php/policies.php" method="POST">
										<input type="hidden" value="<?php echo $insurance['TypeID']; ?>" name="TypeID">
										<button>Купить онлайн</button>
									</form>
									<div class="catalog__info">
										<?php foreach (FindType($insurance['TypeName']) as $type) { ?>
											<div class="catalog__row">
												<div class="catalog__left">
													<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="11.5" cy="11.5" r="11" stroke="white" />
														<path d="M10.9205 16V9.45455H11.9261V16H10.9205ZM11.4318 8.36364C11.2358 8.36364 11.0668 8.29688 10.9247 8.16335C10.7855 8.02983 10.7159 7.86932 10.7159 7.68182C10.7159 7.49432 10.7855 7.33381 10.9247 7.20028C11.0668 7.06676 11.2358 7 11.4318 7C11.6278 7 11.7955 7.06676 11.9347 7.20028C12.0767 7.33381 12.1477 7.49432 12.1477 7.68182C12.1477 7.86932 12.0767 8.02983 11.9347 8.16335C11.7955 8.29688 11.6278 8.36364 11.4318 8.36364Z" fill="white" />
													</svg>
													<h5><?= $type['ParameterName'] ?></h5>
												</div>
												<p><?= $type['ParameterValue'] ?></p>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once __DIR__ . '/../php/components/footer.php' ?>

</body>

</html>
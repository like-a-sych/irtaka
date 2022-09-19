<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta content="img/soc.jpg" property="og:image">
	<meta content="img/soc.jpg" property="vk:image">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap&subset=cyrillic-ext"
		rel="stylesheet">
	<title>Восстановление, ремонт и перетяжка мебели</title>
	<link rel="stylesheet" href="css/modules.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon.ico">
</head>

<body>
	<div class="wrapper thank">
		<header class="header-top">
			<div class="header-top__container _container">
				<a href="/" class="header-top__logo">
					<div class="header-top__img">
						<img width="201px" src="img/remont.svg" alt="">
					</div>
					<span class="header-top__discription">
						Фабрика мебели.
						Работаем с 2009 года
					</span>
				</a>
				<div class="header-top__callback">
					<div class="header-top__phone">
						<a class="header-top__number" href="tel:+70292292202"><img src="img/mts-logo.png" alt="">8-029-229-22-02</a>
						<a class="header-top__number" href="tel:+70299122862"><img src="img/a1.png" alt="">8-029-912-28-62</a>
						<span class="header-top__work">
							Сейчас работаем
						</span>
					</div>
					<div class="header-top__button">
						<button data-bs-toggle="modal" data-bs-target="#callback" class="_main-btn _main-btn_call">
							Перезвоните мне
						</button>
					</div>
				</div>
			</div>
		</header>

		<main class="main ">
			<div class="bg-main">
				<section class="thank-section ">
					<div class="thank-section__container _container">
						<div class="thank-section__block">
							<h1 class="thank-section__title">Все прошло успешно!
								<div class="thank-section__sub _title-card">Для составления точной стоимости мебели<br>
									специалисту <b>необходимо задать вам<br>
										несколько уточняющих вопросов</b></div>
							</h1>
						</div>
						<div class="thank-section__bot">
							<div class="thank-section__pic">
								<img src="img/attention.svg" alt="">
							</div>
							<div class="thank-section__text">
								Пожалуйста, проверьте корректность<br>
								введенного вами номера телефона
							</div>
						</div>
						<div class="thank-section__form">
							<div class="thank-section__inner">
								<div class="form-block__input">
									<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон"
										value="<?php echo $_POST['phone'] ?>" onfocus="this.value=''" required="">
								</div>
								<button data-bs-toggle="modal" data-bs-target="#callback2" class="_main-btn">
									<span>Нашли ошибку в номере?</span>
									Нажмите здесь и введите<br>
									корректный номер
								</button>
							</div>
							<div class="form-in__bottom">
								<div class="form-in__form-check form-check">
									<input type="checkbox" class="check" checked="" id="check6">
									<label class="form-check-label" for="check6">Я принимаю условия <a data-bs-toggle="modal"
											data-bs-target="#security-politics">политики конфеденциальности</a></label>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<section class="section-10">
				<div class="section-10__container _container">
					<h2 class="section-10__title _title-section"><b>Посмотрите несколько выполненных
							заказов,</b> пока ждете звонка специалиста</h2>

					<div class="section-10__slider">
						<div class="slider-nav">
							<div>
								<div class="slider-nav__item">
									<div class="slider-nav__pic">
										<picture>
											<source srcset="img/s1.webp" type="image/webp">
											<img src="img/s1.jpg" alt="">
										</picture>
									</div>
									<div class="slider-nav__text">Ремонт и перетяжка
										дивана за 7 дней
									</div>
								</div>
							</div>
							<div>
								<div class="slider-nav__item">
									<div class="slider-nav__pic">
										<picture>
											<source srcset="img/s2.webp" type="image/webp">
											<img src="img/s2.jpg" alt="">
										</picture>
									</div>
									<div class="slider-nav__text">Ремонт и перетяжка
										дивана за 9 дней
									</div>
								</div>
							</div>
							<div>
								<div class="slider-nav__item">
									<div class="slider-nav__pic">
										<picture>
											<source srcset="img/s3.webp" type="image/webp">
											<img src="img/s3.jpg" alt="">
										</picture>
									</div>
									<div class="slider-nav__text">Ремонт и перетяжка
										дивана за 6 дней
									</div>
								</div>
							</div>
							<div>
								<div class="slider-nav__item">
									<div class="slider-nav__pic">
										<picture>
											<source srcset="img/s4.webp" type="image/webp">
											<img src="img/s4.jpg" alt="">
										</picture>
									</div>
									<div class="slider-nav__text">Ремонт и перетяжка
										дивана за 7 дней
									</div>
								</div>
							</div>
						</div>
						<div class="coursor visible-hand">
							<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 320 300" height="42" width="42">
								<rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
									fill="rgba(190,190,190,0.3)"></rect>
								<rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
									fill="rgba(190,190,190,0.3)"></rect>
								<rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
									fill="rgba(190,190,190,0.3)"></rect>
								<path class="tooltip-horizontal-scroll-icon_hand"
									d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
									fill="rgba(190,190,190,1)"></path>
								<style>
									.tooltip-horizontal-scroll-icon_hand {
										animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
									}

									.tooltip-horizontal-scroll-icon_card {
										animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
									}

									@keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
										0% {
											transform: translateX(80px) scale(1);
											opacity: 0
										}

										10% {
											transform: translateX(80px) scale(1);
											opacity: 1
										}

										20%,
										60% {
											transform: translateX(175px) scale(.6);
											opacity: 1
										}

										80% {
											transform: translateX(5px) scale(.6);
											opacity: 1
										}

										to {
											transform: translateX(5px) scale(.6);
											opacity: 0
										}
									}

									@keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

										0%,
										60% {
											transform: translateX(0)
										}

										80%,
										to {
											transform: translateX(-240px)
										}
									}
								</style>
							</svg>
						</div>
						<div class="slider-for">
							<div>
								<div class="slider-for__item sofa-block">
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/1posle.webp" type="image/webp">
												<img src="img/1posle.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Состояние мебели до ремонта
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_red">
													Ткань потеряла свой цвет и сильно загрязнилась
												</li>
												<li class="sofa-block__item _list _list_red">
													Подушки потеряли свою форму
												</li>
												<li class="sofa-block__item _list _list_red">
													Дефекты каркаса
												</li>
												<li class="sofa-block__item _list _list_red">
													Дефекты механизма трансформации
												</li>
											</ul>
										</div>
									</div>
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/1do.webp" type="image/webp">
												<img src="img/1do.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Провели весь ремонт за 7 дней
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_green">
													Полностью поменяли обивку на эко-замшу Brooklin практичного оттенка
												</li>
												<li class="sofa-block__item _list _list_green">
													Заменили синтепон и поролон
												</li>
												<li class="sofa-block__item _list _list_green">
													Восстановили каркас
												</li>
												<li class="sofa-block__item _list _list_green">
													Произвели ремонт механизма трансформации
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="slider-for__item sofa-block">
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/2do.webp" type="image/webp">
												<img src="img/2do.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Состояние мебели до ремонта
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_red">
													Кож.зам потрескался и местами облез
												</li>
												<li class="sofa-block__item _list _list_red">
													Пружинный блок потерял свою упругость и деформировался
												</li>
												<li class="sofa-block__item _list _list_red">
													Дефекты каркаса
												</li>
											</ul>
										</div>
									</div>
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/2posle.webp" type="image/webp">
												<img src="img/2posle.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Провели весь ремонт за 9 дней
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_green">
													Полностью перетянули диван велюром Malta в классическом исполнении
												</li>
												<li class="sofa-block__item _list _list_green">
													Заменили синтепон и поролон
												</li>
												<li class="sofa-block__item _list _list_green">
													Заменили элементы каркаса
												</li>
												<li class="sofa-block__item _list _list_green">
													Полностью заменили пружинный блок
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="slider-for__item sofa-block">
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/3do.webp" type="image/webp">
												<img src="img/3do.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Состояние мебели до ремонта
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_red">
													Кож.зам потрескался и местами облез
												</li>
												<li class="sofa-block__item _list _list_red">
													Пружинный блок потерял свою упругость и деформировался
												</li>
												<li class="sofa-block__item _list _list_red">
													Дефекты каркаса
												</li>
											</ul>
										</div>
									</div>
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/3posle.webp" type="image/webp">
												<img src="img/3posle.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Провели весь ремонт за 6 дней
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_green">
													Полностью поменяли обивку на микровелюр Atlanta модного современного оттенка
												</li>
												<li class="sofa-block__item _list _list_green">
													Заменили синтепон и поролон
												</li>
												<li class="sofa-block__item _list _list_green">
													Заменили элементы каркаса
												</li>
												<li class="sofa-block__item _list _list_green">
													Полностью заменили пружинный блок
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="slider-for__item sofa-block">
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/4do.webp" type="image/webp">
												<img src="img/4do.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Состояние мебели до ремонта
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_red">
													Кож.зам потрескался и местами облез
												</li>
												<li class="sofa-block__item _list _list_red">
													Подушки и спинка потеряли свою форму
												</li>
												<li class="sofa-block__item _list _list_red">
													Дефекты каркаса
												</li>
												<li class="sofa-block__item _list _list_red">
													Дефекты механизма трансформации
												</li>
											</ul>
										</div>
									</div>
									<div class="sofa-block__column">
										<div class="sofa-block__pic">
											<picture>
												<source srcset="img/4posle.webp" type="image/webp">
												<img src="img/4posle.jpg" alt="">
											</picture>
										</div>
										<div class="sofa-block__text">
											<h3 class="sofa-block__title">
												Провели весь ремонт за 7 дней
											</h3>
											<ul class="sofa-block__list">
												<li class="sofa-block__item _list _list_green">
													Полностью поменяли обивку на эко-замшу Vertus классического и практичного оттенка
												</li>
												<li class="sofa-block__item _list _list_green">
													Полностью повторили все строчки на новой обивке
												</li>
												<li class="sofa-block__item _list _list_green">
													Заменили синтепон и поролон
												</li>
												<li class="sofa-block__item _list _list_green">
													Восстановили каркас
												</li>
												<li class="sofa-block__item _list _list_green">
													Произвели ремонт механизма трансформации
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sofa-block__buttons">
						<button data-bs-toggle="modal" data-bs-target="#quiz-modal" class="_main-btn">
							Рассчитать стоимость ремонта<br>
							+ получить 2 подарка
						</button>
						<button class="_main-btn _main-btn_next _next-button">
							Смотреть следующую работу <svg xmlns="http://www.w3.org/2000/svg" width="30" height="10"
								viewBox="0 0 30 10">
								<g>
									<g>
										<path fill="#465569"
											d="M1.111 9.604L.042 8.516l3.413-3.412L.042 1.692 1.111.605l4.5 4.5zm11.963 0l-1.07-1.088 3.413-3.412-3.412-3.412L13.074.605l4.5 4.5zm11.962 0l-1.069-1.088 3.413-3.412-3.413-3.412L25.036.605l4.5 4.5z" />
									</g>
								</g>
							</svg>
						</button>
					</div>
				</div>
			</section>
			<div class="bg bg_gray">
				<section class="section-14">
					<div class="section-14__container _container">
						<h2 class="section-14__title _title-section">
							<b>Посмотрите видеоотзывы клиентов</b>
							после получения мебели
						</h2>
						<div class="coursor visible-hand">
							<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 320 300" height="42" width="42">
								<rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
									fill="rgba(190,190,190,0.3)"></rect>
								<rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
									fill="rgba(190,190,190,0.3)"></rect>
								<rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
									fill="rgba(190,190,190,0.3)"></rect>
								<path class="tooltip-horizontal-scroll-icon_hand"
									d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
									fill="rgba(190,190,190,1)"></path>
								<style>
									.tooltip-horizontal-scroll-icon_hand {
										animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
									}

									.tooltip-horizontal-scroll-icon_card {
										animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
									}

									@keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
										0% {
											transform: translateX(80px) scale(1);
											opacity: 0
										}

										10% {
											transform: translateX(80px) scale(1);
											opacity: 1
										}

										20%,
										60% {
											transform: translateX(175px) scale(.6);
											opacity: 1
										}

										80% {
											transform: translateX(5px) scale(.6);
											opacity: 1
										}

										to {
											transform: translateX(5px) scale(.6);
											opacity: 0
										}
									}

									@keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

										0%,
										60% {
											transform: translateX(0)
										}

										80%,
										to {
											transform: translateX(-240px)
										}
									}
								</style>
							</svg>
						</div>
						<div class="section-14__block video-block">
							<a data-fancybox="" href="https://youtu.be/uNPQuiVfCRY" class="video-block__column">
								<div class="video-block__pic">
									<picture>

										<img src="img/v1.jpg" alt="">
									</picture>
									<div class="video-block__quote">
										<img src="img/quote.svg" alt="">
									</div>
								</div>
								<div class="video-block__text">
									<div class="video-block__title">Огромный выбор ткани, осталась очень довольна!</div>
									<div class="video-block__button">
										<button class="_main-btn">
											<img src="img/play.svg" alt="">
											Смотреть отзыв целиком
										</button>
									</div>
								</div>
							</a>
							<a data-fancybox="" href="https://youtu.be/VFPwBdKfZYg" class="video-block__column">
								<div class="video-block__pic">
									<picture>

										<img src="img/v2.jpg" alt="">
									</picture>
									<div class="video-block__quote">
										<img src="img/quote.svg" alt="">
									</div>
								</div>
								<div class="video-block__text">
									<div class="video-block__title">Перетянули очень быстро! Есть рассрочка 12 месяцев</div>
									<div class="video-block__button">
										<button class="_main-btn">
											<img src="img/play.svg" alt="">
											Смотреть отзыв целиком
										</button>
									</div>
								</div>
							</a>
							<a data-fancybox="" href="https://youtu.be/1wijQ1ywGB8" class="video-block__column">
								<div class="video-block__pic">
									<picture>

										<img src="img/v3.jpg" alt="">
									</picture>
									<div class="video-block__quote">
										<img src="img/quote.svg" alt="">
									</div>
								</div>
								<div class="video-block__text">
									<div class="video-block__title">Очень все красиво<br> и качественно выполнено!</div>
									<div class="video-block__button">
										<button class="_main-btn">
											<img src="img/play.svg" alt="">
											Смотреть отзыв целиком
										</button>
									</div>
								</div>
							</a>
						</div>
						<div class="section-14__button">
							<a class="_main-btn" data-fancybox="video" href="https://youtu.be/MkkcRGV96bw">Смотреть больше отзывов</a>
						</div>
					</div>
					<a data-fancybox="video" href="https://youtu.be/KAppcWdxiTk"></a>
					<a data-fancybox="video" href="https://youtu.be/zwRjQaJwxI4"></a>
					<a data-fancybox="video" href="https://youtu.be/pYxA1aMIoFc"></a>
					<a data-fancybox="video" href="https://youtu.be/7vw-5x-CACc"></a>
					<a data-fancybox="video" href="https://youtu.be/OLOGKn2vF-c"></a>
				</section>
				<div class="bg__pic">
					<img src="img/arrow-down.svg" alt="">
				</div>
			</div>
		</main>

		<footer class="footer-top">
			<div class="footer-top__container _container">
				<div class="footer-top__bottom">
					<div class="footer-top__logo logo-bottom">
						<div class="logo-bottom__logo">
							<img width="201px" src="img/remont.svg" alt="">
						</div>
						<div class="logo-bottom__text">
							Фабрика мебели.<br>
							Работаем с 2009 года
						</div>
					</div>
					<div data-da=".footer-top__adpt, 1220, 1" class="footer-top__sec security">
						<div class="security__pol">
							<a href="" data-bs-toggle="modal" data-bs-target="#security-politics">Политика конфиденциальности</a>
						</div>
						<a href="https://t-f-a.agency/lp" target="_blank" class="security__tfa">
							<div class="security__pic">
								<picture>
									<source srcset="img/tfa.webp" type="image/webp">
									<img src="img/tfa.png" alt="">
								</picture>
							</div>
							<div class="security__href">
								Разработка<br>
								сайта
							</div>
						</a>

					</div>
					<div class="footer-top__callback header-top__callback callback-bot">
						<div class="header-top__phone callback-bot__phone">
							<a class="header-top__number" href="tel:+70292292202"><img src="img/mts-logo.png"
									alt="">8-029-229-22-02</a>
							<a class="header-top__number" href="tel:+70299122862"><img src="img/a1.png" alt="">8-029-912-28-62</a>
						</div>
						<div class="header-top__button callback-bot__button">
							<button data-bs-toggle="modal" data-bs-target="#callback" class="_main-btn _main-btn_call">
								Перезвоните мне
							</button>
							<span class="header-top__work">
								Сейчас работаем
							</span>
						</div>
					</div>
				</div>
				<div class="footer-top__adpt">

				</div>
			</div>
		</footer>
	</div>
	<div class="modal fade" id="callback" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
					<img src="img/close.svg" alt="">
				</button>
				<div class="modal-body">
					<div class="main-form">
						<h3 class="main-form__title">
							Закажите
							обратный звонок
						</h3>
						<h4 class="main-form__subtitle">
							Наш специалист <b>свяжется<br>
								с вами в течение 5 минут</b><br>
							в рабочее время
						</h4>
						<form class="needs-validation form" novalidate="" method="POST" action="thank.php"
							enctype="multipart/form-data">
							<div class="form__container">
								<div class="form-block form__in">
									<input type="hidden" name="from" value="Рассчитать стоимость + получить 2 подарка">
									<div class="form-block__input">
										<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон" required="">
									</div>
									<button type="submit" class="_main-btn">
										Рассчитать стоимость<br>
										+ получить 2 подарка
									</button>
									<div class="form-check">
										<input type="checkbox" class="check" checked="" id="check5">
										<label class="form-check-label" for="check5">Я принимаю условия <a data-bs-toggle="modal"
												data-bs-target="#security-politics">политики конфеденциальности</a></label>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="callback2" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
					<img src="img/close.svg" alt="">
				</button>
				<div class="modal-body">
					<div class="main-form">
						<h3 class="main-form__title">
							Введите корректный номер
						</h3>
						<h4 class="main-form__subtitle _title-block">
							в форме ниже
						</h4>
						<form class="needs-validation form" novalidate="" method="POST" action="thank.php"
							enctype="multipart/form-data">
							<div class="form__container">
								<div class="form-block form__in">
									<input type="hidden" name="from" value="Корректный номер">
									<div class="form-block__input">

										<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон" required="">
									</div>
									<button type="submit" class="_main-btn">
										Отправить корректный номер
									</button>
									<div class="form-check">
										<input type="checkbox" class="check" checked="" id="check555">
										<label class="form-check-label" for="check555">Я принимаю условия <a data-bs-toggle="modal"
												data-bs-target="#security-politics">политики конфеденциальности</a></label>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="quiz-modal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
					<img src="img/close.svg" alt="">
				</button>
				<div class="modal-body">
					<div class="section-3__container">
						<div class="quiz-inner" id="quiz-block">
							<form class="needs-validation" novalidate="" method="POST" action="thank.php"
								enctype="multipart/form-data">
								<div class="progress-bar prg1">
									<div class="progress-text">Осталось <strong><span class="current-step">5</span>
											<span class="rp-rule__span">вопросов</span> из 5</strong></div>
									<div class="progress-line">
										<div class="line" style="left:-75%" data-left="75"></div>
									</div>
								</div>
								<div class="step1 active step quiz-inner__item ">
									<div class="step__block">
										<h3 class="step__title">01. Какую мебель необходимо восстановить?</h3>
										<div class="step__variants quiz-variants">
											<div class="quiz-variants__variant" data-step="step2">
												<input type="radio" name="question-1" id="q1-1-1" value="Диван" required="" data-index="1-1">
												<label for="q1-1-1" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q1-1.webp" type="image/webp">
																<img src="img/q1-1.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Диван
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step2">
												<input type="radio" name="question-1" id="q1-1-2" value="Кресло" required="" data-index="1-2">
												<label for="q1-1-2" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q1-2.webp" type="image/webp">
																<img src="img/q1-2.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Кресло
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step2">
												<input type="radio" name="question-1" id="q1-1-3" value="Другую мебель" required=""
													data-index="1-3">
												<label for="q1-1-3" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q1-3.webp" type="image/webp">
																<img src="img/q1-3.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Другую мебель
														</div>
													</div>
												</label>
											</div>
										</div>
									</div>
									<div class="step__buttons">
										<button type="button" class="quiz-variants__btn next-step _main-btn" data-step="step2"
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
											data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа"
											data-bs-original-title="" title="" aria-describedby="popover928694">на следующий
											шаг</button>
									</div>
								</div>
								<div class="step2 step quiz-inner__item ">
									<div class="step__block">
										<h3 class="step__title">02. Какой вид ремонта требуется?</h3>
										<div class="step__variants quiz-variants">
											<div class="quiz-variants__variant" data-step="step3">
												<input type="radio" name="question-2" id="q1-2-1" value="Перетяжка мебели" required=""
													data-index="2-1">
												<label for="q1-2-1" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q2-1.webp" type="image/webp">
																<img src="img/q2-1.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Перетяжка мебели
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step3">
												<input type="radio" name="question-2" id="q1-2-2"
													value="Ремонт механизмов или отдельных элементов дивана" required="" data-index="2-2">
												<label for="q1-2-2" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q2-2.webp" type="image/webp">
																<img src="img/q2-2.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Ремонт механизмов<br>
															или отдельных<br>
															элементов дивана
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step3">
												<input type="radio" name="question-2" id="q1-2-3" value="Комплексное	восстановление мебели"
													required="" data-index="2-3">
												<label for="q1-2-3" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q2-3.webp" type="image/webp">
																<img src="img/q2-3.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Комплексное<br>
															восстановление<br>
															мебели
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step3">
												<input type="radio" name="question-2" id="q1-2-4" value="Затрудняюсь ответить" required=""
													data-index="2-4">
												<label for="q1-2-4" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__picture">
															<picture>
																<source srcset="img/q1-4.webp" type="image/webp">
																<img src="img/q1-4.jpg" alt="">
															</picture>
														</div>
														<div class="quiz-question__label">
															Затрудняюсь ответить
														</div>
													</div>
												</label>
											</div>
										</div>

									</div>
									<div class="step__buttons">
										<button type="button" class="quiz-variants__btn next-step _main-btn" data-step="step3"
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
											data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа"
											data-bs-original-title="" title="" aria-describedby="popover928694">на следующий
											шаг</button>
									</div>
								</div>
								<div class="step3 step quiz-inner__item ">
									<div class="step__block">
										<h3 class="step__title">03. В какой области вы проживаете?</h3>
										<div class="step__variants quiz-variants">
											<div class="quiz-variants__variant" data-step="step4">
												<input type="radio" name="question-3" id="q1-3-1" value="Витебская область" required=""
													data-index="3-1">
												<label for="q1-3-1" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Витебская область
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step4">
												<input type="radio" name="question-3" id="q1-3-2" value="Гомельская область" required=""
													data-index="3-2">
												<label for="q1-3-2" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Гомельская область
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step4">
												<input type="radio" name="question-3" id="q1-3-3" value="Минская область" required=""
													data-index="3-3">
												<label for="q1-3-3" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Минская область
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step4">
												<input type="radio" name="question-3" id="q1-3-4" value="Могилевская область" required=""
													data-index="3-4">
												<label for="q1-3-4" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Могилевская область
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step4">
												<input type="radio" name="question-3" id="q1-3-5" value="Другая область" required=""
													data-index="3-5">
												<label for="q1-3-5" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Другая область
														</div>
													</div>
												</label>
											</div>
										</div>

									</div>
									<div class="step__buttons">
										<button type="button" class="quiz-variants__btn next-step _main-btn" data-step="step4"
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
											data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа"
											data-bs-original-title="" title="" aria-describedby="popover928694">на следующий
											шаг</button>
									</div>
								</div>
								<div class="step4 step quiz-inner__item ">
									<div class="step__block">
										<h3 class="step__title">04. Как срочно вы хотите<br>
											произвести ремонт мебели?</h3>
										<div class="step__variants quiz-variants">
											<div class="quiz-variants__variant" data-step="step5">
												<input type="radio" name="question-4" id="q1-4-1" value="Как можно скорее" required=""
													data-index="4-1">
												<label for="q1-4-1" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Как можно скорее
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step5">
												<input type="radio" name="question-4" id="q1-4-2" value="В ближайшие	1-2 месяца" required=""
													data-index="4-2">
												<label for="q1-4-2" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															В ближайшие<br>
															1-2 месяца
														</div>
													</div>
												</label>
											</div>
											<div class="quiz-variants__variant" data-step="step5">
												<input type="radio" name="question-4" id="q1-4-3" value="Через 2 или более	месяцев" required=""
													data-index="4-3">
												<label for="q1-4-3" class="quiz-variants__radio-label">
													<div class="quiz-variants__question quiz-question">
														<div class="quiz-question__label">
															Через 2 или более<br>
															месяцев
														</div>
													</div>
												</label>
											</div>
										</div>
									</div>
									<div class="step__buttons">
										<button type="button" class="quiz-variants__btn next-step _main-btn" data-step="step5"
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
											data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа"
											data-bs-original-title="" title="" aria-describedby="popover928694">на следующий
											шаг</button>
									</div>
								</div>
								<div class="step5 step step-final">
									<div class="step-final__block">
										<div class="step-final__form form-head">
											<h2 class="form-head__title">
												Оставьте контакты и получите:
											</h2>
											<ul class="form-head__list">
												<li class="form-head__item">
													предварительный расчет стоимости
												</li>
												<li class="form-head__item">
													скидку 5% на первый заказ
												</li>
												<li class="form-head__item">
													декоративные подушки в подарок
												</li>
											</ul>
											<div class="form__container">
												<div class="form-block form__in">
													<input type="hidden" name="from" value="Рассчитайте стоимость ремонта + подарок">
													<div class="form-block__input">

														<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон"
															required="">
													</div>
													<button type="submit" class="_main-btn">
														Получить расчет стоимости<br>
														+ 2 подарка
													</button>
													<div class="form-check">
														<input type="checkbox" class="check" checked="" id="check22">
														<label class="form-check-label" for="check22">Я принимаю условия <a data-bs-toggle="modal"
																data-bs-target="#security-politics">политики конфеденциальности</a></label>
													</div>
												</div>
											</div>
											<div class="form-block__timer quiz-timer">
												<div id="timer" class="timer">
													<span class="tim">Возможность<br> <b>получить подарки</b><br> исчезнет через:</span>
													<div id="countdown2" class="countdown">
														<div class="countdown-number">
															<span class="minutes countdown-time">19</span>
															<div class="text-min">минут</div>
														</div>
														<span class="separator">:</span>
														<div class="countdown-number">
															<span class="seconds countdown-time">25</span>
															<div class="text-min">секунд</div>
														</div>
													</div>
												</div>
												<div class="quiz-timer__pic">
													<picture>
														<source srcset="img/present2.webp" type="image/webp">
														<img src="img/present2.png" alt="">
													</picture>
												</div>
											</div>
										</div>
										<div class="step-final__right right-block">
											<div class="right-block__title">
												Предварительный расчет
												стоимости готов
											</div>

											<div class="right-block__img">
												<picture>
													<source srcset="img/big-check.webp" type="image/webp">
													<img src="img/big-check.png" alt="">
												</picture>
											</div>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="city" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
					<img src="img/close.svg" alt="">
				</button>
				<div class="modal-body">
					<div class="city-block">
						<div class="city-block__item">
							<h3><b>Витебская область:</b></h3>
							<div class="text">
								<p>Бешенковичи</p>
								<p>Витебск</p>
								<p>Городок</p>
								<p>Дубровно</p>
								<p>Лепель </p>
								<p>Лиозно</p>
								<p>Орша, Барань</p>
								<p>Полоцк</p>
								<p>Сенно</p>
								<p>Толочин</p>
								<p>Новолукомль, Чашники</p>
								<p>Шумилино</p>
							</div>
						</div>
						<div class="city-block__item">
							<h3><b>Гомельская область:
								</b></h3>
							<div class="text">
								<p>Жлюбин</p>
								<p>Рогачев</p>
							</div>
						</div>
						<div class="city-block__item">
							<h3><b>Минская область:
								</b></h3>
							<div class="text">
								<p>Березино</p>
								<p>Борисов</p>
								<p>Крупски</p>
							</div>
						</div>
						<div class="city-block__item">
							<h3><b>Могилевская область:
								</b></h3>
							<div class="text">
								<p>Белыничи</p>
								<p>Бобруйск</p>
								<p>Быхов</p>
								<p>Горки</p>
								<p>Дрибин</p>
								<p>Климовичи</p>
								<p>Кричев</p>
								<p>Круглое</p>
								<p>Могилев</p>
								<p>Мстиславль</p>
								<p>Славгород</p>
								<p>Чауссы</p>
								<p>Чериков</p>
								<p>Шклов</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="security-politics" tabindex="-1" aria-labelledby="exampleModalLabel"
		style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<img src="img/close.svg" alt="">
					</button>
					<h3 class="text-center mt-5"><strong>Политика конфеденциальности</strong></h3>
					<div class="text p-5">
						Администрация данного Сайта не&nbsp;может передать или раскрыть информацию предоставленную пользователем
						(далее Пользователь) при регистрации и&nbsp;использовании функций сайта третьим лицам, кроме случаев,
						описанных законодательством страны, на&nbsp;территории которой пользователь ведет свою деятельность.
						<br><br>
						Для регистрации на&nbsp;сайте, пользователь обязан внести некоторую персональную информацию. Для проверки
						предоставленных данных, сайт оставляет за&nbsp;собой право потребовать доказательства идентичности
						в&nbsp;онлайн или офлайн режимах.
						<br><br>
						Сайт использует личную информацию Пользователя для обслуживания и&nbsp;для улучшения качества
						предоставляемых услуг. Часть персональной информации может быть предоставлена банку или платежной системе,
						в&nbsp;случае, если предоставление этой информации обусловлено процедурой перевода средств платежной
						системе, услугами которой Пользователь желает воспользоваться.
						<br><br>
						Сайт прилагает все усилия для сбережения в&nbsp;сохранности личных данных Пользователя.
						Личная информация может быть раскрыта в&nbsp;случаях, описанных законодательством, либо
						когда администрация сочтет подобные действия необходимыми для соблюдения юридической процедуры, судебного
						распоряжения или легального процесса необходимого для работы Пользователя с&nbsp;Сайтом.
						<br><br>
						В&nbsp;других случаях, ни&nbsp;при каких условиях, информация, которую Пользователь передает Сайту,
						не&nbsp;будет раскрыта третьим лицам.
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/modules.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="mailer/mailer.js"></script>
</body>

</html>
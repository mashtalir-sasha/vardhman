<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Вардхман Хелскейр | Корзина покупок</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta property="og:image" content="path/to/image.jpg">
	
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<meta name="theme-color" content="#1b75bc">
	<meta name="msapplication-navbutton-color" content="#1b75bc">
	<meta name="apple-mobile-web-app-status-bar-style" content="#1b75bc">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

</head>

<body id="top">

	<div class="scrollTop"></div>

	<nav class="main-nav">
		<div class="container">
			<div class="row">
				<div class="col-xs-4 visible-xs">
					<div class="mob-menu__btn visible-xs"></div>
				</div>
				<div class="col-xs-4 col-md-3">
					<a href="/"><img src="img/logo.svg" alt="Вардхман Хелскейр" class="main-nav__logo img-responsive hidden-xs"></a>
					<a href="/"><img src="img/logo-mini.svg" alt="Вардхман Хелскейр" class="main-nav__logo_mini img-responsive visible-xs"></a>
				</div>
				<div class="col-lg-2 col-lg-offset-1 col-md-3 col-sm-2 hidden-xs">
					<div class="head-call">
						<p class="head-call__txt">Горячая линия</p>
						<a href="tel:08009876543" class="head-call__link">0 800 987 65 43</a>
					</div>
				</div>
				<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4 col-sm-push-4 col-lg-push-5">
					<div class="dropdown">
						<div id="lang" class="lang" data-toggle="dropdown">
							<div class="lang__ico ru"></div>
							<p class="lang__name">rus</p>
							<div class="lang__link"></div>
						</div>
						<ul class="dropdown-menu lang-mnu" aria-labelledby="lang">
							<li>
								<a href="#">
									<div class="lang__ico ru"></div>
									<p class="lang__name">rus</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="lang__ico en"></div>
									<p class="lang__name">eng</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-lg-offset-1 col-sm-3 col-xs-9 col-sm-pull-2 col-lg-pull-1">
					<form action="#" class="search-form">
						<input type="text" class="search-form__input" name="search" placeholder="Поиск...">
						<button type="submit" class="search-form__btn"></button>
					</form>
				</div>
				<div class="col-md-1 col-sm-1 col-xs-3 col-sm-pull-2 col-lg-pull-1">
					<a href="basket.php" class="shop-cart">
						<div class="shop-cart__numb">4</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<ul class="nav-mnu hidden-xs">
						<li class="nav-mnu__li"><a href="/">главная</a></li>
						<li class="nav-mnu__li"><a href="about.php">о компании</a></li>
						<li class="nav-mnu__li"><a href="products.php">продукция</a></li>
						<li class="nav-mnu__li"><a href="health.php">о здоровье</a></li>
						<li class="nav-mnu__li"><a href="pharmacy.php">аптеки</a></li>
						<li class="nav-mnu__li"><a href="media.php">медиа</a></li>
						<li class="nav-mnu__li"><a href="/#contact">контакты</a></li>
					</ul>
					<div class="nav-mnu-soc hidden-sm hidden-xs">
						<a href="#" class="soc-wrap__link fb"></a>
						<a href="#" class="soc-wrap__link in"></a>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div id="content">
		<header class="basket">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="basket__ttl">Ваша корзина</h3>
					</div>
				</div>
			</div>
		</header>

		<section class="basket-item hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h3 class="basket-item__ttl">Наименование</h3>
					</div>
					<div class="col-sm-3">
						<h3 class="basket-item__ttl">Стоимость</h3>
					</div>
					<div class="col-md-2 col-sm-3">
						<h3 class="basket-item__ttl">Количество</h3>
					</div>
					<div class="col-sm-2 col-md-offset-1">
						<h3 class="basket-item__ttl">Итого</h3>
					</div>
				</div>
			</div>
		</section>
		<section class="basket-item">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="basket-product clearfix">
							<img src="img/basket_product.png" alt="Вардман Хелскейр" class="basket-product__img">
							<div class="basket-product__wrap">
								<div class="basket-product__ttl">Нутранекст ОптіКейр</div>
								<p class="basket-product__txt">(Витамины и минералы)<br>Пищевая добавка для лечения<br>похмельного синдрома</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 hidden-xs">
						<p class="basket-product__price">125 грн</p>
					</div>
					<div class="col-sm-3 col-md-2">
						<div class="add-cart">
							<div class="add-cart__numb add-cart__numb_l">-</div>
							<div class="add-cart__numb">1</div>
							<div class="add-cart__numb add-cart__numb_r">+</div>
						</div>
					</div>
					<div class="col-sm-2 col-md-offset-1">
						<p class="basket-product__price">125 грн</p>
						<a href="#" class="basket-product__del">Удалить <sup>x</sup></a>
					</div>
				</div>
			</div>
		</section>
		<section class="basket-item">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="basket-product clearfix">
							<img src="img/basket_product.png" alt="Вардман Хелскейр" class="basket-product__img">
							<div class="basket-product__wrap">
								<div class="basket-product__ttl">Нутранекст ОптіКейр</div>
								<p class="basket-product__txt">(Витамины и минералы)<br>Пищевая добавка для лечения<br>похмельного синдрома</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 hidden-xs">
						<p class="basket-product__price">125 грн</p>
					</div>
					<div class="col-sm-3 col-md-2">
						<div class="add-cart">
							<div class="add-cart__numb add-cart__numb_l">-</div>
							<div class="add-cart__numb">1</div>
							<div class="add-cart__numb add-cart__numb_r">+</div>
						</div>
					</div>
					<div class="col-sm-2 col-md-offset-1">
						<p class="basket-product__price">125 грн</p>
						<a href="#" class="basket-product__del">Удалить <sup>x</sup></a>
					</div>
				</div>
			</div>
		</section>
		<section class="basket-item">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="basket-product clearfix">
							<img src="img/basket_product.png" alt="Вардман Хелскейр" class="basket-product__img">
							<div class="basket-product__wrap">
								<div class="basket-product__ttl">Нутранекст ОптіКейр</div>
								<p class="basket-product__txt">(Витамины и минералы)<br>Пищевая добавка для лечения<br>похмельного синдрома</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 hidden-xs">
						<p class="basket-product__price">125 грн</p>
					</div>
					<div class="col-sm-3 col-md-2">
						<div class="add-cart">
							<div class="add-cart__numb add-cart__numb_l">-</div>
							<div class="add-cart__numb">1</div>
							<div class="add-cart__numb add-cart__numb_r">+</div>
						</div>
					</div>
					<div class="col-sm-2 col-md-offset-1">
						<p class="basket-product__price">125 грн</p>
						<a href="#" class="basket-product__del">Удалить <sup>x</sup></a>
					</div>
				</div>
			</div>
		</section>
		<section class="basket-item">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="basket-product clearfix">
							<img src="img/basket_product.png" alt="Вардман Хелскейр" class="basket-product__img">
							<div class="basket-product__wrap">
								<div class="basket-product__ttl">Нутранекст ОптіКейр</div>
								<p class="basket-product__txt">(Витамины и минералы)<br>Пищевая добавка для лечения<br>похмельного синдрома</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 hidden-xs">
						<p class="basket-product__price">125 грн</p>
					</div>
					<div class="col-sm-3 col-md-2">
						<div class="add-cart">
							<div class="add-cart__numb add-cart__numb_l">-</div>
							<div class="add-cart__numb">1</div>
							<div class="add-cart__numb add-cart__numb_r">+</div>
						</div>
					</div>
					<div class="col-sm-2 col-md-offset-1">
						<p class="basket-product__price">125 грн</p>
						<a href="#" class="basket-product__del">Удалить <sup>x</sup></a>
					</div>
				</div>
			</div>
		</section>

		<form action="">
			<section class="basket-form">
				<div class="container">
					<div class="row">
						<div class="col-md-6 hidden-sm hidden-xs">
							<h3 class="basket-form__ttl">Контактная информация</h3>
						</div>
						<div class="col-md-6">
							<p class="basket-form__price">Общая сумма: <span>500 грн</span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 hidden-sm hidden-xs">
							<p class="basket-form__txt">Чтобы оформить заявку, оставьте, пожалуйста свои контактные даные и наш мененджер свяжится с вами для оформления заказа</p>
							<div class="basket-help">
								<h3 class="basket-help__ttl">Нужна помощь?</h3>
								<p class="basket-help__txt">Наши операторы доступны по будним дням с 10:00 до 20:00</p>
								<a href="tel:+919328342210" class="basket-help__link">+91 93 2834 22 10</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="rline">
								<input type="text" name="name" placeholder="Имя" class="field rfield">
							</div>
							<div class="rline">
								<input type="text" name="email" placeholder="E-mail" class="field rfield">
							</div>
							<div class="rline">
								<select name="pay" class="field">
									<option disabled selected>Варианты оплаты</option>
									<option value="">Способ 1</option>
									<option value="">Способ 2</option>
									<option value="">Способ 3</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="rline">
								<input type="text" name="phone" placeholder="Мобильный номер" class="field rfield">
							</div>
							<textarea name="addr" placeholder="Адрес доставки" class="field"></textarea>
							<button type="submit" class="basket-form__btn">Оформить заказ</button>
						</div>
					</div>
				</div>
			</section>
		</form>
	</div>

	<footer class="foot">
		<div class="container">
			<div class="row hidden-xs">
				<div class="col-sm-3">
					<a href="/" class="main-nav__logo"><img src="img/logo.svg" alt="Вардхман Хелскейр" class="img-responsive"></a>
				</div>
				<div class="col-sm-9">
					<ul class="nav-mnu nav-mnu_foot">
						<li class="nav-mnu__li"><a href="/">главная</a></li>
						<li class="nav-mnu__li"><a href="about.php">о компании</a></li>
						<li class="nav-mnu__li"><a href="products.php">продукция</a></li>
						<li class="nav-mnu__li"><a href="health.php">о здоровье</a></li>
						<li class="nav-mnu__li"><a href="pharmacy.php">аптеки</a></li>
						<li class="nav-mnu__li"><a href="media.php">медиа</a></li>
						<li class="nav-mnu__li"><a href="/#contact">контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="cprt">Copyright © 2017 Вардхман Хелскейр. All rights reserved.</div>
				</div>
			</div>
		</div>
	</footer>

	<link rel="stylesheet" href="css/style.min.css">
	<script src="js/scripts.min.js"></script>

</body>
</html>
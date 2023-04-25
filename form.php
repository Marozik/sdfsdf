<!DOCTYPE html>
<html lang="en">

<head>
	<title>Inquiry form</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20230425135408">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<header data-scroll class="header">
			<div class="header__container">
				<div data-da=".menu-right__body, 992, first" class="header__menu menu-left">
					<nav class="menu-left__body">
						<ul class="menu-left__list">
							<li class="menu-left__item"><a href="index.html" class="menu-left__link">home</a></li>
							<li class="menu-left__item"><a href="food.html" class="menu-left__link">food</a></li>
							<li class="menu-left__item"><a href="drinks.html" class="menu-left__link">drinks</a></li>
						</ul>
					</nav>
				</div>
				<a href="index.html" class="header__logo">
					<picture><source srcset="img/header/logo.webp" type="image/webp"><img src="img/header/logo.png" alt="Header logo" /></picture>
				</a>
				<div class="header__menu menu-right">
					<nav class="menu-right__body">
						<ul class="menu-right__list">
							<li class="menu-right__item"><a href="space.html" class="menu-right__link">events space</a></li>
							<li class="menu-right__item"><a href="happenings.html" class="menu-right__link">happenings</a></li>
							<li class="menu-right__item"><a href="contact.html" class="menu-right__link">contact</a></li>
						</ul>
					</nav>
				</div>
				<button type="button" class="header__icon icon-menu"><span></span></button>
			</div>
		</header>

		<main class="form">
			<section class="form__intro intro">
				<div class="intro__body">
					<h1 class="intro__title title">Inquiry form</h1>
					<div class="intro__buttons">
						<a href="tel:8133741241" class="intro__button button">813-374-1241</a>
						<a href="form.html" class="intro__button button">Reservations</a>
					</div>
				</div>
				<div class="intro__background intro__background_top">
					<picture><source srcset="img/form/intro/image-01.webp" type="image/webp"><img src="img/form/intro/image-01.jpeg" alt="Inquiry form image" /></picture>
				</div>
			</section>
			<div class="form__inquiry inquiry-form">
				<div class="inquiry-form__container">
					<div data-watch-threshold="0.1" data-watch-once data-watch class="inquiry-form__body">
						<form action="#" class="inquiry-form__big-form big-form">
							<div class="big-form__text">
								<p>
									For inquiries about private events hosted at Gallaghers Steakhouse, <br />
									please fill out the form below. A member of our events staff will be in touch with you shortly.
								</p>
							</div>
							<div class="big-form__top top-form">
								<div class="top-form__items">
									<div class="top-form__line">
										<label for="first-name" class="top-form__label">First Name*</label>
										<input id="first-name" type="text" name="User-first-name" required class="top-form__input" />
									</div>
									<div class="top-form__line">
										<label for="last-name" class="top-form__label">Last Name*</label>
										<input id="last-name" type="text" name="User-last-name" required class="top-form__input" />
									</div>
									<div class="top-form__line">
										<label for="email" class="top-form__label">Email Address*</label>
										<input id="email" type="email" name="User-email" required class="top-form__input" />
									</div>
									<div class="top-form__line">
										<label for="info" class="top-form__label">Info</label>
										<input id="info" type="text" name="User-info" class="top-form__input" />
									</div>
									<div class="top-form__line">
										<label for="phone" class="top-form__label">Phone Number</label>
										<input id="phone" type="tel" name="User-phone" class="top-form__input" />
									</div>
									<div class="top-form__line top-form__line_small">
										<label for="ext" class="top-form__label">Ext.</label>
										<input id="ext" type="text" name="User-ext" class="top-form__input" />
									</div>
								</div>
							</div>
							<div class="big-form__details details-form">
								<h2 class="details-form__title">your event details</h2>
								<div class="details-form__line">
									<label for="event" class="details-form__label">Nature of this Event(e.g., Birthday Party or Business Dinner) </label>
									<input type="text" id="event" name="event-name" class="details-form__input" />
								</div>
								<div class="details-form__line details-form__line_half">
									<label for="date" class="details-form__label">Event Date</label>
									<div class="details-form__wrapper">
										<button type="button" class="details-form__calendar _icon-calendar"></button>
										<input data-datepicker type="text" id="date" name="date" class="details-form__input" />
									</div>
								</div>
								<div class="details-form__line details-form__line_half choose-time">
									<div class="choose-time__item">
										<label for="start-time" class="choose-time__label">Start Time</label>
										<input type="time" id="start-time" value="6:00" name="start-time" class="choose-time__input" />
									</div>
									<div class="choose-time__item">
										<label for="end-time" class="choose-time__label">End Time</label>
										<input type="time" id="end-time" name="end-time" class="choose-time__input" />
									</div>
								</div>
								<div class="details-form__line details-form__line_small">
									<label for="people" class="details-form__label">Number of People</label>
									<input type="number" id="people" name="number-of-people" class="details-form__input" />
								</div>
								<div class="details-form__line">
									<label for="textarea" class="details-form__label">Is there any additional information you would like to add? </label>
									<textarea name="info" id="textarea" class="details-form__textarea"></textarea>
								</div>
								<div class="details-form__line">
									<label for="select" class="details-form__label">How did you hear about us? </label>
									<select name="hear-about-us" class="details-form__select _icon-more-next" data-class-modif="form">
										<option class="details-form__option" value="1" selected>Some text 1</option>
										<option class="details-form__option" value="2">Some text 2</option>
										<option class="details-form__option" value="3">Some text 3</option>
										<option class="details-form__option" value="4">Some text 4</option>
									</select>
								</div>
								<button type="submit" class="details-form__button button button_black">Inquiry Form</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__top top-footer">
					<div class="top-footer__hours hours-footer">
						<h3 class="hours-footer__title title-footer">Hours</h3>
						<ul class="hours-footer__list">
							<li class="hours-footer__item">Monday: 3pm - 12am</li>
							<li class="hours-footer__item">Tuesday: 3pm - 12am</li>
							<li class="hours-footer__item">Wednesday: 3pm - 1am</li>
							<li class="hours-footer__item">Thursday: 3pm - 2am</li>
							<li class="hours-footer__item">Friday: 3pm - 3am</li>
							<li class="hours-footer__item">Saturday: 12pm - 3am</li>
							<li class="hours-footer__item">Sunday: 12pm - 12pm</li>
						</ul>
					</div>
					<div class="top-footer__contacts contacts-footer">
						<a href="tel:8133741241" class="contacts-footer__call">813-374-1241</a>
						<div class="contacts-footer__links">
							<a href="#" class="contacts-footer__link _icon-instagram"></a>
							<a href="#" class="contacts-footer__link _icon-email"></a>
						</div>
						<div class="contacts-footer__logo">
							<picture><source srcset="img/footer/footer-logo.webp" type="image/webp"><img src="img/footer/footer-logo.png" alt="Footer logo" /></picture>
						</div>
					</div>
					<form action="#" class="top-footer__form form-footer">
						<h3 class="form-footer__title title-footer">Join Our Mailing List</h3>
						<div class="form-footer__line">
							<input type="text" name="User-first-name" placeholder="First Name" class="form-footer__input" />
						</div>
						<div class="form-footer__line">
							<input type="text" name="User-last-name" placeholder="Last Name" class="form-footer__input" />
						</div>
						<div class="form-footer__line">
							<input type="email" name="User-email" placeholder="E-mail" class="form-footer__input" />
						</div>
						<button type="submit" class="form-footer__button button">Join</button>
					</form>
				</div>
				<div class="footer__bottom bottom-footer">
					<div class="bottom-footer__copy">© 2023 - all rights reserved.</div>
					<a href="#" class="bottom-footer__link"> site by: studioality </a>
				</div>
			</div>
		</footer>

	</div>
	<script src="js/app.min.js?_v=20230425135408"></script>
</body>

</html>
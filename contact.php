<?php include 'includes/header.php';?>
		<main class="contact">
			<section class="contact__intro intro">
				<div class="intro__body">
					<h1 class="intro__title title">Contact</h1>
					<div class="intro__buttons">
						<a href="tel:8133741241" class="intro__button button">813-374-1241</a>
						<a href="form.html" class="intro__button button">Reservations</a>
					</div>
				</div>
				<div class="intro__background">
					<picture><source srcset="img/contact/intro/image-01.webp" type="image/webp"><img src="img/contact/intro/image-01.jpeg" alt="Contact image" /></picture>
				</div>
			</section>
			<div class="contact__info info-contact">
				<div class="info-contact__container">
					<div data-watch-threshold="0.3" data-watch-once data-watch class="info-contact__map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.4656671284706!2d-82.46039618493262!3d27.949021582692435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2c5da1c1662e7%3A0xbdfe7adb1c17b4d5!2s511%20Franklin!5e0!3m2!1sen!2sdk!4v1682180767152!5m2!1sen!2sdk" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div data-watch-threshold="0.3" data-watch-once data-watch class="info-contact__body body-info">
						<a target="_blank" href="https://goo.gl/maps/xaCTPMHsZTjW89gR8" class="body-info__address">
							<span>511 Franklin St</span> <br />
							Tampa FL 33602
						</a>
						<a href="tel:8133741241" class="body-info__call">813-374-1241</a>
						<div class="info-contact__hours hours-footer">
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
					</div>
				</div>
			</div>
			<section data-watch-threshold="0.2" data-watch-once data-watch class="contact__callback callback">
				<div class="callback__container">
					<div class="callback__header">
						<h2 class="callback__title">Inquiry Form</h2>
						<div class="callback__subtitle">Please use form below to reach out to us.</div>
					</div>
					<form action="#" class="callback__form form-callback">
						<div class="form-callback__line">
							<label for="name" class="form-callback__label">Name</label>
							<input type="text" name="User-name" id="name" required class="form-callback__input" />
						</div>
						<div class="form-callback__line">
							<label for="email" class="form-callback__label">E-mail</label>
							<input type="email" name="User-email" id="email" required class="form-callback__input" />
						</div>
						<div class="form-callback__line">
							<label for="phone" class="form-callback__label">Phone</label>
							<input type="tel" name="User-phone" id="phone" class="form-callback__input" />
						</div>
						<div class="form-callback__line">
							<label for="message" class="form-callback__label">Message</label>
							<textarea class="form-callback__textarea" name="User-message" id="message"></textarea>
						</div>
						<button type="submit" class="form-callback__button button button_black">Send</button>
					</form>
				</div>
			</section>
		</main>
<?php include 'includes/footer.php';?>

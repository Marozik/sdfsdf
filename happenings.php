<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Happenings</title>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <!-- <style>body{opacity: 0;}</style> -->
    <link rel="stylesheet" href="css/style.min.css?_v=20230425135408" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <picture
              ><source srcset="img/header/logo.webp" type="image/webp" />
              <img src="img/header/logo.png" alt="Header logo"
            /></picture>
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

      <main class="happenings">
        <section class="happenings__intro intro">
          <div class="intro__body">
            <h1 class="intro__title title">Event space</h1>
            <div class="intro__buttons">
              <a href="tel:8133741241" class="intro__button button">813-374-1241</a>
              <a href="form.html" class="intro__button button">Reservations</a>
            </div>
          </div>
          <div class="intro__background">
            <picture
              ><source srcset="img/happenings/intro/image-01.webp" type="image/webp" />
              <img src="img/happenings/intro/image-01.jpeg" alt="Happenings image"
            /></picture>
          </div>
        </section>
        <div data-watch-threshold="0.2" data-watch-once data-watch class="happenings__calendar calendar-happenings">
          <div id="calendar"></div>
        </div>
      </main>
      
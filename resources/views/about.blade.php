<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>О нас</title>
</head>
<body>
<header class="header">
    <img src="{{Vite::asset('resources/img/logo.png')}}" alt="" class="header__logo">
    <ul class="nav">
        <li class="nav__link">Трансляции</li>
        <li class="nav__link">Правила</li>
        <li class="nav__link">Новости</li>
        <li class="nav__link">О нас</li>
    </ul>
    <ul class="social">
        <li class="social__link">
            <img src="{{Vite::asset('resources//img/telegram.svg')}}" alt="">
        </li>
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/insta.svg')}}" alt="">
        </li>
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/vk.svg')}}" alt="">
        </li>
    </ul>
</header>
<main class="container">
    <section class="welcome">
        <div class="welcome__text-area">
            <h2 class="welcome__text">Добро пожаловать В FAR EAST SPORTS</h2>
            <p class="welcome__subtitle">Far East Sports – новый стриминговый сервис, агрегатор и организатор уникальных спортивных событий</p>
        </div>
        <div class="welcome__logo">
            <p class="welcome__subtext-logo"></p>
        </div>
    </section>
    <section class="advantage">
        <h2 class="advantage__title">FAR EAST SPORTS</h2>
        <div class="advantage__block">
            <div class="advantage__item">
                <img class="advantage__item-image" src="{{Vite::asset('resources/img/INST - iluhander (1 из 157)_edited 1.png')}}" alt="">
                <p class="advantage__item-text">Новые турниры</p>
            </div>
            <div class="advantage__item">
                <img class="advantage__item-image" src="{{Vite::asset('resources/img/laptop 1.png')}}" alt="">
                <p class="advantage__item-text">Новые турниры</p>
            </div>
            <div class="advantage__item">
                <img class="advantage__item-image" src="{{Vite::asset('resources/img/INST - iluhander (1 из 157)_edited 1.png')}}" alt="">
                <p class="advantage__item-text">Новые турниры</p>
            </div>
        </div>
        <p class="advantage__subtext">Мы предоставляем видеоконтент, обзоры, новости, анонсы, расписание, результаты и статистику. Каждый сможет составить свое мнение и сформировать прогноз</p>
    </section>
    <section class="why-us">
        <div class="why-us__image-area">

        </div>
        <div class="why-us__text-area">
            <h2 class="why-us__title">FAR EAST SPORTS</h2>
            <p class="why-us__subtitle">Высокое качество Full HD видеотрансляций</p>
            <ul class="peculiarity__list">
                <li class="peculiarity__item">
                    <p class="peculiarity__marker">1</p>
                    <p class="peculiarity__text">Высокое качество Full HD видеотрансляций</p></li>
                <li class="peculiarity__item">
                    <p class="peculiarity__marker">2</p>
                    <p class="peculiarity__text">Онлайн-протокол каждого матча</p></li>
                <li class="peculiarity__item">
                    <p class="peculiarity__marker">3</p>
                    <p class="peculiarity__text">Полная статистика команд и игровых дней по проходящим турнирам</p></li>
            </ul>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="footer__logo"></div>
    <a class="footer__link" href="/">Вход в скаут систему</a>
    <a class="footer__link" href="/">Email: fareastsport@bk.ru</a>
    <ul class="social">
        <li class="social__link">
            <img src="{{Vite::asset('resources//img/telegram.svg')}}" alt="">
        </li>
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/insta.svg')}}" alt="">
        </li>
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/vk.svg')}}" alt="">
        </li>
    </ul>
</footer>
</body>
</html>

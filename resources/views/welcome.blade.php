<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Far East Sports </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script
    @vite('resources/css/app.css')
</head>
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
<section class="kind-sport">
    <a href="/" class="hockey">
        <img src="{{Vite::asset('resources/img/logo-dvhl.png')}}" alt="" class="kind-sport__big-img">
        <p class="kind-sport__text">DVHL 3X3</p>
    </a>
    <a href="/" class="ice-box">
        <img src="{{Vite::asset('resources/img/logo-box.png')}}" alt="" class="kind-sport__big-img">
        <p class="kind-sport__text">ICE BOX</p>
    </a>
    <a href="/" class="volta-football">
        <img src="{{Vite::asset('resources/img/1.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">VOLTA FOOTBALL</p>
    </a>
    <a href="/" class="table-tennis">
        <img src="{{Vite::asset('resources/img/2.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">TABLE TENNIS</p>
    </a>
    <a href="/" class="badminton">
        <img src="{{Vite::asset('resources/img/3.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">BADMINTON</p>
    </a>
    <a href="/" class="footvolley">
        <img src="{{Vite::asset('resources/img/4.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">FOOTVOLLEY</p>
    </a>
    <a href="/" class="smart-hockey">
        <img src="{{Vite::asset('resources/img/5.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">SMART HOCHEY</p>
    </a>
    <a href="/" class="darts">
        <img src="{{Vite::asset('resources/img/6.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">DARTS</p>
    </a>
    <a href="/" class="esports">
        <img src="{{Vite::asset('resources/img/7.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">eSPORTS</p>
    </a>
    <a href="/" class="kabadoi">
        <img src="{{Vite::asset('resources/img/8.png')}}" alt="" class="kind-sport__img">
        <p class="kind-sport__text">HABADOI</p>
    </a>
</section>
<section class="broadcast">
    <h3 class="broadcast__title">Смотреть</h3>
    <div class="arrow-container">
        <div class="swiper">
            <div class=" swiper-wrapper">
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
                <div class="ad swiper-slide">
                    <div class="ad__background">
                        <div class="ad_date">
                            <p>2023-01-30</p>
                            <p>15:00</p>
                        </div>
                        <div class="ad__team-section">
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                            <p>VS</p>
                            <div class="team">
                                <div class="team__icon"></div>
                                <p class="team__title">ДВГАФК</p>
                            </div>
                        </div>
                    </div>
                    <div class="ad__title">
                        <p>DVHL 3X3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-next"></div>
        <div class="button-prev"></div>
    </div>
</section>
<section class="about">
    <div class="about__item">
        <h2 class="about__title">SUPER LIGA</h2>
        <p class="about__text">
            Это площадка для постоянной соревновательной практики, развития молодых спортсменов и комфортной игры
            на любом уровне. Мы стараемся делать спорт на Дальнем Востоке популярнее среди любителей и профессионалов,
            вовлекать молодёжь и помогать вернуться тем, кто завершил карьеру в большом спорте.
        </p>
    </div>
    <div class="poster">
        <p class="poster__title">SUPER LIGA</p>
    </div>
</section>
<section class="news">
    <h1 class="news__title">НОВОСТИ</h1>
    <div class="arrow-container">
        <div class="news-swiper">
            <div class="news__section swiper-wrapper">
                <div class="news__item swiper-slide">
                    <div class="news__img"></div>
                    <p class="news__text">
                        Вчера проходил тестовый турнир
                        в рамках SUPER Liga Table Tennis.
                        Посмотри как это было
                    </p>
                </div>
                <div class="news__item swiper-slide">
                    <div class="news__img"></div>
                    <p class="news__text">
                        Вчера проходил тестовый турнир
                        в рамках SUPER Liga Table Tennis.
                        Посмотри как это было
                    </p>
                </div>
                <div class="news__item swiper-slide">
                    <div class="news__img"></div>
                    <p class="news__text">
                        Вчера проходил тестовый турнир
                        в рамках SUPER Liga Table Tennis.
                        Посмотри как это было
                    </p>
                </div>
                <div class="news__item swiper-slide">
                    <div class="news__img"></div>
                    <p class="news__text">
                        Вчера проходил тестовый турнир
                        в рамках SUPER Liga Table Tennis.
                        Посмотри как это было
                    </p>
                </div>
            </div>
        </div>
        <div class="news-button-next"></div>
        <div class="news-button-prev"></div>
    </div>
</section>
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
<script>
    const swiper = new Swiper('.swiper', {

        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const swiper2 = new Swiper('.news-swiper', {
        // Optional parameters
        // direction: 'vertical',
        // loop: true,
        // slidesPerView: 1,
        // spaceBetween: 100,
        // // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        // },

        // Navigation arrows
        navigation: {
            nextEl: '.news-button-next',
            prevEl: '.news-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Far East Sports </title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body>
<header class="header">
    <div class="header__logo"></div>
    <ul class="nav">
        <li class="nav__link">Трансляции</li>
        <li class="nav__link">Правила</li>
        <li class="nav__link">Новости</li>
        <li class="nav__link">О нас</li>
    </ul>
    <ul class="social">
        <li class="social__link social__telegram"></li>
        <li class="social__link social__vk"></li>
        <li class="social__link social__insta"></li>
    </ul>
</header>
<section class="kind-sport">
    <div class="hockey">
        <div class="hockey__img"></div>
        <p class="kind-sport__text">DVHL 3X3</p>
    </div>
    <div class="ice-box">
        <div class="ice-box__img"></div>
        <p class="kind-sport__text">ICE BOX</p>
    </div>
    <div class="volta-football">
        <div class="volta-football__img"></div>
        <p class="kind-sport__text">VOLTA FOOTBALL</p>
    </div>
    <div class="table-tennis">
        <div class="table-tennis__img"></div>
        <p class="kind-sport__text">TABLE TENNIS</p>
    </div>
    <div class="badminton">
        <div class="badminton__img"></div>
        <p class="kind-sport__text">BADMINTON</p>
    </div>
    <div class="footvolley">
        <div class="footvolley__img"></div>
        <p class="kind-sport__text">FOOTVOLLEY</p>
    </div>
    <div class="smart-hockey">
        <div class="smart-hockey__img"></div>
        <p class="kind-sport__text">SMART HOCHEY</p>
    </div>
    <div class="darts">
        <div class="darts__img"></div>
        <p class="kind-sport__text">DARTS</p>
    </div>
    <div class="esports">
        <div class="esports__img"></div>
        <p class="kind-sport__text">eSPORTS</p>
    </div>
    <div class="kabadoi">
        <div class="kabadoi__img"></div>
        <p class="kind-sport__text">HABADOI</p>
    </div>
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
        <li class="social__link social__telegram"></li>
        <li class="social__link social__vk"></li>
        <li class="social__link social__insta"></li>
    </ul>
</footer>
</body>
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
        // slidesPerView: 2,
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
</html>

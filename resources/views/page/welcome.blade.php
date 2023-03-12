@extends('base')

@section('content')
    <section class="kind-sport">
        <a href="/event" class="hockey">
            <img src="{{Vite::asset('resources/img/logo-dvhl.png')}}" alt="" class="kind-sport__big-img">
            <p class="kind-sport__text">DVHL 3X3</p>
        </a>
        <a href="/" class="ice-box">
            <img src="{{Vite::asset('resources/img/logo-box.png')}}" alt="" class="kind-sport__big-img">
            <p class="kind-sport__text">ICE BOX</p>
        </a>
        <a href="/division" class="volta-football">
            <img src="{{Vite::asset('resources/img/kind-sport/volta-football.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">VOLTA FOOTBALL</p>
        </a>
        <a href="/table-tennis" class="table-tennis">
            <img src="{{Vite::asset('resources/img/kind-sport/table-tennis.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">TABLE TENNIS</p>
        </a>
        <a href="/badminton" class="badminton">
            <img src="{{Vite::asset('resources/img/kind-sport/badminton.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">BADMINTON</p>
        </a>
        <a href="/footvolley" class="footvolley">
            <img src="{{Vite::asset('resources/img/kind-sport/footvolley.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">FOOTVOLLEY</p>
        </a>
        <a href="/smart-hockey" class="smart-hockey">
            <img src="{{Vite::asset('resources/img/kind-sport/smart-hockey.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">SMART HOCHEY</p>
        </a>
        <a href="/darts" class="darts">
            <img src="{{Vite::asset('resources/img/kind-sport/darts.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">DARTS</p>
        </a>
        <a href="/e-sports" class="e-sports">
            <img src="{{Vite::asset('resources/img/kind-sport/e-sports.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">eSPORTS</p>
        </a>
        <a href="/habaddi" class="habaddi">
            <img src="{{Vite::asset('resources/img/kind-sport/habaddi.png')}}" alt="" class="kind-sport__img">
            <p class="kind-sport__text">HABADOI</p>
        </a>
    </section>
    <section class="broadcast">
        <h3 class="broadcast__title">Смотреть</h3>
        <div class="arrow-container">
            <div class="swiper">
                <div class=" swiper-wrapper">
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>
                    <a href="/broadcast" class="ad swiper-slide">
                        <div class="ad__background">
                            <div class="ad_date">
                                <p>2023-01-30</p>
                                <p>15:00</p>
                            </div>
                            <div class="ad__team-section">
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                                <p class="ad__vs">VS</p>
                                <div class="team">
                                    <img class="team__icon" src="{{Vite::asset('resources/img/hockey-player 1.png')}}">
                                    <p class="team__title">ДВГАФК</p>
                                </div>
                            </div>
                        </div>
                        <p class="ad__title">DVHL 3X3</p>
                    </a>

                </div>
            </div>
            <img class="button-next" src="{{Vite::asset('resources/img/arrow.svg')}}">
            <img class="button-prev" src="{{Vite::asset('resources/img/arrow.svg')}}">
        </div>
    </section>
    <section class="about">
        <h2 class="about__title">SUPER LIGA</h2>
        <div class="about__block">
            <p class="about__text">
                Это площадка для постоянной соревновательной практики, развития молодых спортсменов и комфортной игры
                на любом уровне. Мы стараемся делать спорт на Дальнем Востоке популярнее среди любителей и
                профессионалов,
                вовлекать молодёжь и помогать вернуться тем, кто завершил карьеру в большом спорте.
            </p>
            <div class="poster">
                <img class="poster__cubes" src="{{Vite::asset('resources/img/cubes.png')}}" alt="">
                <p class="poster__title">SUPER LIGA</p>
            </div>
        </div>
    </section>
    <section id="news" class="news">
        <h1 class="news__title">НОВОСТИ</h1>
        <div class="arrow-container">
            <div class="news-swiper">
                <div class="news__section swiper-wrapper">
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                    <div class="news__item swiper-slide">
                        <img class="news__img" src="{{Vite::asset('resources/img/Rectangle 15.png')}}">
                        <p class="news__text">
                            Вчера проходил тестовый турнир
                            в рамках SUPER Liga Table Tennis.
                            Посмотри как это было
                        </p>
                    </div>
                </div>
            </div>
            <img class="news-button-next" src="{{Vite::asset('resources/img/arrow.svg')}}">
            <img class="news-button-prev" src="{{Vite::asset('resources/img/arrow.svg')}}">
        </div>
    </section>
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
@endsection

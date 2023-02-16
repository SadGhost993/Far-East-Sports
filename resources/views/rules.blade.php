<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Правила</title>
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
    <section class="our-rules">
        <h1 class="our-rules__title">ПРАВИЛА</h1>
        <h2 class="our-rules__text-title">DVHL 3X3</h2>
        <p class="our-rules__text">
            DV HOCKEY LEAGUE – это новая спортивная лига, ориентированная на развитие и популяризацию
            самого динамичного формата хоккея – хоккея 3x3.
            Как игровая дисциплина данный формат игры
            в хоккей уже используется на различных крупных международных турнирах.
            Главное преимущество хоккея 3х3 перед классическим форматом - это более высокая динамика игры,
            зрелищность и значительно превышающее количество бросков за игру.
        </p>
        <div class="our-rules__grid">
            <div class="our-rules__grid-item-1">
                <img class="our-rules__photo" src="{{Vite::asset('resources/img/Rectangle 24.png')}}" alt="">
            </div>
            <div class="our-rules__grid-item-2">
                <img class="our-rules__photo" src="{{Vite::asset('resources/img/Rectangle 25.png')}}" alt="">
            </div>
            <div class="our-rules__grid-item-3">
                <img class="our-rules__photo" src="{{Vite::asset('resources/img/Rectangle 26.png')}}" alt="">
            </div>
            <div class="our-rules__grid-item-4">
                <img class="our-rules__photo" src="{{Vite::asset('resources/img/Rectangle 27.png')}}" alt="">
            </div>
            <div class="our-rules__grid-item-5">
                <p class="our-rules__numeric">1</p>
                <p class="our-rules__subtitle">Игра длится</p>
                <p class="our-rules__subtext">3 периода по 7 минут, перерыв между периодами - 2 минуты</p>
            </div>
            <div class="our-rules__grid-item-6">
                <p class="our-rules__numeric">2</p>
                <p class="our-rules__subtitle">Не фиксируются</p>
                <p class="our-rules__subtext">пробросы</p>
            </div>
            <div class="our-rules__grid-item-7">
                <p class="our-rules__numeric">3</p>
                <p class="our-rules__subtitle">Вместо 2-х минутного удаления</p>
                <p class="our-rules__subtext">назначается буллит: штрафной бросок от красной линии</p>
            </div>
            <div class="our-rules__grid-item-8">
                <p class="our-rules__numeric">4</p>
                <p class="our-rules__subtitle">Состав команд</p>
                <p class="our-rules__subtext">Заявка:
                    минимум 5 полевых игроков и вратарь
                    На площадке: 3 полевых игрока и вратарь
                    Замена вратаря на полевого игрока разрешена
                </p>
            </div>
        </div>
    </section>
    <section class="sports-rules">
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">SMART HOCKEY</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        Cоревнование, в котором дополнили друг друга хоккей на траве и флорбол.
                        Матчи проходят в рамках правил по виду спрта флорбол, с некоторыми изменениями.
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">вместо льда – паркетное покрытие</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">вместо шайбы – пластиковый мяч</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">вместо коньков – кроссовки</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">без силовых приёмов и офсайдов</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">послематчевые броски в случае ничьей</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 35.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">SMART HOCKEY</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">BEACH FOOTVOLLEY</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        Волейбол ногами на песчаном покрытии, в котором принимают участие
                        2 команды, в составах двух человек.
                        Игры проходят в три сета до 15 очков (с третьего сета до 11 очков)
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">вместо паркета – песок</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">нет фолов за касание сетки</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">никакой обуви - голые ноги</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">присуждаются 2 очка всего 3 раза за тайм, когда у игрока одна нога
                                будет выше головы, а вторая оторвана от земли</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">меньшие размеры корта</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 42.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">FOOTVOLLEY</p>
                        <p class="sports-rules__sport-name">BEACH</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">VOLTA FOOTBALL</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        Разновидность футбола, в которой команды играют между собой составами в 3 полевых игрока.
                        Игры проходят на площадке 29м х 15м.
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">маленькие ворота без вратаря</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">матч состоит из 2-х таймов по 7 минут</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">неограниченное количество замен</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">запрещено совершать подкаты</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">карточки в разных матчах не сумируются</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 49.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">FOOTBALL</p>
                        <p class="sports-rules__sport-name">VOLTA</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">ICE BOX</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        Бои на льду проходят в стойке внутри круга диаметром 9м. В начале боя соперники находится
                        диаметрально противоположно друг друга - за кругом, одним коньком касаясь разметки.
                        Один раунд - 1 минута чистого времени, перерыв между раундами 30 секунд.
                        Количество раундов: 5. Чистая победа: нокаут/три нокдауна.
                    </p>
                    <p class="sports-rules__list-subtitle">Разрешено</p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">любые удары руками, кроме: ударов в шею, затылок, позвоночник и по
                                почкам</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">удары открытой и закрытой перчаткой, кроме колющих ударов в
                                глаза</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">удары плечами, любые удары корпусом,кроме удара “колено в
                                колено”</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">подхваты и развороты соперника без захвата за майку и
                                экипировку</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">выезд за пределы круга одним коньком, есил второй касается
                                разметки</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <div class="sports-rules__right-top">
                        <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 56.png')}}" alt="">
                        <div class="sports-rules__container-for-name">
                            <p class="sports-rules__sport-name">ICE BOX</p>
                        </div>
                    </div>
                    <div class="sports-rules__right-bottom">
                        <p class="sports-rules__list-subtitle">Запрещено</p>
                        <ul class="peculiarity__list">
                            <li class="peculiarity__item">
                                <p class="peculiarity__marker">1</p>
                                <p class="peculiarity__text">удары ногами, бить ниже пояса, удары головой, удушающие действия, удары в пах</p></li>
                            <li class="peculiarity__item">
                                <p class="peculiarity__marker">2</p>
                                <p class="peculiarity__text">борьба, атака упавшего противника, нырки, пассивное ведение боя, линчевание, укус противника</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">TABLE TENNIS</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        олимпийский вид спорта, спортивная игра с мячом,
                        в которой используют специальные ракетки и игровой стол, разграниченный сеткой пополам
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">партия играется до 11 очков</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">после каждой партии игроки меняются сторонами</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">каждый игрок подает только 2 подачи подряд</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">матч проводится до 3 побед в сетах</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">Аут засчитывается при попадании мяча в торец стола, стойки или сетку, при вылете за пределы игровой поверхности</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 51.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">TABLE TENNIS</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">BADMINTON</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        олимпийский вид спорта, в котором игроки располагаются на противоположных сторонах
                        разделённой сеткой площадки и перекидывают волан через сетку ударами ракеткой, стремясь
                        «приземлить» волан на стороне противника, и наоборот, чтобы он не упал на собственное поле.
                        Соперничают два игрока или две пары игроков (пары могут быть не только одного пола, но и смешанные
                        — мужчина и женщина)
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">Гейм играется до 15 очков</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">После каждого гейма игроки меняются сторонами</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">Матч проводится до выигрыша двух геймов</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">
                                Если подающий выигрывает розыгрыш, ему засчитывается очко.
                                Затем он снова подаёт, но с другого поля
                            </p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">При выигрыше принимающим, ему засчитывается очко и он становится новым подающим</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 65.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">BADMINTON</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">DARTS</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        это спортивная игра, при которой дротики бросают в круглую пронумерованная
                        от одного до двадцати секторов мишень с центром посередине, обведенного зеленым
                        или красным кольцом
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">попадание дротиком в центр дает игроку 50 баллов, в зеленый круг – 25 баллов</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">попадание в узкий внешний круг мишени удваивает очки сектора</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">попадание в узкий внутренний круг мишени утраивает очки сектора</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">подсчет баллов ведется по результатам трех бросков</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">игра ведётся до победы в 7 лэгах</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 75.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">DARTS</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="sports-rules__item">
            <h3 class="sports-rules__title">KABADDI</h3>
            <div class="sports-rules__block">
                <div class="sports-rules__left-side">
                    <p class="sports-rules__text">
                        это популярный командный вид спорта, который нуждается в умении и
                        а также объединяет в себе характеристики борьбы и регби. Он возник в Индии
                        лет назад и широко играется через индийский субконтинент.
                    </p>
                    <ul class="peculiarity__list">
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">1</p>
                            <p class="peculiarity__text">1 тайм - 10 минут</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">2</p>
                            <p class="peculiarity__text">в составе одной команды - 5 человек</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">3</p>
                            <p class="peculiarity__text">кричать "КАБАДДИ" выполняя рейд - не нужно</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">4</p>
                            <p class="peculiarity__text">начинающая команда определяется жребием</p></li>
                        <li class="peculiarity__item">
                            <p class="peculiarity__marker">5</p>
                            <p class="peculiarity__text">в случае спорной ситуации - решение определяется видео просмотром</p></li>
                    </ul>
                </div>
                <div class="sports-rules__right-side">
                    <img class="sport-rules__img" src="{{Vite::asset('resources/img/Rectangle 82.png')}}" alt="">
                    <div class="sports-rules__container-for-name">
                        <p class="sports-rules__sport-name">KABADDI</p>
                    </div>
                </div>
            </div>
        </article>


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

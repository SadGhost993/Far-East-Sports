@section('header')
    <header class="header container">
        <a class="header-logo" href="/">
            <img class="header-logo__img" src="{{Vite::asset('resources/img/logo.svg')}}" alt="">
        </a>
        <ul class="nav">
            <li class="nav__link dropdown">
                <a class="dropbtn">Трансляции</a>
                <div class="dropdown-content">
                    <a href="#">DVHL 3X3</a>
                    <a href="#">VOLTA FOOTBALL</a>
                    <a href="#">TABLE TENNIS</a>
                    <a href="#">BADMINTON</a>
                    <a href="#">SMART HOCKEY</a>
                    <a href="#">DARTS</a>
                    <a href="#">CYBER SPORTS</a>
                    <a href="#">ICE BOX</a>
                    <a href="#">KABADDI</a>
                </div>
            </li>
            <li class="nav__link"><a href="/rules">Правила</a></li>
            <li class="nav__link"><a href="/#news">Новости</a></li>
            <li class="nav__link"><a href="/about">О нас</a></li>
        </ul>
        <ul class="social header__social">
            <li class="social__link">
                <img src="{{Vite::asset('resources/img/telegram.svg')}}" alt="">
            </li>
            <li class="social__link">
                <img src="{{Vite::asset('resources/img/insta.svg')}}" alt="">
            </li>
            <li class="social__link">
                <img src="{{Vite::asset('resources/img/vk.svg')}}" alt="">
            </li>
        </ul>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox"/>
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <div class="menu__box">
                <ul class="menu__list">
                    <li><a class="menu__item" href="/">Трансляции</a></li>
                    <li><a class="menu__item" href="/rules">Правила</a></li>
                    <li><a class="menu__item" href="/#news">Новости</a></li>
                    <li><a class="menu__item" href="/about">О нас</a></li>
                </ul>
                <ul class="social menu__social">
                    <li class="social__link">
                        <img src="{{Vite::asset('resources/img/telegram.svg')}}" alt="">
                    </li>
                    <li class="social__link">
                        <img src="{{Vite::asset('resources/img/insta.svg')}}" alt="">
                    </li>
                    <li class="social__link">
                        <img src="{{Vite::asset('resources/img/vk.svg')}}" alt="">
                    </li>
                </ul>

            </div>
        </div>
    </header>
@show

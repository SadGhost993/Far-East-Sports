@extends('base')

@section('content')
    <section class="welcome">
        <div class="welcome__text-area">
            <h2 class="welcome__text">Добро пожаловать В FAR EAST SPORTS</h2>
            <p class="welcome__subtitle">Far East Sports – новый стриминговый сервис, агрегатор и организатор уникальных
                спортивных событий</p>
        </div>
        <div class="welcome__card">
            <img class="welcome__logo" src="{{Vite::asset('resources/img/logo.svg')}}" alt="">
            <p class="welcome__subtext-logo">FAR EAST SPORTS</p>
        </div>
    </section>
    <section class="advantage">
        <h2 class="advantage__title">FAR EAST SPORTS</h2>
        <div class="advantage__grid">
            <div class="advantage-item advantage-item1">
                <img class="advantage-item__image"
                     src="{{Vite::asset('resources/img/INST - iluhander (1 из 157)_edited 1.png')}}" alt="">
            </div>

            <div class="advantage-item advantage-item2">
                <img class="advantage-item__laptop" src="{{Vite::asset('resources/img/laptop 1.png')}}" alt="">
            </div>
            <div class="advantage-item advantage-item3">
                <img class="advantage-item__image"
                     src="{{Vite::asset('resources/img/INST - iluhander (1 из 157)_edited 2.png')}}" alt="">
            </div>
            <p class="advantage-item__text advantage-item4">Новые форматы</p>
            <p class="advantage-item__text advantage-item5">Новые турниры</p>
            <p class="advantage-item__text advantage-item6">Новые виды спорта</p>
        </div>
        <p class="advantage__subtext">Мы предоставляем видеоконтент, обзоры, новости, анонсы, расписание, результаты и
            статистику. Каждый сможет составить свое мнение и сформировать прогноз</p>
    </section>
    <section class="why-us">
        <div class="why-us__image-area">
            <img class="image-1" src="{{Vite::asset('resources/img/image1.png')}}" alt="">
            <img class="image-2" src="{{Vite::asset('resources/img/image2.png')}}" alt="">
            <svg class="image-3" viewBox="0 0 711 679" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M355.5 0L710.137 678.75H0.86261L355.5 0Z" fill="#DF9923"/>
            </svg>
        </div>
        <div class="why-us__text-area">
            <h2 class="why-us__title">FAR EAST SPORTS</h2>
            <p class="why-us__subtitle">большое внимание уделяет качеству предоставления информации по уникальным событиям</p>
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
@endsection

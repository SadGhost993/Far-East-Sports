@extends('base')

@section('content')
    <section class="event">
        <div class="meeting">
            <div class="meeting__item">
                <img class="meeting__image" src="{{Vite::asset('resources/img/logo-dvhl.png')}}" alt="">
                <p class="meeting__text">КОНФЕРЕНЦИЯ ЗАПАД</p>
            </div>
            <div class="meeting__item">
                <img class="meeting__image" src="{{Vite::asset('resources/img/logo-dvhl.png')}}" alt="">
                <p class="meeting__text">КОНФЕРЕНЦИЯ ВОСТОК</p>
            </div>
        </div>
        <div class="event-block">
            <p class="event-block__title">СОБЫТИЕ <span class="yellow">ВЕСНА</span></p>
            <p class="event-block__year">2023</p>
            <p class="event-block__subtitle">ДО ФИНАЛА ВЕСЕННЕГО СОБЫТИЯ ОСТАЛОСЬ</p>
            <div class="event-block__time-area">
                <div class="event-block__time-block">
                    <p class="event-block__time">12</p>
                    <span>дней</span>
                </div>
                <div class="event-block__time-block">
                    <p class="event-block__time">01</p>
                    <span>часов</span>
                </div>
                <div class="event-block__time-block">
                    <p class="event-block__time">12</p>
                    <span>минут</span>
                </div>
                <div class="event-block__time-block">
                    <p class="event-block__time">45</p>
                    <span>секунд</span>
                </div>
            </div>
        </div>
    </section>
@endsection

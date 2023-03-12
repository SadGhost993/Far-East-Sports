@extends('base')

@section('content')
    <section class="division">
        <a class="division__item" href="/">
            <img class="division__img" src="{{Vite::asset('resources/img/kind-sport/volta-football.png')}}" alt="">
            <p class="division__title">IRON DIVISION</p>
        </a>
        <a class="division__item" href="/">
            <img class="division__img" src="{{Vite::asset('resources/img/kind-sport/volta-football.png')}}" alt="">
            <p class="division__title">PLATINUM DIVISION</p>
        </a>
        <a class="division__item" href="/">
            <img class="division__img" src="{{Vite::asset('resources/img/kind-sport/volta-football.png')}}" alt="">
            <p class="division__title">TITANIUM DIVISION</p>
        </a>
    </section>
@endsection

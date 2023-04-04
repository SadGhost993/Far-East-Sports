@extends('base')

@section('content')
    <section class="division">
        <a class="division__item" href="/divisions/{{$kindOfSport}}/iron-division">
            <img class="division__img" src="{{Vite::asset("resources/img/kind-sport/$kindOfSport.png")}}" alt="">
            <p class="division__title">IRON DIVISION</p>
        </a>
        <a class="division__item" href="/divisions/{{$kindOfSport}}/platinum-division">
            <img class="division__img" src="{{Vite::asset("resources/img/kind-sport/$kindOfSport.png")}}" alt="">
            <p class="division__title">PLATINUM DIVISION</p>
        </a>
        <a class="division__item" href="/divisions/{{$kindOfSport}}/titanium-division">
            <img class="division__img" src="{{Vite::asset("resources/img/kind-sport/$kindOfSport.png")}}" alt="">
            <p class="division__title">TITANIUM DIVISION</p>
        </a>
    </section>
@endsection

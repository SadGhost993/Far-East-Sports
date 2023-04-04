@extends('base')

@section('content')
    <section class="statistics">
        <div class="statistics__header">
            <img class="statistics__image" src="{{Vite::asset("resources/img/kind-sport/$kindOfSport.png")}}" alt="">
            <p class="statistics__date">2023-01-30 15:30</p>
        </div>
        <div class="match-table">
            <div class="team-table">
                <h2 class="match-table__title">Группа</h2>
                <div class="team-table__row">
                    <p class="team-table__title-column">М</p>
                    <p class="team-table__title-column">Команда</p>
                    <p class="team-table__title-column">И</p>
                    <p class="team-table__title-column">В</p>
                    <p class="team-table__title-column">П</p>
                    <p class="team-table__title-column">ВО</p>
                    <p class="team-table__title-column">ПО</p>
                    <p class="team-table__title-column">+/-</p>
                    <p class="team-table__title-column">Очки</p>
                </div>
                <div class="team-table__row">
                    <p class="team-table-row__item">1</p>
                    <div class="team-table-row__item">
                        <img class="team-table__team-logo" src="{{Vite::asset('resources/img/team-logo/1.png')}}"
                             alt="">
                        <p>Союз</p>
                    </div>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0-0</p>
                    <p class="team-table-row__item">0</p>
                </div>
                <div class="team-table__row">
                    <p class="team-table-row__item">2</p>
                    <div class="team-table-row__item">
                        <img class="team-table__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}"
                             alt="">
                        <p>Crossroad</p>
                    </div>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0-0</p>
                    <p class="team-table-row__item">0</p>
                </div>
                <div class="team-table__row">
                    <p class="team-table-row__item">3</p>
                    <div class="team-table-row__item">
                        <img class="team-table__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}"
                             alt="">
                        <p>СССР</p>
                    </div>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0-0</p>
                    <p class="team-table-row__item">0</p>
                </div>
                <div class="team-table__row">
                    <p class="team-table-row__item">4</p>
                    <div class="team-table-row__item">
                        <img class="team-table__team-logo" src="{{Vite::asset('resources/img/team-logo/4.png')}}"
                             alt="">
                        <p>Rock ‘n’ Roll</p>
                    </div>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0</p>
                    <p class="team-table-row__item">0-0</p>
                    <p class="team-table-row__item">0</p>
                </div>
            </div>
            <div class="team-block-table">
                <h2 class="match-table__title">Сетка турнира</h2>
                <div class="team-block-table__wrapper">
                    <div class="team-block-table__row">
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/group-users.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/1.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/4.png')}}" alt="">
                        </div>
                    </div>
                    <div class="team-block-table__row">
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/1.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item">///</div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item"></div>
                    </div>
                    <div class="team-block-table__row">
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item">///</div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item"></div>
                    </div>
                    <div class="team-block-table__row">
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item">///</div>
                        <div class="team-block-table__item"></div>
                    </div>
                    <div class="team-block-table__row">
                        <div class="team-block-table__item">
                            <img class="team-block-table__team-logo" src="{{Vite::asset('resources/img/team-logo/4.png')}}" alt="">
                        </div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item"></div>
                        <div class="team-block-table__item">///</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-table">
            <h2 class="match-table__title">Групповой этап</h2>
            <div class="group-stage">
                <div class="group-stage__row">
                    <div class="block-time">
                        <p class="block-time__time">15:00</p>
                    </div>
                    <div class="group-stage__team">
                        <p class="group-stage__team-title">Rock ‘n’ Roll</p>
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                    </div>
                    <div class="group-stage__info">
                        <p class="group-stage__status">Завершен</p>
                        <p class="group-stage__score">4 - 2</p>
                        <p class="group-stage__history-score">(3-1 1-1 0-0)</p>
                    </div>
                    <div class="group-stage__team">
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        <p class="group-stage__team-title">Crossroad</p>
                    </div>
                </div>
                <div class="group-stage__row">
                    <div class="block-time">
                        <p class="block-time__time">15:00</p>
                    </div>
                    <div class="group-stage__team">
                        <p class="group-stage__team-title">Rock ‘n’ Roll</p>
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                    </div>
                    <div class="group-stage__info">
                        <p class="group-stage__status">Завершен</p>
                        <p class="group-stage__score">4 - 2</p>
                        <p class="group-stage__history-score">(3-1 1-1 0-0)</p>
                    </div>
                    <div class="group-stage__team">
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        <p class="group-stage__team-title">Crossroad</p>
                    </div>
                </div>
                <div class="group-stage__row">
                    <div class="block-time">
                        <p class="block-time__time">15:00</p>
                    </div>
                    <div class="group-stage__team">
                        <p class="group-stage__team-title">Rock ‘n’ Roll</p>
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                    </div>
                    <div class="group-stage__info">
                        <p class="group-stage__status">Завершен</p>
                        <p class="group-stage__score">4 - 2</p>
                        <p class="group-stage__history-score">(3-1 1-1 0-0)</p>
                    </div>
                    <div class="group-stage__team">
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        <p class="group-stage__team-title">Crossroad</p>
                    </div>
                </div>
                <div class="group-stage__row">
                    <div class="block-time">
                        <p class="block-time__time">15:00</p>
                    </div>
                    <div class="group-stage__team">
                        <p class="group-stage__team-title">Rock ‘n’ Roll</p>
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                    </div>
                    <div class="group-stage__info">
                        <p class="group-stage__status">Завершен</p>
                        <p class="group-stage__score">4 - 2</p>
                        <p class="group-stage__history-score">(3-1 1-1 0-0)</p>
                    </div>
                    <div class="group-stage__team">
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        <p class="group-stage__team-title">Crossroad</p>
                    </div>
                </div>
                <div class="group-stage__row">
                    <div class="block-time">
                        <p class="block-time__time">15:00</p>
                    </div>
                    <div class="group-stage__team">
                        <p class="group-stage__team-title">Rock ‘n’ Roll</p>
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                    </div>
                    <div class="group-stage__info">
                        <p class="group-stage__status">Завершен</p>
                        <p class="group-stage__score">4 - 2</p>
                        <p class="group-stage__history-score">(3-1 1-1 0-0)</p>
                    </div>
                    <div class="group-stage__team">
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        <p class="group-stage__team-title">Crossroad</p>
                    </div>
                </div>
                <div class="group-stage__row">
                    <div class="block-time">
                        <p class="block-time__time">15:00</p>
                    </div>
                    <div class="group-stage__team">
                        <p class="group-stage__team-title">Rock ‘n’ Roll</p>
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/2.png')}}" alt="">
                    </div>
                    <div class="group-stage__info">
                        <p class="group-stage__status">Завершен</p>
                        <p class="group-stage__score">4 - 2</p>
                        <p class="group-stage__history-score">(3-1 1-1 0-0)</p>
                    </div>
                    <div class="group-stage__team">
                        <img class="group-stage__team-logo" src="{{Vite::asset('resources/img/team-logo/3.png')}}" alt="">
                        <p class="group-stage__team-title">Crossroad</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

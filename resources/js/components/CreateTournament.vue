<template>
    <section class="create-match">
        <section class="info-match">
            <div class="info-match__label-title">
                <p class="info-match__title">
                    Место проведение матча
                </p>
                <p class="info-match__title">
                    Судьи
                </p>
                <p class="info-match__title">
                    Статист
                </p>
                <p class="info-match__title">
                    Вид турнира
                </p>
            </div>
            <div class="info-match__input-area">
                <input class="info-match__input" id="match_city" type="text" placeholder="Город..." required
                       autocomplete="on" tabindex="1">
                <input class="info-match__input" id="match_location" type="text" placeholder="Место проведения.."
                       required
                       autocomplete="on" tabindex="1">
                <input class="info-match__input" id="match_referee_1" type="text" placeholder="судья 1.." required
                       autocomplete="on" tabindex="1">
                <input class="info-match__input" id="match_referee_2" type="text" placeholder="Судья 2.." required
                       autocomplete="on" tabindex="1">
                <input class="info-match__input" id="match_referee_3" type="text" placeholder="Судья 3.." required
                       autocomplete="on" tabindex="1">
                <input class="info-match__input" id="statist_name" type="text" placeholder="Статист" required
                       autocomplete="on" tabindex="1">
                <select class="info-match__input" id="kind_sport" type="text" value="Город..." required
                        autocomplete="on"
                        tabindex="1">
                    <option value="1" selected>Коррекция</option>
                </select>
            </div>
        </section>
        <section class="add-team">
            <div class="add-team__item">
                <div class="add-team__header">
                    <div class="add-team__team-number">
                        <h2>Команда 1</h2>
                        <p>Домашняя</p>
                    </div>
                    <div class="side-select">
                        <label>
                            <input type="radio" name="left-team-side" value="1" checked>
                            Слева
                        </label>
                        <label>
                            <input type="radio" name="right-team-side" value="1" checked>
                            Справа
                        </label>
                    </div>
                    <select class="add-team__select" name="" id="">
                        <option value="-2" selected>Выберите команду из списка...</option>
                    </select>
                </div>
                <div class="add-team-body">
                    <div class="add-team-body__add-logo">
                        <p>Загрузить логотип</p>
                    </div>
                    <div class="add-team-body__add-player">
                        <div class="add-team-body__wrapper">
                            <p class="add-team-body__title">Название:</p>
                            <input class="add-team-body__input" type="text" placeholder="Название..">
                        </div>
                        <div class="add-team-body__wrapper">
                            <p class="add-team-body__title">Город:</p>
                            <input class="add-team-body__input" type="text" placeholder="Город:">
                        </div>
                        <a class="add-team-body__add-player-btn">
                            <img src="{{Vite::asset('resources/img/icon/add-user.png')}}" alt="">
                            <p>Добавить игрока</p>
                        </a>
                    </div>
                </div>
                <div class="players-block">
                    <div class="players-block__first-element">
                        <p class="players-block__title">
                            текущий вратарь
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__second-element">
                        <p class="players-block__title">
                            2 вратарь
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__third-element">
                        <p class="players-block__title">
                            1 вратарь
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__fourth-element">
                        <p class="players-block__title">
                            2 тройка
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__fifth-element">
                        <p class="players-block__title">
                            3 тройка
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__sixth-element">
                        <p class="players-block__title">
                            4 тройка
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__seventh-element">
                        <p class="players-block__title">
                            Резерв
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                </div>

            </div>
            <div class="add-team__item">
                <div class="add-team__header">
                    <div class="add-team__team-number">
                        <h2>Команда 2</h2>
                        <p>Гостевая</p>
                    </div>
                    <select class="add-team__select" name="" id="">
                        <option value="-2" selected>Выберите команду из списка...</option>
                    </select>
                </div>
                <div class="add-team-body">
                    <div class="add-team-body__add-logo">
                        <p>Загрузить логотип</p>
                    </div>
                    <div class="add-team-body__add-player">
                        <div class="add-team-body__wrapper">
                            <p class="add-team-body__title">Название:</p>
                            <input class="add-team-body__input" type="text" placeholder="Название..">
                        </div>
                        <div class="add-team-body__wrapper">
                            <p class="add-team-body__title">Город:</p>
                            <input class="add-team-body__input" type="text" placeholder="Город:">
                        </div>
                        <a class="add-team-body__add-player-btn">
                            <img src="{{Vite::asset('resources/img/icon/add-user.png')}}" alt="">
                            <p>Добавить игрока</p>
                        </a>
                    </div>
                </div>
                <div class="players-block">
                    <div class="players-block__first-element">
                        <p class="players-block__title">
                            текущий вратарь
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__second-element">
                        <p class="players-block__title">
                            2 вратарь
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__third-element">
                        <p class="players-block__title">
                            1 вратарь
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__fourth-element">
                        <p class="players-block__title">
                            2 тройка
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__fifth-element">
                        <p class="players-block__title">
                            3 тройка
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__sixth-element">
                        <p class="players-block__title">
                            4 тройка
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                    <div class="players-block__seventh-element">
                        <p class="players-block__title">
                            Резерв
                        </p>
                        <div class="players-block__player">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info-match-btn-block">
            <label class="info-match-btn-block__big-btn">
                <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>
                <img src="{{Vite::asset('@/resources/img/icon/upload.png')}}" alt="">
                <p>Загрузить новые команды</p>
                <button v-on:click="submitFile()">Submit</button>
            </label>
            <div class="info-match-btn-block__rigth-side">
                <a class="info-match-btn-block__big-btn">
                    <img src="{{Vite::asset('resources/img/icon/config.png')}}" alt="">
                    <p>Настройка клавиатуры</p>
                </a>
                <a class="info-match-btn-block__small-btn">Далее</a>
                <a class="info-match-btn-block__small-btn">Назад</a>
            </div>
        </section>
    </section>
    <!--    <section class="add-player">-->
    <!--        <div class="add-player__window">-->
    <!--            <div class="add-player__header">-->
    <!--                <h3 class="add-player__title">Новый игрок</h3>-->
    <!--            </div>-->
    <!--            <div class="add-player__body">-->
    <!--                <div class="add-player__photo-input">-->
    <!--                    <p>Загрузите фотографию</p>-->
    <!--                </div>-->
    <!--                <div class="add-player__input-block">-->
    <!--                    <label class="add-player__label" for="">-->
    <!--                        <span>Номер</span>-->
    <!--                        <input type="text" placeholder="Номер игрока...">-->
    <!--                    </label>-->
    <!--                    <label class="add-player__label" for="">-->
    <!--                        <span>Имя</span>-->
    <!--                        <input type="text" placeholder="Имя">-->
    <!--                    </label>-->
    <!--                    <label class="add-player__label" for="">-->
    <!--                        <span>Фамилия</span>-->
    <!--                        <input type="text" placeholder="Фамилия игрока...">-->
    <!--                    </label>-->
    <!--                    <label class="add-player__label" for="">-->
    <!--                        <span>Отчество</span>-->
    <!--                        <input type="text" placeholder="Отчество игрока...">-->
    <!--                    </label>-->
    <!--                    <label class="add-player__label" for="">-->
    <!--                        <span>Дата рождения</span>-->
    <!--                        <input type="text" placeholder="Дата рождения игрока...">-->
    <!--                    </label>-->
    <!--                    <label class="add-player__label" for="">-->
    <!--                        <span>Амплуа</span>-->
    <!--                        <select name="" id="">-->
    <!--                            <option value="0">Нападающий</option>-->
    <!--                            <option value="1">Защитник</option>-->
    <!--                            <option value="2">Вратарь</option>-->
    <!--                        </select>-->
    <!--                    </label>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="add-player__footer">-->
    <!--                <a class="add-player__save-btn" href="">Добавить</a>-->
    <!--                <a class="add-player__cancel-btn" href="">Отмена</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
</template>

<script>
export default {
    methods: {
        handleFileUpload() {
            this.file = this.$refs.file.files[0];
            console.log(this.$refs.file.files[0])
        }
    },
}
</script>

<template>
    <section class="penalty">
        <div class="penalty__change-team">
            <h2 class="penalty__title">Выберите команду, нарушившую правила:</h2>
            <div class="penalty__btn-block">
                <a class="penalty__left-team-btn" href="">Рокеры</a>
                <a class="penalty__right-team-btn" href="">Кросс</a>
            </div>
        </div>
        <div class="penalty__select-penalty">
            <h2 class="penalty__title">Выберите штраф:</h2>
            <a class="penalty__btn penalty__btn1" href="">
                <p>Малый</p>
                <p>(2 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn2" href="">
                <p>Малый скамеечный</p>
                <p>(2 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn3" href="">
                <p>Двойной малый</p>
                <p>(2+2 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn4" href="">
                <p>Дисциплинированный</p>
                <p>(10 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn5" href="">
                <p>Малый + дисциплинарный</p>
                <p>(2+10 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn6" href="">
                <p>Двойной малый + дисциплинарных</p>
                <p>(2+2+10 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn7" href="">
                <p>Дисциплинарный до конца</p>
                <p>(20 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn8" href="">
                <p>Малый + дисциплинарный до конца</p>
                <p>(2+20 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn9" href="">
                <p>Большой + дисциплинарный до конца</p>
                <p>(5+20 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn10" href="">
                <p>Малый + Большой + Дисциплинарный до конца</p>
                <p>(5+2+20 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn11" href="">
                <p>Матч-штраф</p>
                <p>(5+20 мин)</p>
            </a>
            <a class="penalty__btn penalty__btn12" href="">
                <p>Штрафной бросок</p>
            </a>
            <a class="penalty__btn penalty__btn13" href="">
                <p>3 штрафных</p>
            </a>
            <a class="penalty__btn penalty__btn14" href="">
                <p>2 штрафных</p>
            </a>
        </div>
        <div class="penalty__btn-block">
            <a class="penalty__btn-save" href="">
                <p>Сохранить</p>
            </a>
            <a class="penalty__btn-cancel" href="">
                <p>Отмена</p>
            </a>
        </div>
    </section>
</template>

<script>
export default {
    name: 'Penalty',
}
</script>

<template>
    <section class="add-player"  @click.self="close">
        <div class="add-player__window">
            <div class="add-player__header">
                <h3 class="add-player__title">Новый игрок</h3>
            </div>
            <div class="add-player__body">
                <div class="add-player__photo-input">
                    <p>Загрузите фотографию</p>
                </div>
                <div class="add-player__input-block">
                    <label class="add-player__label" for="">
                        <span>Номер</span>
                        <input type="text" placeholder="Номер игрока...">
                    </label>
                    <label class="add-player__label" for="">
                        <span>Имя</span>
                        <input type="text" placeholder="Имя">
                    </label>
                    <label class="add-player__label" for="">
                        <span>Фамилия</span>
                        <input type="text" placeholder="Фамилия игрока...">
                    </label>
                    <label class="add-player__label" for="">
                        <span>Отчество</span>
                        <input type="text" placeholder="Отчество игрока...">
                    </label>
                    <label class="add-player__label" for="">
                        <span>Дата рождения</span>
                        <input type="text" placeholder="Дата рождения игрока...">
                    </label>
                    <label class="add-player__label" for="">
                        <span>Амплуа</span>
                        <select name="" id="">
                            <option value="0">Нападающий</option>
                            <option value="1">Защитник</option>
                            <option value="2">Вратарь</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="add-player__footer">
                <a class="add-player__save-btn" href="">Добавить</a>
                <a @click="close" class="add-player__cancel-btn">Отмена</a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "add-team-popup",

    methods: {
        close() {
            this.$emit('close')
        }

    }
}
</script>

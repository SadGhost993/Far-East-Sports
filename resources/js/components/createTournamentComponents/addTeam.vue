<template>
    <section class="add-team">
        <div v-for="(item, index) in teams" :key="index" class="add-team__item">
            <div class="add-team__header">
                <div class="add-team__team-number">
                    <h2>Команда 1</h2>
                    <p>Домашняя</p>
                </div>
<!--                <div class="side-select">-->
<!--                    <label>-->
<!--                        <input type="radio" name="left-team-side" value="1" checked>-->
<!--                        Слева-->
<!--                    </label>-->
<!--                    <label>-->
<!--                        <input type="radio" name="right-team-side" value="1" checked>-->
<!--                        Справа-->
<!--                    </label>-->
<!--                </div>-->
                <select class="add-team__select" name="" id="">
                    <option value="-2" selected>Выберите команду из списка...</option>
                </select>
            </div>
            <div class="add-team-body">
                <label class="add-team-body__add-logo">
                    <p v-if="showPreviewFirstTeam !== true">Загрузить логотип</p>
                    <img class="add-team-body__preview-logo" v-bind:src="imagePreviewFirstTeam" v-show="showPreviewFirstTeam">
                    <input accept="image/*" type="file" ref="teamLogo{{index}}" v-on:change="handleFirstLogoTeamUpload()">
                </label>
                <div class="add-team-body__add-player">
                    <div class="add-team-body__wrapper">
                        <p class="add-team-body__title">Название:</p>
                        <input class="add-team-body__input" v-model="item.title" type="text" placeholder="Название..">
                    </div>
                    <div class="add-team-body__wrapper">
                        <p class="add-team-body__title">Город:</p>
                        <input class="add-team-body__input" v-model="item.hometown" type="text" placeholder="Город:">
                    </div>
                    <a @click="isAddTeamModalOpen = true" class="add-team-body__add-player-btn">
                        <img src='../../assets/img/icon/add-user.png' alt="">
                        <p >Добавить игрока</p>
                    </a>
                </div>
            </div>
            <div class="players-block">
                <div class="players-block__first-element"
                     @drop="onDrop($event, 1)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        текущий вратарь
                    </p>
                    <div class="players-block__drop-zone">
                        <div class="player"
                             v-for="player in getThree(1)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
                <div class="players-block__second-element"
                     @drop="onDrop($event, 2)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        2 вратарь
                    </p>
                    <div class="players-block__drop-zone">
                        <div class="player"
                             v-for="player in getThree(2)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
                <div class="players-block__third-element"
                     @drop="onDrop($event, 3)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        1 вратарь
                    </p>
                    <div class="players-block__drop-zone">
                        <div class="player"
                             v-for="player in getThree(3)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
                <div class="players-block__fourth-element"
                     @drop="onDrop($event, 4)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        2 тройка
                    </p>
                    <div class="players-block__drop-zone">
                        <div class="player"
                             v-for="player in getThree(4)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
                <div class="players-block__fifth-element"
                     @drop="onDrop($event, 5)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        3 тройка
                    </p>
                    <div class="players-block__drop-zone">
                        <div class="player"
                             v-for="player in getThree(5)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
                <div class="players-block__sixth-element"
                     @drop="onDrop($event, 6)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        4 тройка
                    </p>
                    <div class="players-block__drop-zone">
                        <div class="player"
                             v-for="player in getThree(6)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
                <div class="players-block__seventh-element"
                     @drop="onDrop($event, 0)"
                     @dragenter.prevent
                     @dragover.prevent>
                    <p class="players-block__title">
                        Резерв
                    </p>
                    <div class="players-block__drop-zone reserve">
                        <div class="player"
                             v-for="player in getThree(0)"
                             :key="player.id"
                             @dragstart="startDrag($event, player)"
                             draggable="true">
                            <div class="line-block">
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                                <span class="line-block__line"></span>
                            </div>
                            <p class="player__number">{{ player.number }}</p>
                            <p class="player__name">{{ player.name + ' ' + player.lastName }}</p>
                            <p class="player__number">{{ player.role }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-match-btn-block">
        <label class="info-match-btn-block__big-btn">
<!--            <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>-->
            <img src="../../assets/img/icon/upload.png" alt="">
            <p>Загрузить новые команды</p>
            <button id="button">Submit</button>
        </label>
        <div class="info-match-btn-block__rigth-side">
            <a class="info-match-btn-block__big-btn">
                <img src="../../assets/img/icon/config.png" alt="">
                <p>Настройка клавиатуры</p>
            </a>
            <button @click="createTeam" class="info-match-btn-block__small-btn">Далее</button>
            <a class="info-match-btn-block__small-btn">Назад</a>
        </div>
    </section>
    <addTeamPopup v-if="isAddTeamModalOpen" @close="isAddTeamModalOpen = false" ></addTeamPopup>
</template>

<script>
import {ref} from "vue";
import addTeamPopup from "./addTeamPopup.vue"

export default {

    name: 'addTeam',

    components: {
        addTeamPopup,
    },

    data() {
        return {
            isAddTeamModalOpen: false,

            teamLogo0: "",
            secondTeamLogo: null,
            imagePreviewFirstTeam: false,
            showPreviewFirstTeam: null,
            imagePreviewSecondTeam: false,
            showPreviewSecondTeam: null,

            teams: [
                {
                    avatar: null,
                    title: null,
                    hometown: null,
                    players: [
                        {id: '0', number: 1, name: 'Валерий', lastName: "Салаев", role: 'ВР', three: 0},
                        {id: '1', number: 1, name: 'Валерий', lastName: "Салаев", role: 'З', three: 0},
                        {id: '2', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '3', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '4', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '5', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '6', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 2},
                    ],
                },
                {
                    avatar: null,
                    title: null,
                    hometown: null,
                    players: [
                        {id: '0', number: 1, name: 'Валерий', lastName: "Салаев", role: 'ВР', three: 0},
                        {id: '1', number: 1, name: 'Валерий', lastName: "Салаев", role: 'З', three: 0},
                        {id: '2', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '3', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '4', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '5', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                        {id: '6', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 2},
                    ],
                },
            ],
        }
    },

    setup() {
        const players = ref([
                {id: '0', number: 1, name: 'Валерий', lastName: "Салаев", role: 'ВР', three: 0},
                {id: '1', number: 1, name: 'Валерий', lastName: "Салаев", role: 'З', three: 0},
                {id: '2', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                {id: '3', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                {id: '4', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                {id: '5', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 0},
                {id: '6', number: 1, name: 'Валерий', lastName: "Салаев", role: 'Н', three: 2},
            ])


        const getThree = (three) => {
            return players.value.filter((player) => player.three === three)
        }

        const startDrag = (event, player) => {
            event.dataTransfer.dropEffect = 'move'
            event.dataTransfer.effectAllowed = 'move'
            event.dataTransfer.setData('playerID', player.id)
        }

        const onDrop = (event, three) => {
            const playerID = event.dataTransfer.getData('playerID')
            const player = players.value.find((player) => player.id === playerID)
            player.three = three
        }


        return {
            getThree,
            onDrop,
            startDrag,
        }
    },

    methods: {
        createTeam(){
            console.log(this.teams)
        },

        handleFirstLogoTeamUpload(){
            // this.teamLogo = this.$refs.teamLogo.files[0];
            console.log(this.$refs.teamLogo0.files[0]);

            let reader  = new FileReader();

            reader.addEventListener("load", function () {
                this.showPreviewFirstTeam = true;
                this.imagePreviewFirstTeam = reader.result;
            }.bind(this), false);

            if( this.teamLogo ){
                if ( /\.(jpe?g|png|gif)$/i.test( this.teamLogo.name ) ) {
                    reader.readAsDataURL( this.teamLogo );
                }
            }
        },

        handleSecondLogoTeamUpload(){
            this.secondTeamLogo = this.$refs.secondTeamLogo.files[0];
            console.log(this.secondTeamLogo);

            let reader  = new FileReader();

            reader.addEventListener("load", function () {
                this.showPreviewSecondTeam = true;
                this.imagePreviewSecondTeam = reader.result;
            }.bind(this), false);

            if( this.secondTeamLogo ){
                if ( /\.(jpe?g|png|gif)$/i.test( this.secondTeamLogo.name ) ) {
                    reader.readAsDataURL( this.secondTeamLogo );
                }
            }

        }
    }

}
</script>

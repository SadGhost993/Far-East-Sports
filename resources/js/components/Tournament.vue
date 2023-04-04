<template>
    <section class="match-controls">
        <div class="match-controls__info-block">
            <div class="match-controls__deleted-player-left-output">
                <p>--</p>
            </div>
            <div class="match-controls__match-city-output">
                <p>Красноярск</p>
            </div>
            <div class="match-controls__match-place-output">
                <p>Арена Север</p>
            </div>
            <div class="match-controls__deleted-player-right-output">
                <p>--</p>
            </div>
            <div class="match-controls__match-team-left-output">
                <p>Кросс</p>
            </div>
            <div class="match-controls__match-score-left-output">
                <p>0</p>
            </div>
            <div class="match-controls__match-statistics-output">
                <p>Время матча:
                    <stop-watch
                        :currentTimer="currentTimer"
                        :timerTitle="timeMatch"
                        ref="stopWatch"
                        hours="false"
                        minutes
                        @start="setStartTime()"
                        @stop="setStopTime"
                        @lap="setLapTime"/>
                </p>
                <p>Время периода: 00:00:00.0</p>
                <p>Период: 1</p>
            </div>

            <div class="match-controls__match-score-right-output">
                <p>0</p>
            </div>
            <div class="match-controls__match-team-right-output">
                <p>Союз</p>
            </div>
            <div class="match-controls__match-goalkeeper-left-output">
                <p>Смирнов #12</p>
            </div>
            <div class="match-controls__match-goalkeeper-right-output">
                <p>Королёв #15</p>
            </div>
        </div>
        <div class="match-controls__section-btn">
            <div class="match-controls__score-btn">
                <p class="">Гол</p>
            </div>
            <div class="match-controls__delete-btn">
                <p class="">Штраф</p>
            </div>
            <div class="match-controls__pause-btn">
                <p class="">Остановка матча</p>
            </div>
            <div @click="$refs.stopWatch.start()" class="match-controls__has-puck-left-team-btn">
                <p class="">Шайба у "Кросс"</p>
                <p class="">0:00.0</p>
            </div>
            <div @click="view" class="match-controls__start-throw-in-btn">
                <p class="">Вбрасывание</p>
            </div>
            <div class="match-controls__has-puck-right-team-btn">
                <p class="">Шайба у "Союз"</p>
                <p class="">0:00.0</p>
            </div>
            <div class="match-controls__left-throw-in-btn">
                <p class="">Вбрасывание выиграно</p>
            </div>
            <div class="match-controls__left-throw-btn">
                <p class="">Бросок</p>
            </div>
            <div class="match-controls__left-attack-btn">
                <p class="">Атака</p>
            </div>
            <div class="match-controls__fight-btn">
                <p class="">Драка</p>
            </div>
            <div class="match-controls__time-out-btn">
                <p class="">Тайм-аут</p>
            </div>
            <div class="match-controls__right-attack-btn">
                <p class="">Атака</p>
            </div>
            <div class="match-controls__right-throw-btn">
                <p class="">Бросок</p>
            </div>
            <div class="match-controls__right-throw-in-btn">
                <p class="">Вбрасывание выиграно</p>
            </div>
            <div class="match-controls__left-team-small-btn-1" @click="$refs.leftTeamFirstTrio.start()">
                <p class="">На льду 1 3</p>
                <stop-watch
                    ref="leftTeamFirstTrio"
                    hours="false"
                    minutes="false"
                    @start="setStartTime()"
                    @stop="setStopTime"
                    @lap="setLapTime"/>
            </div>
            <div class="match-controls__left-team-small-btn-2" @click="$refs.leftTeamSecondTrio.start()">
                <p class="">На льду 2 3</p>
                <stop-watch
                    ref="leftTeamSecondTrio"
                    hours="false"
                    seconds="false"
                    @start="setStartTime()"
                    @stop="setStopTime"
                    @lap="setLapTime"/>
            </div>
            <div class="match-controls__left-team-small-btn-3" @click="$refs.leftTeamThirdTrio.start()">
                <p class="">На льду 3 3</p>
                <stop-watch
                    ref="leftTeamThirdTrio"
                    hours="false"
                    seconds="false"
                    @start="setStartTime()"
                    @stop="setStopTime"
                    @lap="setLapTime"/>
            </div>
            <div class="match-controls__left-team-small-btn-4" @click="$refs.leftTeamFourthTrio.start()">
                <p class="">На льду 4 3</p>
                <stop-watch
                    ref="leftTeamFourthTrio"
                    hours="false"
                    seconds="false"
                    @start="setStartTime()"
                    @stop="setStopTime"
                    @lap="setLapTime"/>
            </div>
            <div class="match-controls__right-team-small-btn-1">
                <p class="">На льду 1 3</p>
                <p class="">0:00.0</p>
            </div>
            <div class="match-controls__right-team-small-btn-2">
                <p class="">На льду 2 3</p>
                <p class="">0:00.0</p>
            </div>
            <div class="match-controls__right-team-small-btn-3">
                <p class="">На льду 3 3</p>
                <p class="">0:00.0</p>
            </div>
            <div class="match-controls__right-team-small-btn-4">
                <p class="">На льду 4 3</p>
                <p class="">0:00.0</p>
            </div>
            <div class="match-controls__settings-btn">
                <p class="">Настройки</p>
            </div>
            <div class="match-controls__end-period-btn">
                <p class="">Конец периода 1</p>
                <p class="">Смена сторон</p>
            </div>
            <div class="match-controls__delay-btn">
                <p class="">Задержка</p>
            </div>
            <div class="match-controls__post-match-bullet-btn">
                <p class="">После-матчевые буллиты</p>
            </div>
            <div class="match-controls__win-bullet-btn">
                <p class="">Победа по буллитам</p>
            </div>
            <div class="match-controls__warm-up-btn">
                <p class="">Разминка</p>
            </div>
            <div class="match-controls__bet-start-btn">
                <p class="">betStart</p>
            </div>
            <div class="match-controls__bet-stop-btn">
                <p class="">betStop</p>
            </div>
            <div class="match-controls__cancel-btn">
                <p class="">Отмена последнего действия</p>
            </div>
        </div>
    </section>
</template>

<script>
import StopWatch from "./stopWatch.vue";

export default {

    components: {
        StopWatch,
    },

    methods: {
        view() {
            console.log(this.$refs.stopWatch.time)
        },

        setStartTime(timestamp) {
            console.log(timestamp);
        },
        setStopTime(timestamp, formattedTime) {
            console.log(timestamp, formattedTime);
        },
        setLapTime(timestamp, formattedTime, id) {
            console.log(timestamp, formattedTime, id);
        },
    },
};
</script>

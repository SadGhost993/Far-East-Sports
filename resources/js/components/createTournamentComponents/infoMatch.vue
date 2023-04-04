<template>
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
            <input class="info-match__input" id="match_city" v-model="match_city" type="text" placeholder="Город..."
                   required
                   autocomplete="on" tabindex="1">
            <input class="info-match__input" id="match_location" v-model="match_location" type="text"
                   placeholder="Место проведения.."
                   required
                   autocomplete="on" tabindex="1">
            <input class="info-match__input" id="match_referee_1" v-model="match_referee_1" type="text"
                   placeholder="судья 1.." required
                   autocomplete="on" tabindex="1">
            <input class="info-match__input" id="match_referee_2" v-model="match_referee_2" type="text"
                   placeholder="Судья 2.." required
                   autocomplete="on" tabindex="1">
            <input class="info-match__input" id="match_referee_3" v-model="match_referee_3" type="text"
                   placeholder="Судья 3.." required
                   autocomplete="on" tabindex="1">
            <input class="info-match__input" id="statist_name" v-model="statist_name" type="text"
                   placeholder="Статист" required
                   autocomplete="on" tabindex="1">
            <select class="info-match__input" id="kind_sport" name="" v-model="kind_sport">
                <option value="">Выберите вид спорт</option>
                <option v-for="kindOfSport in kindOfSports" value={{kindOfSport.id}}>{{ kindOfSport.title }}
                </option>
            </select>
        </div>
    </section>
</template>

<script>
export default {
    name: "infoMatch",

    data() {
        return {
            match_city: null,
            match_location: null,
            match_referee_1: null,
            match_referee_2: null,
            match_referee_3: null,
            statist_name: null,

            kind_sport: '',
            kindOfSports: null,
        }
    },

    mounted() {
        this.getKindOfSports();
    },

    methods: {
        getKindOfSports() {
            axios.get('/api/kind-of-sport')
                .then(res => {
                    this.kindOfSports = res.data;
                })
        },

        postTeam(){
            axios('api/team')
                .then(data => {
                    console.log(math)
                })
        },
    },

}
</script>

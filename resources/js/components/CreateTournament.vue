<template>
    <section class="create-match">
        <infoMatch></infoMatch>
        <addTeam></addTeam>
    </section>
</template>

<script>
import {ref, onMounted} from "vue";
import {read, utils, writeFileXLSX} from 'xlsx';
import addTeam from "./createTournamentComponents/addTeam.vue";
import infoMatch from "./createTournamentComponents/infoMatch.vue"

export default {

    components: {
        addTeam,
        infoMatch,
    },


    data() {
        return {
            isAddTeamModalOpen: false,
        }
    },

    methods: {
        // handleFileUpload() {
        //     let selectedFile = this.$refs.file.files[0];
        //     let fileReader = new FileReader();
        //     fileReader.readAsBinaryString(selectedFile);
        //     fileReader.onload = (event) => {
        //         let data = event.target.result;
        //         console.log(data);
        //         const workbook = read(data, {type: "binary"});
        //         // console.log(workbook.Sheets);
        //         workbook.SheetNames.forEach(sheet => {
        //             let rowObject = utils.sheet_to_row_object_array(workbook.Sheets[sheet])
        //             console.log(rowObject)
        //         })
        //     }
        // }
    },
};


// export default {
//     methods: {},
// }
//
// let selectedFile;
//
// document.getElementById('input').addEventListener("change", (event) => {
//     selectedFile = event.target.files[0];
// })
//
// document.getElementById('button').addEventListener("click", () => {
//     if (selectedFile) {
//         let fileReader = new FileReader();
//         fileReader.readAsBinaryString(selectedFile);
//         fileReader.onload = (event) => {
//             console.log(event.target.result);
//         }
//     }
// })
</script>

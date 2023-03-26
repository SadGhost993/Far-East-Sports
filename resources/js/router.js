import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {
        path: '/scout/create-tournament',
        component: () => import('./components/CreateTournament.vue'),
    },
    {
        path: '/scout/tournament',
        component: () => import('./components/Tournament.vue'),
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router

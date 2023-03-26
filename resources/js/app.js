import './bootstrap';

import { createApp } from 'vue';
import index from './components/Index.vue'
import router from './router'


createApp(index).use(router).mount('#app')

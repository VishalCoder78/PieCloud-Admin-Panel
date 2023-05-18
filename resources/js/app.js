import './bootstrap';
import { createApp } from 'vue';
import  App  from './components/app.vue';
import  Details  from './components/details.vue';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

createApp(App).mount('#app')
createApp(Details).mount('#details')
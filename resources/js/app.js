import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';

import OnboardProgram from './components/OnboardProgram.vue';



const app = createApp({});
app.component('onboard-program', OnboardProgram);
app.mount('#app');
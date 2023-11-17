import './bootstrap';
import axios from 'axios';
import { createApp } from 'vue';

const app = createApp({});

import App from './components/App.vue';
app.component('App', App);

app.config.globalProperties.$axios = axios;

app.mount('#app');

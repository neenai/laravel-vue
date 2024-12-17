require('./bootstrap');
import { createApp } from 'vue';
import App from './components/App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';
import 'mdb-vue-ui-kit/css/mdb.min.css';

const router = new createRouter({
    history: createWebHistory(),
    routes: routes
});

const app = createApp(App);
app.use(router);
app.use(VueAxios, axios);
app.mount('#app');

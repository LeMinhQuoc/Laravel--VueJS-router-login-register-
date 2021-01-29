require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './routes';
import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

// Run AdminApp
const app = new Vue(Vue.util.extend({ router: new VueRouter(routes) }, App)).$mount('#app');
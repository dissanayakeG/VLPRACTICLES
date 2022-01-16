import Vue from 'vue';
import router from './router.js'

require('./bootstrap');

import '../sass/index.css';
import 'vue-multiselect/dist/vue-multiselect.min.css';

//using boostrap-vue
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import axiosApi from 'axios'

const axios = axiosApi.create({
    baseURL:`http://localhost:8000/`,
    headers:{ header:'' }
});

Vue.prototype.axios = axios;


window.Vue = require('vue');

import App from './App.vue'

new Vue({
    el: '#app',
    router,
    components: {App}
});

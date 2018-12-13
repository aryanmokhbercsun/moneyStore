
require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import axios from 'axios';
import {routes} from './routes';
import MainApp from './components/MainApp';
import StoreData from './store';
import Axios from 'axios';
import {initialize} from './helpers/general';






Vue.use(Vuex);
Vue.use(VueRouter);


const store = new Vuex.Store(StoreData);


const router = new VueRouter({
    routes,
    mode: 'history',
});

initialize(store,router);

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
});

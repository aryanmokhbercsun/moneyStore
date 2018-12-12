
require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import axios from 'axios';
import {routes} from './routes';
import MainApp from './components/MainApp';
import StoreData from './store';








Vue.use(Vuex);
Vue.use(VueRouter);


const store = new Vuex.Store(StoreData);


const router = new VueRouter({
    routes,
    mode: 'history',
});

router.beforeEach((to, from, next) => {
    const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
    const currentUser = store.state.currentUser;

    if(requiresAuth && !currentUser){
        next('/login');
    } else if(to.path == '/login' && currentUser){
        next('/');
    } else {
        next();
    }
});

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
});

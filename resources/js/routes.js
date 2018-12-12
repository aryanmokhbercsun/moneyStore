import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./components/Home";
import Login from "./components/auth/Login";

export const routes = [
    {
        path: '/',
        component: Home,
        // meta: {
        //     requiresAuth: true
        // }
    },
    {
        path: '/login',
        component: Login,
    }
];

const router = new VueRouter({
    // mode: history,
    routes // short for `routes: routes`
});

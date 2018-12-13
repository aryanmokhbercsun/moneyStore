import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./components/Home";
import Login from "./components/auth/Login";
import ProductsMain from "./components/products/Main";
import ProductsList from "./components/products/List";
import NewProduct from './components/products/New';
import Product from './components/products/View';

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
    },
    {
        path: '/products',
        component: ProductsMain,
        meta: {
            requiresAuth: true
        },
        children: [
            {
                path: '/',
                component: ProductsList,
            },
            {
                path: '/new',
                component: NewProduct,
            },
            {
                path: ':id',
                component: Product,
            },
        ]
    }
];

const router = new VueRouter({
    // mode: history,
    routes // short for `routes: routes`
});

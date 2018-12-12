import Vue from 'vue';
import VueRouter from 'vue-router';
import home from './views/home/index.vue';
import allProducts from './views/products/allProducts.vue';
import yourProducts from './views/products/yourProducts.vue';

Vue.use(VueRouter);
const router = new VueRouter({
    routes: [
        { path: '/', component: home },
        { path: '/allProducts', component: allProducts },
        { path: '/yourProducts', component: yourProducts },
        // { path: '/issues', component: issues},
        // { path: '/changes', component: changes},
        // { path: '/references', component: references},
        // { path: '/resources', component: resources},
        // { path: '/actionItems', component: actionItems},
        // { path: '/requirements', component: requirements},
        // { path: '/decisions', component: decisions},
        // { path: '/risks', component: risks},
        
    ]
});
export default router;
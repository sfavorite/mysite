import Vue from 'vue';
import VueRouter from 'vue-router';


require('./bootstrap');
require('./menu');
//require('./router.js');

window.Vue = require('vue');
Vue.use(VueRouter);

/**
* The following block of code may be used to automatically register your
* Vue components. It will recursively scan this directory for the Vue
* components and automatically register them with their "basename".
*
* Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
*/

//const files = require.context('./', true, /\.vue$/i);
//files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('home-component', require('./components/HomeComponent.vue').default);
//Vue.component('graphics-component', require('./components/GraphicsComponent.vue').default);
//Vue.component('about-component', require('./components/AboutComponent.vue').default);

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('./components/HomeComponent.vue')
    },
    {
        path: '/about',
        name: 'about',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () => import('./components/AboutComponent.vue')
    },
    {
        path: '/graphics',
        name: 'graphics',
        component: () => import('./components/GraphicsComponent.vue')
    }
]


const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
});


/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

const app = new Vue({
    router,
    el: '#app',
});

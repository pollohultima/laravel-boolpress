/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Importo e uso Vue
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//Definisco le rotte per i componenti pagina 
const Home = Vue.component('Home',require('./pages/Home.vue').default);
const About = Vue.component('About',require('./pages/About.vue').default);
const Contacts = Vue.component('Contacts',require('./pages/Contacts.vue').default);

Vue.component('App', require('./App.vue').default);

//Definisco le rotte nominate e uso i relativi componenti
const routes = [
    {
        path:'/',
        name: 'home',
        component: 'Home'
    },
    {
        path:'/',
        name: 'about',
        component: 'About'
    },
    {
        path:'/',
        name: 'contacts',
        component: 'Contacts'
    },
]

//Creo l'istanza rotta
const router = new VueRouter({
    mode: 'history', //   <- rimuove # dall'URL
    routes
})


const app = new Vue({
    el: '#app',
    router,  //   <- immetto l'istanza router
    data: {
        posts:null
    },
    mounted(){
        Axios.get('/api/posts').then(resp => {
            console.log(resp);
            this.posts = resp.data.data;
        }).catch(e => {
            console.error('Sorry! ' + e);
        })
    }
});


require('./bootstrap');
require('prismjs');

window.Vue = require('vue');
window.Vuex = require('vuex');

Vue.use(Vuex);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('switch-component', require('./components/SwitchComponent.vue'));
Vue.component('tableadminposts-component', require('./components/TableAdminPostsComponent.vue'));

import StoreData from './store.js';

const store = new Vuex.Store(StoreData);

const app = new Vue({
    el: '#app'
});







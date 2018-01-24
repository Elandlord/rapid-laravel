
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// imports
import toaster from 'toastr/build/toastr.min';
window.toastr = toaster;

require('./core/classes');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// search
Vue.component('search', require('./components/search/SearchComponent.vue'));
Vue.component('hosting-list', require('./components/pricing/hosting/HostingList.vue'));
Vue.component('hosting-item', require('./components/pricing/hosting/HostingItem.vue'));
Vue.component('domain-list', require('./components/domains/DomainsList.vue'));
Vue.component('domain-search', require('./components/search/DomainSearch.vue'));

const app = new Vue({
    el: '#app'
});

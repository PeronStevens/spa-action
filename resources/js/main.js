/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('subnav-component', require('./components/SubnavComponent.vue').default);
Vue.component('leftside-component', require('./components/LeftsideComponent.vue').default);
Vue.component('rightside-component', require('./components/RightsideComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);

Vue.component('monographtab-component', require('./components/tabs/MonographTabComponent.vue').default);
Vue.component('hometab-component', require('./components/tabs/HomeTabComponent.vue').default);
Vue.component('cmetab-component', require('./components/tabs/CMETabComponent.vue').default);
Vue.component('facultytab-component', require('./components/tabs/FacultyTabComponent.vue').default);

Vue.component('mobile-banner-component', require('./components/tabs/MobileBannerComponent.vue').default);

// Vue.component('start-button', require('./components/buttons/StartButtonComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

vm = new Vue({
    el: '#app',
    data: () => {
        return {
            auth: this.auth
        }
    }
});

require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('gafam-component', require('./components/GAFAM.vue').default);

const app = new Vue({
    el: '#app'
});
require('./bootstrap');

window.Vue = require('vue');
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
Vue.use(Vuetify);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('gafam-component', require('./components/GAFAM.vue').default);
Vue.component('client-top-component', require('./components/ClientTopComponent.vue').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify()
});
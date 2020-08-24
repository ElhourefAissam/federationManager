
require('./bootstrap');

window.Vue = require('vue');



Vue.component('handicap', require('./components/Handicap/handicap.vue').default);
Vue.component('AddHandicap', require('./components/Handicap/AddHandicap.vue').default);
Vue.component('EditHandicap', require('./components/Handicap/EditHandicap.vue').default);
Vue.component('DeleteHandicap', require('./components/Handicap/DeleteHandicap.vue').default);

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));



const app = new Vue({
    el: '#app',
});

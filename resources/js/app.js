
require('./bootstrap');

window.Vue = require('vue');

// home
Vue.component('App', require('./components/HomeComponents/App.vue').default);

// nav
Vue.component('Nav', require('./components/NavComponents/Nav.vue').default);

// admin
Vue.component('AssignRole', require('./components/AdminComponents/AssignRole.vue').default);
Vue.component('Role', require('./components/AdminComponents/Role.vue').default);

// Employe
Vue.component('Employe', require('./components/EmployeComponents/Employe.vue').default);
Vue.component('Add-Employe', require('./components/EmployeComponents/AddEmploye.vue').default);
Vue.component('Edit-Employe', require('./components/EmployeComponents/EditEmploye.vue').default);
Vue.component('Delete-Employe', require('./components/EmployeComponents/DeleteEmploye.vue').default);
Vue.component('Show-Employe', require('./components/EmployeComponents/ShowEmploye.vue').default);

// Handicap
Vue.component('Handicap', require('./components/HandicapComponents/Handicap.vue').default);
Vue.component('Add-Handicap', require('./components/HandicapComponents/AddHandicap.vue').default);
Vue.component('Edit-Handicap', require('./components/HandicapComponents/EditHandicap.vue').default);
Vue.component('Delete-Handicap', require('./components/HandicapComponents/DeleteHandicap.vue').default);


// Office
Vue.component('Office', require('./components/OfficeComponents/Office.vue').default);
Vue.component('Add-Office', require('./components/OfficeComponents/AddOffice.vue').default);
Vue.component('Edit-Office', require('./components/OfficeComponents/EditOffice.vue').default);
Vue.component('Delete-Office', require('./components/OfficeComponents/DeleteOffice.vue').default);
Vue.component('Show-Office', require('./components/OfficeComponents/ShowOffice.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));



const app = new Vue({
    el: '#app',
});

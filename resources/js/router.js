import Router from 'vue-router'
import Vue from 'vue'
Vue.use(Router)


const routes = [
    //Admin
    {
        path: '/federationlaravel/public/AssignRole',
        name: 'AssignRole',
        component: () => import("./components/AdminComponents/AssignRole")
    },
    {
        path: '/federationlaravel/public/Role',
        name: 'Role',
        component: () => import("./components/AdminComponents/Role")
    },

    //projects routes....
    {
        path: '/',
        name: 'Home',
        component: () => import("./components/HomeComponents/App")
    },
    {
        path: '/federationlaravel/public/Offices',
        name: 'Offices',
        component: () => import("./components/OfficeComponents/Office")
    },
    {
        path: '/federationlaravel/public/Office',
        name: 'DetailsOffices',
        component: () => import("./components/OfficeComponents/ShowOffice")
    },
    {
        path: '/federationlaravel/public/Handicap',
        name: 'Handicap',
        component: () => import("./components/HandicapComponents/Handicap")
    },
    {
        path: '/federationlaravel/public/Employe',
        name: 'Employe',
        component: () => import("./components/EmployeComponents/Employe")
    },
    {
        path: '/federationlaravel/public/ShowEmploye',
        name: 'ShowEmploye',
        component: () => import("./components/EmployeComponents/ShowEmploye")
    },
    {
        path: '*',
        name: 'home',
        component: () => import("./components/OfficeComponents/Office")
    },

]


export default new Router({
    mode: 'history',
    routes
})

new Vue(
    Vue.util.extend({routes})
)
import Vue from 'vue';
import Router from 'vue-router';


import LoginPage from './views/Login.vue';

//TICKETS


import DAMS_Ticket_Home from './views/DAMS_Home.vue';


import Ticket_Home_Admin from './views/Ticket-Home-Admin.vue';
import DAMS_Admin_Dashboard from './views/DAMS_Admin_Dashboard.vue';
import DAMS_Admin_Photo_Add from './views/DAMS_Admin_Photo_Add.vue';
import DAMS_Admin_Photo_Manage from './views/DAMS_Admin_Photo_Manage.vue';



Vue.use(Router);

const routes = [
    
    {
        path: '/home',
        name: 'home',
        component: DAMS_Ticket_Home
    },
    

    //ADMIN ROUTES
    {
        path: '/ticket/admin/',
        name: 'ticket-admin',
        component: Ticket_Home_Admin,
        children: [
            {
                path: '/admin/dashboard',
                name: 'admin-dashboard',
                component: DAMS_Admin_Dashboard,
            },
            {
                path: '/admin/photo/add',
                name: 'admin-photo-add',
                component: DAMS_Admin_Photo_Add,
            },
            {
                path: '/admin/photo/manage',
                name: 'admin-photo-manage',
                component: DAMS_Admin_Photo_Manage,
            },
        ],
    },
    

    //Login Routes
    {
        path: '/login',
        name: 'login',
        component: LoginPage
    },
    {
        path: '/',
        name: '',
        component: DAMS_Ticket_Home
    }
];

const router = new Router({
    routes: routes,
    linkActiveClass: 'active'
});

export default router;
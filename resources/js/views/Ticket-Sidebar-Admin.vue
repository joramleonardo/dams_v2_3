<template>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">DAMS Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <!-- <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a> -->
            
            <router-link to="/admin/dashboard" class="nav-link" exact>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </router-link>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Media
        </div>

        <!-- Nav Item - PHOTO Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePhoto"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Photo</span>
            </a>
            <div id="collapsePhoto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <!-- <a class="collapse-item" href="cards.html">Add New Photo</a> -->
                    <router-link to="/admin/photo/add" class="collapse-item" exact>
                        <span class="imp-nav-item">Add New Photo</span>
                    </router-link>
                    <router-link to="/admin/photo/manage" class="collapse-item" exact>
                        <span class="imp-nav-item">Manage list</span>
                    </router-link>
                    <!-- <a class="collapse-item" href="buttons.html">Manage list</a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - VIDEO Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVideo"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Videos</span>
            </a>
            <div id="collapseVideo" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="cards.html">Add New Video</a>
                    <a class="collapse-item" href="buttons.html">Manage list</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - VIDEO Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Category</span>
            </a>
            <div id="collapseCategories" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="cards.html">Add New Category</a>
                    <a class="collapse-item" href="buttons.html">Manage list</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        

    </ul>
</template>

<style>

</style>


<script>
import * as ticket_service from '../services/ticket_service';
import * as authServices from '../services/auth_service';

export default {
    name: 'employee',
    data() {
        return {
            ticket: [],
            ticketDetails: [],
            ticketData:{
                status:'',
                reference_code:''
            },
            assignedTicketData:{},
            totalAll: '',
            totalNew: '',
            totalAssigned: '',
            totalinProgress: '',
            totalCompleted: '',
            totalAssigned_staff: '',
            totalinProgress_staff: '',
            totalCompleted_staff: '',
            name: '',
            }
    },
    mounted() {
        this.countData();
    },
    methods: {
        count: async function() {
            const response_getUserData = await ticket_service.getUserData();
            this.displayName=response_getUserData.data.user.name;
            
                const total = await ticket_service.countAll();
                const total1 = await ticket_service.countNew_All();
                const t1 = await ticket_service.countAssigned_staff(this.displayName)
                const t2 = await ticket_service.countInProgress_staff(this.displayName)
                const t3 = await ticket_service.countCompleted_staff(this.displayName)

                this.totalAll = total.data;
                this.totalNew = total1.data;
                this.totalAssigned_staff = t1.data;
                this.totalinProgress_staff = t2.data;
                this.totalCompleted_staff = t3.data;

                const response_set_refCode = await ticket_service.setDisplayName(this.displayName);
                const response = await ticket_service.getAllTicketDetails_Approved_Assigned(this.displayName);
                this.ticket = response.data;
                this.totalRows = this.ticket.length;
            
        },
        countData: async function() {

            const response_getUserData = await ticket_service.getUserData();
            this.displayName=response_getUserData.data.user.name;
            try{
                const total = await ticket_service.countAll();
                const total1 = await ticket_service.countNew_All();
                const t1 = await ticket_service.countAssigned_staff(this.displayName)
                const t2 = await ticket_service.countInProgress_staff(this.displayName)
                const t3 = await ticket_service.countCompleted_staff(this.displayName)

                this.totalAll = total.data;
                this.totalNew = total1.data;
                this.totalAssigned_staff = t1.data;
                this.totalinProgress_staff = t2.data;
                this.totalCompleted_staff = t3.data;

                const response_set_refCode = await ticket_service.setDisplayName(this.displayName);
                const response = await ticket_service.getAllTicketDetails_Approved_Assigned(this.displayName);
                this.ticket = response.data;
                this.totalRows = this.ticket.length;
            } catch(error) {
                this.flashMessage.error({
                message: 'Some error occured! Please try again.',
                time: 5000
                });
            }
        },
        login: async function () {
            try {
                const response = await authServices.login(this.user);
                if(response.token_scope == 'superadmin'){
                    this.$router.push('/ticket/superadmin/status');
                } 
                else if(response.token_scope == 'admin'){
                    this.$router.push('/ticket/admin/status');
                } 
                else if(response.token_scope == 'staff'){
                    this.$router.push('/ticket/staff/status');
                } 
                // else if(response.token_scope == 'author_hr'){
                //     this.$router.push('/author/hr/dashboard');
                // }
                // } else if(response.token_scope == 'author_lib'){
                //     this.$router.push('/author/library/dashboard');
                // } else if(response.token_scope == 'author_pjs'){
                //     this.$router.push('/author/pjs/dashboard');
                // } else if(response.token_scope == 'author_sja'){
                //     this.$router.push('/author/sja/dashboard');
                // } else if(response.token_scope == 'author_starbooks'){
                //     this.$router.push('/author/starbooks/dashboard');
                // } else if(response.token_scope == 'author_dostv'){
                //     this.$router.push('/author/dostv/dashboard');
                // }
            } catch(error) {
                this.flashMessage.error({
                message: 'Some error occured! Please try again.',
                time: 5000
                });
            }
        },
        
    }
}

</script>

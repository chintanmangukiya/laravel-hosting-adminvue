<style>
    .swal2-popup{
        font-size: 1.5rem;
    }
    ._vue-flash-msg-_right-top{
        top: 70px !important;
    }
</style>
<template>
    <div>
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Employee</h4>
                    <select v-model="lang" @change="handleChange($event)">
                        <option value="en">English</option>
                        <option value="ar">ar</option>
                    </select>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div >
                <p v-if="lang == 'ar'">{{ $t('FirstName') }}</p>
            </div>
            <!-- <div >
                <td class="task_user">{{item}}</td>
            </div> -->
            <component-one :secondValue.sync="input_two"></component-one>

            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div style="text-align:right">
                            <router-link :to="{name: 'EmployeeCreate'}" class="btn btn-primary mb-3" v-b-tooltip.hover   title="Create Employee"> Create</router-link>
                            <router-link :to="{name: 'test'}" class="btn btn-primary mb-3" v-b-tooltip.hover   title="Create list"> list</router-link>
                            <router-link :to="{name: 'testDemo'}" class="btn btn-primary mb-3" v-b-tooltip.hover   title="Create list"> list Store</router-link>
                        </div>
                        <FlashMessage position="right top"></FlashMessage>
                        <div>
                            <!-- <datatable :columns="columns" :data="rows"></datatable>
                            <datatable-pager v-model="page" type="abbreviated" :per-page="perPage"></datatable-pager> -->
                            <!-- <bootstrap-4-datatable :columns="columns" :data="rows" :filter="filter" :per-page="perPage"></bootstrap-4-datatable>
                            <bootstrap-4-datatable-pager v-model="page" type="abbreviated"></bootstrap-4-datatable-pager> -->
                            <!-- <mdb-datatable :data="rows" striped bordered /> -->
                            <!-- <datatable :columns="columns" :data="rows"></datatable>
                        <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager> -->
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th v-if="lang == 'ar'">{{ $t('FirstName')}}</th>
                                        <th v-else>FirstName</th>
                                        <th>Last Name</th>
                                        <th>Phone No</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(list , index) in EmpList" :key="index">
                                        <td >{{list.id}}</td >
                                        <td> {{list.first_name}}</td>
                                        <td> {{list.last_name}}</td>
                                        <td> {{list.phone_no}}</td>
                                        <td> {{list.city}}</td>
                                        <td style="width:10%">
                                            <span>
                                                <router-link class="btn btn-warning" :to="{name : 'EmployeesEdit', params : {id : list.id }}"> <i class="fa fa-edit"></i></router-link>
                                                <!-- <button class="btn btn-warning" @click="editEmp(list)"><i class="fa fa-edit"></i></button> -->
                                                <button class="btn btn-danger" @click="deleteEmp(list.id)"><i class="fa fa-trash"> </i></button>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <b-card no-body>
                                <b-tabs card>
                                <b-tab title="Tab 1" active>
                                    <b-card-text>Tab contents 1</b-card-text>

                                </b-tab>
                                <b-tab title="Tab 2">
                                    <b-card-text>Tab contents 2</b-card-text>
                                </b-tab>
                                </b-tabs>
                            </b-card>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
// import $ from "jquery"
// import "datatables.net-dt/js/dataTables.dataTables.min.js"
// import "datatables.net-dt/css/jquery.dataTables.min.css"
// import Select2 from 'vue3-select2-component';
// import DatatableFactory from 'vuejs-datatable';
// import {ComponentTwo } from '../componentone.vue'
export default {
    name: "EmployeeList",
    // props: ['item'] ,
   components: {  },
    data: function(){
        const lang = localStorage.getItem('lang') || 'en';
        return{
            input_two: '',
            selected_language:'en',
            locale: 'en',
            lang : lang ,
            EmpList:[],
            // columns: [{
            //             label: 'id',
            //             field: 'id',
            //             align: 'center',
            //         },
            //         {
            //             label: 'title',
            //             field: 'first_name',
            //             align: 'center',

            //         },
            //         {
            //             label: 'category',
            //             field: 'last_name',
            //             align: 'center',

            //         },
            //         {
            //             label: 'description',
            //             field: 'phone_no',
            //             align: 'center',

            //         }
            // ],
            // rows: [],
            // page: 1,
            // filter: '',
            // perPage: 10,
        }
    },
    mounted() {
        this.getEmpList();
    },
    watch: {
            locale (val) {
                this.$i18n.locale = val
            }
    },
    methods: {
        getEmpList : async function(){
            try {
                axios.get('/employees/list')
                .then(res => {
                    // this.rows = res.data;
                    this.EmpList = res.data;
                    setTimeout(() => {
                        $(document).ready(function(){
                            $('#myTable').DataTable({
                                order: [[0, 'desc']],
                                searching: true,
                                paging: true,
                                retrieve: true,
                                destroy: true,
                            });
                        });
                    }, 100);
                })
                .catch(error => {
                    console.log(error);
                })
            } catch (error) {
                console.log(error);
            }
        },
        deleteEmp(id){
            try {
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('Deleted!','Your file has been deleted.','success')
                        axios.delete(`/employees/delete/${id}`)
                        .then(res => {
                            this.getEmpList();
                        })
                        .catch(error => {
                            console.log("error");
                        })
                    }
                })
            } catch (error) {
                console.log(error + 'dff');
            }
        },
        handleChange(e){
            localStorage.setItem('lang',e.target.value);
            // window.location.reload();
        },
    },
}
</script>

import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import Employee from './components/Employee/EmpListComponent.vue'
import EmployeeCreate from './components/Employee/EmpCreateComponent.vue'
import EmployeeEdit from './components/Employee/EmpEditComponent.vue'
import UserProfile from './components/UserProfile.vue'
import test from './components/componentone.vue'
import testDemo from './components/listview.vue'

const routes = [
    {
        path:'/employees',
        name:'EmployeesIndex',
        component: Employee
    },
    {
        path:'/employees/create',
        name:'EmployeeCreate',
        component: EmployeeCreate
    },
    {
        path:'/employees/edit/:id',
        name:'EmployeesEdit',
        component: EmployeeEdit
    },
    {
        path:'/profile/:id',
        name:'UserProfile',
        component: UserProfile
    },
    {
        path:'/test',
        name:'test',
        component: test
    },
    {
        path:'/testDemo',
        name:'testDemo',
        component: testDemo
    },
]
export default new Router({
    mode: 'history',
    routes
})

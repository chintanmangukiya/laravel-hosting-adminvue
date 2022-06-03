require('./bootstrap');
window.Vue = require('vue').default;
Vue.config.devtools = true

//Router File Add
import router from './route.js'

//sweetalert2
import Select2 from 'vue3-select2-component';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap-vue/dist/bootstrap-vue.css'
//Flash Message
import FlashMessage from '@smartweb/vue-flash-message';
//DataTables
import 'vuejs-datatable/dist/themes/bootstrap-4.esm';
import { VuejsDatatableFactory } from 'vuejs-datatable';
//Axios
import axios from 'axios';
// import { i18nVue } from 'laravel-vue-i18n'
import VueI18n from 'vue-i18n'

//Common Component Use
Vue.component('Select2', Select2)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(FlashMessage);
Vue.use(VuejsDatatableFactory);

Vue.use(VueI18n)
const i18n = new VueI18n({
    locale: 'en',
    messages:     {
        "en": {
            "FirstName": "الموظف!",
        }
    }
})

//Component File
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('employee-index', require('./components/Employee/EmpListComponent.vue').default);
Vue.component('user-profile', require('./components/UserProfile.vue').default);
Vue.component('component-one', require('./components/componentone.vue').default);
Vue.component('itemcomponent', require('./components/listview.vue').default);

const app = new Vue({
    i18n,
    el: '#app',
    router: router,
});

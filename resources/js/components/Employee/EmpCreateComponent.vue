<style>
    .invalid-feedback {
        display: inline;
    }
</style>

<template>
    <div>
        <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Employee Form</h4> </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Material Form</li>
                        </ol>
                    </div> -->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                        <div class="row">
                            <div>
                                <router-link :to="{name: 'EmployeesIndex'}" class="btn btn-default btn-circle" title="Previous"><i class="ti-arrow-left"></i></router-link>
                                <!-- <a class="btn btn-default btn-circle" href="{{ route('broker') }}" title="Previous">
                                    <i class="ti-arrow-left"></i>
                                </a> -->
                            </div>
                        </div>
                        <div>
                        </div>
                            <h3 class="box-title m-b-0 mt-5">Create Form</h3>
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="form-material form-horizontal mt-5" @submit.prevent="SubmitForm()">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                                <div>
                                                    <input type="text" class="form-control" v-model="form.firstName" placeholder="Enter First Name">
                                                    <div class="invalid-feedback" v-if="errors.first_name">{{ errors.first_name[0] }} </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <div>
                                                    <input type="text" class="form-control" v-model="form.lastName" placeholder="Enter Last Name">
                                                    <div class="invalid-feedback" v-if="errors.last_name">{{ errors.last_name[0] }} </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Mobile No.</label>
                                                <div>
                                                    <input type="number" class="form-control" v-model="form.phoneNo" placeholder="Enter Number">
                                                    <div class="invalid-feedback" v-if="errors.phone_no">{{ errors.phone_no[0] }} </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>City</label>
                                                <div>
                                                    <input type="text" class="form-control" v-model="form.city" placeholder="Enter Your City">
                                                    <div class="invalid-feedback" v-if="errors.city">{{ errors.city[0] }} </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <img src="/images/Forgotpassword.gif" fluid alt="Responsive image"> -->
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="col-md-8">
                                                <label>Text area</label>
                                                <div>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label class="col-sm-12">Input Select</label>
                                            <div class="col-sm-12">
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label class="col-sm-12">File upload</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group text-left p-t-md mb-5">
                                            &nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-success">SAVE</button>
                                            <!-- <button type="button" class="btn btn-danger" >CANCEL</button> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-3">
                                    <img src="/images/Forgotpassword.gif" fluid style="width: 240px;" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
        </div>
    </div>
</template>
<script>
export default {
    name:"CreateEmp",
    data(){
        return{
            form: {
                firstName:'',
                lastName:'',
                phoneNo:'',
                city:''
            },
            errors : {},
        }
    },
    methods: {
        SubmitForm : async function(){
            try {
                let formData = new FormData();
                formData.append("first_name", this.form.firstName);
                formData.append("last_name", this.form.lastName);
                formData.append("phone_no", this.form.phoneNo);
                formData.append("city", this.form.city);

                axios.post('/employees/store',formData)
                    .then((res) => {
                        this.form = {
                            firstName : "",
                            lastName : "",
                            phoneNo : "",
                            city : "",
                        };
                        this.$router.push({ name: 'EmployeesIndex' })
                        this.flashMessage.success({
                            message: "Employee Added SuccessFully!",
                            time: 5000,
                        })
                        // setTimeout(function () {
                        //         location.reload(true);
                        // }, 500);
                    })
                    .catch((e) => {
                        this.errors = e.response.data.errors;
                    })
            } catch (error) {
                console.log(error);
            }
        },
    },
}
</script>

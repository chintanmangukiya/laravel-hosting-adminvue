
<template>
    <div>
         <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">User Profile</h4>
                <p>{{currentDateTime()}}</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="media-body d-lg-block">
            <b-button
            class="mx-1 text-white"
            variant="success"
            size="sm"
            v-b-modal.translate-modal
            >
            Translate
            </b-button>
      </div>
      <b-modal
            id="translate-modal"
            size="xl"
            title="Translate site"
            hide-backdrop
            scrollable
            >
            <Translator :countries="countries"
        />
    </b-modal>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="tab-content">
                        <form class="form-horizontal form-material" @submit.prevent="formProfile()">
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="User Name" class="form-control form-control-line"
                                        v-model="form.name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-emaifl" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Email Address"
                                        class="form-control form-control-line"
                                        v-model="form.email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-emaifl" class="col-md-12">Profile</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control" @change="imageUpload" ref="profileImage">
                                </div>
                                <!-- <div>
                                    <img :src="`/images/${form.image}`" ref="displayImage">
                                </div> -->
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import moment from 'moment'
import { Translator } from "vue-google-translate";
export default {
    name:"UserProfile",
    components: {
        Translator,
    },
    data() {
        return {
            form:{
                name:'',
                email:'',
                image:'',
            },
    countries: [
        {
          code: "en|af",
          title: "Afrikaans",
        },
        {
          code: "en|ar",
          title: "Arabic",
        },
        {
          code: "en|zh-CN",
          title: "Chinese (Simplified)",
        },
        {
          code: "en|zh-TW",
          title: "Chinese (Traditional)",
        },
        {
          code: "en|en",
          title: "English",
        },
        {
          code: "en|fr",
          title: "French",
        },
        {
          code: "en|de",
          title: "German",
        },
        {
          code: "en|it",
          title: "Italian",
        },
        {
          code: "en|ru",
          title: "Russian",
        },
        {
          code: "en|es",
          title: "Spanish",
        },
        {
          code: "en|sv",
          title: "Swedish",
        },
      ],

        }
    },
    mounted() {
        this.getData();
    },
    methods: {
        currentDateTime() {
            return moment().format('MMMM Do YYYY, h:mm:ss a')
        },
        getData(){
            try {
                axios.get('/profile/show/' + this.$route.params.id)
                .then((res) => {
                    this.form = res.data;
                })
                .catch((e) => {
                    console.log("error");
                })
            } catch (error) {

            }
        },
        formProfile(){
            try {
                let formdata = new FormData();
                formdata.append('name',this.form.name);
                formdata.append('email',this.form.email);
                formdata.append('image',this.form.image);

                axios.post('/profile/update/' + this.$route.params.id , formdata)
                .then((res) => {
                    setTimeout(function () {
                        location.reload(true);
                    }, 200);
                })
                .catch((e) => {
                    console.log("error");
                })
            } catch (error) {
                console.log("error");
            }
        },
        imageUpload(e){
            this.form.image = e.target.files[0];

            // this.form.image = this.$refs.profileImage.files[0];
            //     let reader = new FileReader();
            //     reader.addEventListener('load',function () {
            //         this.$refs.displayImage.src = reader.result;
            //     }.bind(this),false);
            //     reader.readAsDataURL(this.form.image);
        },
    },

}
</script>
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>

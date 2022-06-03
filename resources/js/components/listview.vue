<template>
  <div>
     <div class="container-fluid">
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item , index) in demoList" :key="index">
                                        <td>{{item.name}}</td>

                                        <!-- Props Example  -->
                                        <!-- <employee-index :item="item"></employee-index> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
  </div>
</template>

<script>

  export default {
    name: "listview",
    data() {
      return {
          demoList:''
      }
    },
    mounted() {
        this.getDemo();
    },
    methods: {
        getDemo : async function(){
            try {
                axios.get('/demo/list')
                .then(res => {
                    // this.rows = res.data;
                    this.demoList = res.data;
                    console.log(res.data);
                })
                .catch(error => {
                    console.log(error);
                })
            } catch (error) {
                console.log(error);
            }
        },
    },
  }
</script>

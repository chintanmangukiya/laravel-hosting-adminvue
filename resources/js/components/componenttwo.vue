<template>
  <div>
    <input type="text" v-model="input_two" @change="textSubmit()">
       <button v-on:click="getUsers">Submit</button>
  </div>
</template>

<script>
  export default {
    name: "component-two",
    data() {
      return {
        input_one: 'Hello from ComponentTwo',
        input_two: '',
      }
    },
    watch : {
        input_two : function(val){
            this.$emit('secondValue:update', val)
        }
    },
    methods: {
        textSubmit(){
            console.log(this.input_two);
        },
        getUsers(){
            try {
                let formData = new FormData();
                formData.append("input_two", this.input_two);

                axios.post('/demoStore',formData)
                    .then((res) => {
                        console.log(res);
                        this.input_two = ""
                    })
                    .catch((e) => {
                        this.errors = e.response.data.errors;
                    })
            } catch (error) {
                console.log(error);
            }
        }
    },
  }
</script>

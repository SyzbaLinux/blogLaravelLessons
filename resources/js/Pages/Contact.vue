<template>
    <Navbar/>

    <div class="contact-form">
        <h1>Contact Us page</h1>

        <form @submit.prevent="sendContact">
            <label for="email">
                Enter your Email
            </label> <br>
            <input
                type="email"
                placeholder="Enter your Email"
                v-model="form.customerEmail"
            />

            <br>


            <label for="message">Enter your Message</label> <br>
            <textarea
                placeholder="Enter your message"
                cols="5"
                v-model="form.customerMessage"
            ></textarea>

            <br>
            <button type="submit">
                Send Message
            </button>
        </form>
    </div>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
export default {
    components:{
        Navbar
    },

    data(){
      return{

          form:this.$inertia.form({
              customerEmail:'',
              customerMessage:''
          })

      }
    },

    methods:{
        sendContact(){
             this.form.post('/contact')
        }
    }
}
</script>

<style>
.contact-form{
    width: 80%;
    margin-left:auto;
    margin-right: auto;
    border: 1px solid #fafafa;
    text-align: center;
    margin-top: 30px;
    padding: 10px;
}

input, textarea, button{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    margin-top: 10px;
}

button{
    background-color: green;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border: none;
    cursor: pointer;
}
</style>

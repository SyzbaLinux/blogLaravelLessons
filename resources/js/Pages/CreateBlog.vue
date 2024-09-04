<template>
    <Navbar/>

    <form class="blog-form" @submit.prevent="createBlog">
        <input v-model="form.preview_image" type="text" placeholder="Blog Image">
        <input v-model="form.title" type="text" placeholder="Blog Title">

        <span class="text-error">{{ $page.props.errors.title  }}</span>


        <input v-model="form.slug" type="text" placeholder="Blog Slug">
        <span class="text-error" v-if="$page.props.errors.slug">{{ $page.props.errors.slug  }}</span>


        <textarea v-model="form.body" type="text" placeholder="Blog Details"></textarea>
        <span class="text-error">{{ $page.props.errors.body  }}</span>


        <br>
        <button>
            Create Blog
        </button>
    </form>
</template>


<script >

import Navbar from "@/Components/Navbar.vue";
export default {
    components: {Navbar},

    data(){
        return{
            form:this.$inertia.form({
                title:'',
                slug:'',
                body:'',
                preview_image:null,
            })
        }
    },

    methods:{

        createBlog(){
            this.form.post('/blog')
        }
    }
}

</script>


<style>
.text-error{
    color:red;
}

.blog-form{
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

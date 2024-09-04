<template>
    <div class="navbar">
        <Link class="nav-link" href="/">Home</Link>
        <Link class="nav-link" href="/contact">Contact</Link>
        <Link class="nav-link" href="/about">About</Link>
        <Link class="nav-link" href="/blog">Blog Create</Link>
        <Link class="nav-link" :href="route('tags.index')">Tags</Link>
    </div>
</template>
<script>
    import { Link } from '@inertiajs/vue3'

    export default {
        components:{ Link }
    }
</script>
<style>
    .navbar{
        height:60px;
        width:100%;
        background-color: #fafafa;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-link{
        margin-left: 10px;
        margin-right: 10px;
        text-decoration: unset;
        color:grey;
    }
</style>

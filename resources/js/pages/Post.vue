<template>
    <div class="container">
        <img :src="post.cover" alt />
        <div class="card-body">
            <h3>{{ post.title }}</h3>
        </div>
    </div>
</template>

<script>

import Axios from "axios"

export default {

    data() {
        return {
            post: null
        }
    },
    mounted() {
        // Call the api for the single post
        Axios.get('/api/posts/' + this.$route.params.id)
        .then(resp => {
            console.log(resp);
            this.post = resp.data.data;
        })
    }

}
</script>

<style>
</style>
<template>
    <section class="posts d-flex flex-wrap">
        <h1>Posts</h1>
        <div class="post" v-for="post in posts" :key="post.id">
            <div class="card">
                <img :src=" post.cover" alt />
                <div class="card-body">
                    <h3>{{ post.title }}</h3>

                    <router-link :to="'/posts/' + post.id">View Post</router-link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

import axios from "axios";

export default {
   data() {
    return {
      posts: [],
    };
  },

    mounted(){
        this.callAPI();
    },
    
    methods: {
    callAPI() {
       axios.get('/api/posts').then(resp => {
            this.posts = resp.data.data;
        }).catch(e => {
            console.error('Sorry! ' + e);
        })
  }
  }

};
</script>
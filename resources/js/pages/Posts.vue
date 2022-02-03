<template>
    <div class="container">
            <section class="posts d-flex flex-wrap">
        <h1>Posts</h1>
        <div class="row">
           
                 <div class="col-4 card text-start mb-3" v-for="post in posts" :key="post.id">
                <img class="card-img-top mt-3" :src="post.cover" alt="" />
                <div class="card-body">
                    <h4 class="card-title">{{ post.title }}</h4>
                    <router-link :to="'/posts/' + post.id">View Post</router-link>
                </div>
   
            </div>
              
        </div>
     
    </section>
    </div>

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
<template>
    <div>
        <h1>Io vengo da App</h1>
        <ol>
            <li v-for="post in arrPosts" :key="post.id">{{ post.title }}</li>
        </ol>
    </div>
</template>

<script>
import NavBar from "./components/NavBar";
import FooterComponent from "./components/FooterComponent";

export default {
    name: "App",
    data() {
        return {
            arrPosts: [],
        };
    },
    created() {
        axios
            .get("/api/posts")
            .then((response) => (this.arrPosts = response.data.results));
    },
};
</script>

<style lang="scss">
@import "~bootstrap/scss/bootstrap";
</style>

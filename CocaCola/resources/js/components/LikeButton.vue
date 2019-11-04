<template>
    <div class="container">
        <button class="btn btn-primary" @click="likePost">Like</button>
    </div>
</template>

<script>
    export default {
        props: ['postId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            likePost(){
                //alert('test');
                axios.post('/like/'+ this.userId)
                    .then(response =>{
                        alert(response.data);
                    });
            }
        }
    }
</script>

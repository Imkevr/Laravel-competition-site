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
        data: function(){
            return{
                status:' ',
            }
        },

        methods: {
            likePost(){
                //alert('test');
                axios.post('/like/'+ this.postId)
                    .then(response =>{
                        console.log(response.data);
                    });
            }
        }
    }
</script>

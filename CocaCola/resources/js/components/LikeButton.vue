<template>
    <div class="container">
        <button class="btn btn-primary" @click="likePost" v-text="buttonText" > </button>
    </div>
</template>

<script>
    export default {
        props: ['postId', 'liked'],
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return{
                status: this.liked,
            }
        },

        methods: {
            likePost(){
                //alert('test');
                axios.post('/like/'+ this.postId)
                    .then(response =>{
                        this.status = ! this.status
                        console.log(response.data);
                    });
            }
        },

        computed: {
            buttonText(){
                return (this.status) ? 'Undo Like ' : 'Like';
            }
        }
    }
</script>

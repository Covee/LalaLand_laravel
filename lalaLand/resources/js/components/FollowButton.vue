<template>
    <div>
        <button class="btn btn-primary ml-3 mb-1" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser() {
                axios.post('/follow/1')
                    .then(response => {
                        alert(response.data);
                    });
            }
        }
    }
</script>

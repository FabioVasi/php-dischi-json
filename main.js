const { createApp } = Vue

createApp({
    data() {
        return {
            list: null
        }
    },
    methods: {

    },
    mounted() {
        axios
        .get('server.php')
        .then(response => {
            console.log(response);
            this.list = response.data;
        })
    }
}).mount('#app')
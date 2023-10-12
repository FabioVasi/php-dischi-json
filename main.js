const { createApp } = Vue

createApp({
    data() {
        return {
            
        }
    },
    methods: {
        
    },
    mounted() {
        axios
        .get('server.php')
        .then(response => {
            console.log(response);
        })
    }
}).mount('#app')
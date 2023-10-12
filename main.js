const { createApp } = Vue

createApp({
    data() {
        return {
            
        }
    },
    mounted() {
        axios
        .get('server.php')
        .then(response => {
            console.log(response);
        })
    }
}).mount('#app')
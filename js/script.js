
  const { createApp } = Vue

  createApp({
    data() {
      return {
        url:'./script.php',
        albums:[],
      }
    },
       
    methods: {
      albumsGet(){
        axios.get(this.url)
        .then(response => {
          this.albums = response.data;
          console.log(response.data)
        })
        .catch(error => {
          console.error('Errore durante la richiesta API', error);
        });
      }
    },

    mounted() {
      this.albumsGet();
    },



  }).mount('#app')


  const { createApp } = Vue

  createApp({
    data() {
      return {
        url:'./script.php',
        albums:[],
        fullscreenAlbum: null,
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
      },

      toggleFullscreen(album) {
        if (this.fullscreenAlbum === null) {
          // Se non c'è ancora un album a schermo intero, copialo
          this.fullscreenAlbum = { ...album };
        } else {
          // Se l'album è già a schermo intero, rimuovilo
          this.fullscreenAlbum = null;
        }
      },

    },



    mounted() {
      this.albumsGet();
      
    },



  }).mount('#app')

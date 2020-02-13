$vue = new Vue({
    el: "#app",
    data: {
        sorteos: [],
        imagenes: [],
        path_images
    },
    filters: {
        formatDate: function (value) {
            moment.locale('es');
            return moment(String(value)).format("MMMM DD YYYY");
        }
    },
    mounted(){
        // Familias
        axios.get("https://logis.com.co/app/api/web/sorteos.php?empresa=dev", {
            mode: 'no-cors',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            },
            withCredentials: false,
            credentials: 'same-origin',
        }).then(res => {
                this.sorteos = res.data;
            })
            .catch(function (error) {
                console.log(error);
        });

        // Imagenes
        axios.get("https://logis.com.co/app/api/web/imagenes_patrocinadores.php?empresa=dev", {
            mode: 'no-cors',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            },
            withCredentials: false,
            credentials: 'same-origin',
        }).then(res => {
            this.imagenes = res.data;
        })
            .catch(function (error) {
                console.log(error);
            });
    }
});


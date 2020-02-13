$vue = new Vue({
    el: "#app",
    data: {
        sorteos: [],
        imagenes: [],
        errors:[],
        identificacion:null,
        path_images,
        sorteo_db
    },
    methods:{
        consultar:function(e) {
            if(this.name && this.age) return true;
            this.errors = [];
            if(!this.identificacion) this.errors.push("Name required.");
            if(!this.age) this.errors.push("Age required.");
            e.preventDefault();
        }
    },
    filters: {
        formatDate: function (value) {
            moment.locale('es');
            return moment(String(value)).format("MMMM DD YYYY");
        }
    },
    mounted(){
        // Familias
        axios.get("https://logis.com.co/app/api/web/sorteos.php?sorteo=" + sorteo_db, {
            mode: 'no-cors',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            },
            withCredentials: true,
            credentials: 'same-origin',
        }).then(res => {
                this.sorteos = res.data;
            })
            .catch(function (error) {
                console.log(error);
        });

        // Imagenes
        axios.get("https://logis.com.co/app/api/web/imagenes_patrocinadores.php?sorteo=" + sorteo_db, {
            mode: 'no-cors',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            },
            withCredentials: true,
            credentials: 'same-origin',
        }).then(res => {
            this.imagenes = res.data;
        })
            .catch(function (error) {
                console.log(error);
            });
    }
});


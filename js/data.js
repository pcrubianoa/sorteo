$vue = new Vue({
    el: "#app",
    data: {
        sorteos: [],
        imagenes: [],
        errors:[],
        identificacion: null,
        acumulados: [],
        path_images,
        path_images_sponsors,
        sorteo_db
    },
    methods:{
        consultar: function(e) {
            e.preventDefault();
            if (this.identificacion) this.errors = [];
            this.errors = [];
            if (this.identificacion == null) {
                this.errors.push("Digita tu número de Identificación");
            } else {
                axios.post('https://logis.com.co/app/api/web/consulta.php?sorteo=' + sorteo_db, {
                    identificacion: this.identificacion,
                },{
                    mode: 'no-cors',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    withCredentials: false,
                    credentials: 'same-origin',
                }).then(res => {
                    this.acumulados = res.data;
                }).catch(error => {
                    console.log(error);
                });
            }
        },
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
                'Content-Type': 'application/json',
            },
            withCredentials: false,
            credentials: 'same-origin',
        }).then(res => {
            this.sorteos = res.data;
        }).catch(function (error) {
            console.log(error);
        });

        // Imagenes
        axios.get("https://logis.com.co/app/api/web/imagenes_patrocinadores.php?sorteo=" + sorteo_db, {
            mode: 'no-cors',
            headers: {
                'Content-Type': 'application/json',
            },
            withCredentials: false,
            credentials: 'same-origin',
        }).then(res => {
            this.imagenes = res.data;
        }).catch(function (error) {
            console.log(error);
        });
    }
});


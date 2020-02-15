<?php require('../../config.php'); ?>
<?php require('../../partials/calendar.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>Tu Sorteo</title>

   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="../../css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="../../css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="../../css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="../../css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="../../css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="../../css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="../../css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="../../css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="../../css/responsive.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <script>
        var path_images = "<?= PATH_IMAGES ?>";
        var path_images_sponsors = "<?= PATH_IMAGES_SPONSORS ?>";
        var sorteo_db = "<?= SORTEO_DB ?>";
    </script>
</head>

<body>
   <div id="app" class="body-inner">

      <!-- Header start -->
      <header id="header" class="header header-transparent">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <!-- logo-->

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                     <li class="dropdown nav-item active">
                        <a href="index.php" class="">Inicio</a>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="terminos.php" class="">Terminos y Condiciones</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="">Ganadores</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->

      <!-- banner start-->
      <section class="hero-area hero-speakers">
         <div class="banner-item overlay" style="background-image:url(../../images/cityu.jpg); background-position: left; background-position-x: 8%;">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="banner-content-wrap">
                        <div v-if="sorteos && sorteos.length">
                        <div v-for="sorteo in sorteos">
                            <p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">{{ sorteo.fecha_sorteo | formatDate }}</p>
                            <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">{{ sorteo.nombre }}</h1>
                            <p class="banner-info wow fadeInUp mt-0" data-wow-duration="1.5s" data-wow-delay="500ms">{{ sorteo.descripcion }}</p>
                            <p class="banner-info wow fadeInUp mt-0" data-wow-duration="1.5s" data-wow-delay="500ms">{{ sorteo.responsable }}</p>
                        </div>
                        </div>

                        <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                           <a href="#" class="btn">Registrate</a>
                           <a href="<?php echo getGCalendarUrl($evento); ?>" class="btn fill">Agregar al Calendario</a>
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
                        <h2>Registrate Ahora</h2>
                        <p>
                           Registrate, sube tu factura  y participa en el sorteo.
                        </p>
                        
                        <form action="http://35.231.168.139/storage/" method="POST" class="hero-form" enctype="multipart/form-data">
                            <input class="form-control form-control-name" placeholder="Nombre" name="nombre" id="f-nombre" type="text" required="">
                            <input class="form-control form-control-name" placeholder="Apellido" name="apellido" id="f-nombre" type="text" required="">
                            <input class="form-control form-control-phone" placeholder="Identificación" name="identificacion" id="f-identificacion" type="number">
                            <input class="form-control form-control-phone" placeholder="Teléfono" name="telefono" id="f-telefono" type="number">
                            <input class="form-control form-control-phone" placeholder="Almacén" name="almacen" id="f-almacen" type="text">
                            <input class="form-control form-control-phone" placeholder="Valor Factura" name="valor_factura" id="f-almacen" type="number">
                            <input class="form-control form-control-email" placeholder="Correo" name="email" id="f-correo" type="email" required="">
                            <label for="" class="text-dark pull-left">Factura</label>
                            <input class="form-control form-control-email" placeholder="Subir Factura" name="imagen" id="f-archivo" type="file" required="">
                            <button class="btn" type="submit"> Registrar</button>
                        </form><!-- form end-->
                     </div><!-- hero content end-->
                      <br>
                  </div><!-- col end-->
               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div>
      </section>
      <!-- banner end-->

       <section class="ts-contact-form">
           <div class="container">
               <div class="row">
                   <div class="col-lg-8 mx-auto">
                       <h2 class="section-title text-center">
                           <span>¿Cuantas facturas llevas acumuladas?</span>
                           Consulta tu valor acumulado
                       </h2>
                   </div><!-- col end-->
               </div>
               <div class="row">
                   <div class="col-lg-6 mx-auto">
                       <form id="contact-form" class="contact-form" method="POST">
                           <div class="error-container"></div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <input class="form-control form-control-name" placeholder="Número de Identificación" v-model="identificacion" name="identificacion" id="f-name" type="text" required>
                                   </div>
                                   <p v-if="errors.length">
                                        <h4 v-for="error in errors">{{ error }}</h4>
                                   </p>
                               </div>
                           </div>
                           <div class="text-center"><br>
                               <button class="btn" v-on:click="consultar">Consultar</button>
                           </div>
                       </form><!-- Contact form end -->
                   </div>
               </div>
           </div>
           <div class="speaker-shap">
               <img class="shap1" src="../../images/shap/home_schedule_memphis2.png" alt="">
           </div>
       </section>
       
       <section class="ts-pricing gradient" style="background-image: url(../../images/pricing/pricing_img.jpg)">
           <div class="container">
               <h2 v-show="acumulados.length" class="section-title white">Estas son todas tus facturas:</h2>
               <div class="row">
                   <div v-for="acumulado in acumulados" class="col-lg-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 400ms; animation-name: fadeInUp;">
                       <div class="single-intro-text mb-30">
                           <small>{{ acumulado.fecha_registro | formatDate }}</small>
                           <p><strong>Nombre:</strong> {{ acumulado.nombre + ' ' + acumulado.apellido}}</p>
                           <p><strong>Identificación:</strong> {{ acumulado.identificacion }}</p>
                           <p><strong>Almacén:</strong> {{ acumulado.almacen }}</p>
                           <p><strong>Valor Factura:</strong> ${{ acumulado.valor_factura }}</p>
                       </div><!-- single intro text end-->
                   </div>
               </div>
           </div><!-- container end-->
       </section>
       
       <section class="ts-intro-sponsors">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <h2 class="section-title">
                           <span>¿Quién nos ayuda?</span>
                           Nuestros patrocinadores
                       </h2><!-- section title end-->
                   </div><!-- col end-->
               </div><!-- row end-->
               <div class="row sponsor-padding text-center" v-if="imagenes & imagenes.lenght">
                   
                   <div class="col-lg-2 d-flex align-items-center" v-for="imagen in imagenes">
                       <a href="#" class="sponsors-logo">
                           <img class="img-fluid" :src="path_images_sponsors + imagen.imagen" alt="" width="60%">
                       </a>
                   </div>
                   
               </div>
           </div><!-- container end-->
       </section>
      <!-- ts footer area start-->
      <div class="footer-area">

         <!-- ts-book-seat start-->
         <section class="ts-book-seat" style="background-image: url(../../images/book_seat_img.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <div class="book-seat-content text-center mb-100">
                        <h2 class="section-title white">
                           Date prisa!
                        </h2>
                     </div><!-- book seat end-->
                  </div><!-- col end-->

               </div><!-- row end-->
               <div class="ts-footer-newsletter">
                  <div class="ts-newsletter" style="background-image: url(../../images/shap/subscribe_pattern.png)">
                     <div class="row">
                        <div class="col-lg-6 mx-auto">
                           <div class="ts-newsletter-content">
                              <h2 class="section-title">
                                 <span>¿Alguna inquietud?</span>
                                 Escribenos
                              </h2>
                           </div>
                           <div class="newsletter-form">
                              <form action="#" method="post" class="media align-items-end">
                                 <div class="email-form-group media-body">
                                    <input type="email" name="email" id="newsletter-form-email" class="form-control"
                                       placeholder="Tu correo" autocomplete="off" required="">
                                 </div>
                                 <div class="d-flex ts-submit-btn">
                                    <button class="btn">Suscribirse</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!-- container end-->
         </section>
         <!-- book seat  end-->

         <!-- footer start-->
         <footer class="ts-footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <div class="ts-footer-social text-center mb-30">
                        <ul>
                           <li>
                              <a href="#?"><i class="fa fa-facebook"></i></a>
                           </li>
                           <li>
                              <a href="#?"><i class="fa fa-twitter"></i></a>
                           </li>
                           <li>
                              <a href="#?"><i class="fa fa-google-plus"></i></a>
                           </li>
                           <li>
                              <a href="#?"><i class="fa fa-linkedin"></i></a>
                           </li>
                           <li>
                              <a href="#?"><i class="fa fa-instagram"></i></a>
                           </li>
                        </ul>
                     </div>
                     <!-- footer social end-->
                     <div class="footer-menu text-center mb-25">
                        <ul>
                           <li><a href="#?">Inicio</a></li>
                           <li><a href="#?">Terminos y Condiciones</a></li>
                           <li><a href="#?">Ganadores</a></li>
                           <li><a href="#?">Contacto</a></li>
                        </ul>
                     </div><!-- footer menu end-->
                     <div class="copyright-text text-center">
                         <p>Copyright © 2020. Todos los derechos reservados.</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer end-->
         <div class="BackTo">
            <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
         </div>

      </div>
      <!-- ts footer area end-->


   </div>
   <!-- Body inner end -->

      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="../../js/jquery.js"></script>

      <script src="../../js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="../../js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="../../js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="../../js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="../../js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="../../js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="../../js/wow.min.js"></script>

      <!-- Momentjs -->
      <script src="../../js/moment.js"></script>
      <script src="../../js/es.js"></script>

      <!-- isotop -->
      <script src="../../js/isotope.pkgd.min.js"></script>

      <!-- Vuejs -->
      <script src="../../js/vue.js"></script>

      <!-- Axios -->
      <script src="../../js/axios.min.js"></script>
       
      <!-- Template custom -->
      <script src="../../js/data.js"></script>
       
      <!-- Template custom -->
      <script src="../../js/main.js"></script>

   </div>
   <!-- Body inner end -->
</body>

</html>
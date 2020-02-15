<?php require('../../config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>Tu Sorteo - Terminos y Condiciones</title>

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
               <a class="navbar-brand" href="index.php">
                    <img src="../../images/logos/logo-alt.png" alt="">
                </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                     <li class="dropdown nav-item active">
                        <a href="index.php" class="">INICIO</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->

      <div id="page-banner-area" class="page-banner-area" style="background-image:url(../../images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Términos y Condiciones</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Información importante para los usuarios</a>
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->


      <section id="main-container" class="main-container">
         <div class="container">

            <div class="row">
               <div class="col-lg-12 mx-auto">
                  <div class="error-page text-justify" v-if="sorteos && sorteos.length">
                     <div class="error-body" v-for="sorteo in sorteos">
                        {{ sorteo.condiciones }}
                     </div>
                      <br>
                      <a href="index.php" class="btn pull-right">Volver al Sorteo</a>
                  </div>
               </div>
            </div><!-- Content row -->
         </div><!-- Container end -->
      </section><!-- Main container end -->

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
                              <a href="#"><i class="fa fa-facebook"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                           </li>
                        </ul>
                     </div>
                     <!-- footer social end-->
                     <div class="footer-menu text-center mb-25">
                        <ul>
                           <li><a href="#">About Eventime</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact</a></li>
                           <li><a href="#">Tickets</a></li>
                           <li><a href="#">Venue</a></li>
                        </ul>
                     </div><!-- footer menu end-->
                     <div class="copyright-text text-center">
                        <p>Copyright © 2018 Exhibit. All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer end-->

      </div>
      <!-- ts footer area end-->



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
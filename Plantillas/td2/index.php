<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
  $id = 0;
}

$query = $link->query("SELECT * FROM planconta WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
  while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    $imgPerfil = $dato['imgPerfil'];
    $imgEncabezado = $dato['imgEncabezado'];
    $nombreEncab = $dato['nombreEncab'];
    $nombrePerfil = $dato['nombrePerfil'];
    $descripcion1 = $dato['descripcion1'];
    $about1 = $dato['about1'];
    $descripcion2 = $dato['descripcion2'];
    $subT1 = $dato['subT1'];
    $text1 = $dato['text1'];
    $birth = $dato['birth'];
    $phone = $dato['phone'];
    $city = $dato['city'];
    $age = $dato['age'];
    $degree = $dato['degree'];
    $phemail = $dato['phemail'];
    $text = $dato['text'];
    $subT2 = $dato['subT2'];
    $text2 = $dato['text2'];
    $subT3 = $dato['subT3'];
    $text3 = $dato['text3'];
    $subT4 = $dato['subT4'];
    $text4 = $dato['text4'];
    $subT5 = $dato['subT5'];
    $text5 = $dato['text5'];
    $subT6 = $dato['subT6'];
    $text6 = $dato['text6'];
    $subT7 = $dato['subT7'];
    $text7 = $dato['text7'];
    $subT8 = $dato['subT8'];
    $text8 = $dato['text8'];
    $subT9 = $dato['subT9'];
    $text9 = $dato['text9'];
    $subT10 = $dato['subT10'];
    $text10 = $dato['text10'];
    $subT11 = $dato['subT11'];
    $text11 = $dato['text11'];
    $portafolio = $dato['portafolio'];
    $descripcion3 = $dato['descripcion3'];
    $all1 = $dato['all1'];
    $app1 = $dato['app1'];
    $card1 = $dato['card1'];
    $web1 = $dato['web1'];
    $img1 = $dato['img1'];
    $img2 = $dato['img2'];
    $img3 = $dato['img3'];
    $img4 = $dato['img4'];
    $img5 = $dato['img5'];
    $img6 = $dato['img6'];
    $img7 = $dato['img7'];
    $img8 = $dato['img8'];
    $img9 = $dato['img9'];
    $descripcion4 = $dato['descripcion4'];
    $service = $dato['service'];
    $texto1 = $dato['texto1'];
    $texto2 = $dato['texto2'];
    $texto3 = $dato['texto3'];
    $texto4 = $dato['texto4'];
    $texto5 = $dato['texto5'];
    $texto6 = $dato['texto6'];
    $subTesti = $dato['subTesti'];
    $descripcion5 = $dato['descripcion5'];
    $testi1 = $dato['testi1'];
    $nomTes1 = $dato['nomTes1'];
    $testi2 = $dato['testi2'];
    $nomTes2 = $dato['nomTes2'];
    $testi3 = $dato['testi3'];
    $nomTes3 = $dato['nomTes3'];
    $contact = $dato['contact'];
    $descripcion6 = $dato['descripcion6'];
    $face = $dato['face'];
    $whatsapp = $dato['whatsapp'];
    $instagram = $dato['instagram'];
    $twitter = $dato['twitter'];
  }

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pagina web Contador Manuel Mojica</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
      * digitalizandote.digital
      * Plantilla Tarjeta Digital  1
      * Author: BootstrapMade.com
      * Integrador : NetRabbit, S.A. de C.V.
      * Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
      * Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
    ======================================================== -->
    <style type="text/css">
      #Layer1 {
        position: absolute;
        width: 41px;
        height: 39px;
        z-index: 100;
        left: 300px;
        top: 700px;
        bottom: 10x;
        right: 0px;
        position: fixed;
      }

      #hero {
        width: 100%;
        height: 100vh;
        background: url('img/<?php echo $id . "/" . $imgEncabezado; ?>') top center;
        background-size: cover;
      }
    </style>

  </head>

  <!-- <div id="Layer1">
  <a href="https://digitalizandote.digital/panel/plantillas/"><img src="assets/img/regegresa_a_plantillas.png" width="150" height="40" alt=""></a>
</div> -->

  <body>



    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">

        <div class="profile">
          <img src="<?= "img/$id/$imgPerfil" ?>" alt="" class=" img-fluid rounded-circle">
          <h1 class="text-light"><a href="index.html"><?= $nombrePerfil; ?></a></h1>
          <div class="social-links mt-3 text-center">
            <a href="<?= $twitter; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="<?= $face; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="<?= $instagram; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="<?= $whatsapp; ?>" class="linkedin"><i class='bx bxs-phone-call'></i></i></a>
          </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre Mi</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Trayectoria</span></a>
            </li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                <span>Portfolio</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Servicios</span></a></li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
      <div class="hero-container" data-aos="fade-in">
        <h1><?= $nombreEncab; ?></h1>
        <p><?= $descripcion1; ?>
        </p>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="section-title">
            <h2><?= $about1; ?></h2>
            <p><?= $descripcion2; ?></p>
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="<?= "img/$id/$imgPerfil" ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3><?= $subT1; ?></h3>
              <p class="fst-italic">
                <?= $text1; ?>
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Cumpleaños:</strong> <span><?= $birth; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Celular:</strong> <span><?= $phone; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span><?= $city; ?></span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span><?= $age; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Grado:</strong> <span><?= $degree; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span><?= $phemail; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                <?= $text; ?>
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Facts Section ======= -->
      <section id="facts" class="facts">
        <div class="container">

          <div class="section-title">
            <h2><?= $subT2; ?></h2>
            <p><?= $text2; ?></p>
          </div>



        </div>
      </section><!-- End Facts Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills section-bg">
        <div class="container">

          <div class="section-title">
            <h2><?= $subT3; ?></h2>
            <p><?= $text3; ?></p>
          </div>



        </div>
      </section><!-- End Skills Section -->

      <!-- ======= Resume Section ======= -->
      <section id="resume" class="resume">
        <div class="container">

          <div class="section-title">
            <h2><?= $subT4; ?></h2>
            <p><?= $text4; ?></p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Resumen</h3>
              <div class="resume-item pb-0">
                <h4><?= $subT5; ?></h4>
                <p><em><?= $text5; ?></em></p>

              </div>

              <h3 class="resume-title">Educación</h3>
              <div class="resume-item">
                <h4><?= $subT6; ?></h4>
                <p><em><?= $text6; ?></em></p>
              </div>
              <div class="resume-item">
                <h4><?= $subT7; ?></h4>
                <p><em><?= $text7; ?></em></p>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Experiencia profesional</h3>
              <div class="resume-item">
                <h4><?= $subT8; ?></h4>
                <p><em><?= $text8; ?></em></p>

              </div>
              <div class="resume-item">
                <h4><?= $subT9; ?></h4>
                <p><em><?= $text9; ?></em></p>
              </div>
              <div class="resume-item">
                <h4><?= $subT10; ?></h4>
                <p><em><?= $text10; ?></em></p>
              </div>
              <div class="resume-item">
                <h4><?= $subT11; ?></h4>
                <p><em><?= $text11; ?></em></p>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Resume Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container">

          <div class="section-title">
            <!-- <h2><?= $portafolio; ?></h2> -->
            <!-- <p><?= $descripcion3; ?></p> -->
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <!-- <li data-filter="*" class="filter-active"><?= $all1; ?></li> -->
                <li data-filter=".filter-app"><?= $app1; ?></li>
                <li data-filter=".filter-card"><?= $card1; ?></li>
                <li data-filter=".filter-web"><?= $web1; ?></li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img1"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img1"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img2"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img2"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img3"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img3"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img4"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img4"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img5"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img5"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img6"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img6"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img7"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img7"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img8"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img8"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img9"; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?= "img/$id/$img9"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2><?= $service; ?></h2>
            <p><?= $descripcion4; ?></p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <p class="description"><?= $texto1; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <p class="description"><?= $texto2; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <p class="description"><?= $texto3; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <p class="description"><?= $texto4; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <p class="description"><?= $texto5; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <p class="description"><?= $texto6; ?></p>
            </div>
          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container">

          <div class="section-title">
            <h2><?= $subTesti; ?></h2>
            <p><?= $descripcion5; ?></p>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $testi1; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?= $nomTes1; ?></h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $testi2; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?= $nomTes2; ?></h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $testi3; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?= $nomTes3; ?></h3>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2><?= $contact; ?></h2>
            <p><?= $descripcion6; ?></p>
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Ciudad:</h4>
                  <p><?= $city; ?></p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><?= $phemail; ?></p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telefono:</h4>
                  <p><?= $phone; ?></p>
                </div>
              </div>

            </div>



          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright 2023<strong></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
          Diseñado Por:<a href="https://netrabbit.online/"> Netrabbit</a>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>
<?php
} else {
?>

  <!DOCTYPE html>
  <html lang="es">

  <head>


    <title>No Encontrado</title>

    <!-- CSS -->
    <style>
      /* TÍTULO DE SECTOR Y LÍNEA DIVISORA */
      .bg {
        background-color: #FFFF !important;
      }

      .titulosector {
        color: #07617d;
      }

      .hr {
        color: #686868;
      }

      /* ETIQUETA DE INPUT */
      .tituloimput {
        color: #202020;
      }
    </style>

  </head>

  <body>
    <div class="container">
      <div class="page-content bg">
        <div style="text-align: center;">
          <h2 class="titulosector">La landing page a la que intentas acceder no existe o no está disponible</h2>
          <hr class="hr">
          <h4 class="tituloimput">Por favor verifica la dirección.</h4>
        </div>
      </div>
    </div>
  </body>

  </html>

<?php
}
?>
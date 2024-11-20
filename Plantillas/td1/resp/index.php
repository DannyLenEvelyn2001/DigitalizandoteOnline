<!-- include "digitalizandote/conn.php";
$sql=$conexion->query("SELEC * FROM plantillas");
while($dato=$sql->){}
-->
<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
  $id = 0;
}

$query = $link->query("SELECT * FROM plandiseno WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
  while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    $logo = $dato['logo'];
    $home1 = $dato['home1'];
    $about = $dato['about'];
    $portafolio = $dato['portafolio'];
    $blog = $dato['blog'];
    $colorEncabezado = $dato['colorEncabezado'];
    $color1 = $dato['color1'];
    $colorIconos = $dato['colorIconos'];
    $color2Primario = $dato['color2Primario'];
    $color3Secundario = $dato['color3Secundario'];
    $color4 = $dato['color4'];
    $color5 = $dato['color5'];
    $color6 = $dato['color6'];
    $color7 = $dato['color7'];
    $color8 = $dato['color8'];
    $color9 = $dato['color9'];
    $color10 = $dato['color10'];
    $nombre = $dato['nombre'];
    $descripcion1 = $dato['descripcion1'];
    $imgEncabezado = $dato['imgEncabezado'];
    $whatsapp = $dato['whatsapp'];
    $facebook = $dato['facebook'];
    $instagram = $dato['instagram'];
    $twitter = $dato['twitter'];
    $imgContenido = $dato['imgContenido'];
    // $color4 = $dato['color4'];
    $descripcion2 = $dato['descripcion2'];
    $cajaT1 = $dato['cajaT1'];
    $cajaT2 = $dato['cajaT2'];
    $cajaT3 = $dato['cajaT3'];
    $cajaT4 = $dato['cajaT4'];
    $cajaT5 = $dato['cajaT5'];
    $cajaT6 = $dato['cajaT6'];
    $subCaja1 = $dato['subCaja1'];
    $subCaja2 = $dato['subCaja2'];
    $subCaja3 = $dato['subCaja3'];
    $subCaja4 = $dato['subCaja4'];
    $subCaja5 = $dato['subCaja5'];
    $subCaja6 = $dato['subCaja6'];
    $tituloPor = $dato['tituloPor'];
    $c1img = $dato['c1img'];
    $c2img = $dato['c2img'];
    $c3img = $dato['c3img'];
    $c1img2 = $dato['c1img2'];
    $c2img2 = $dato['c2img2'];
    $c3img2 = $dato['c3img2'];
    $subTitulo = $dato['subTitulo'];
    $imgc1 = $dato['imgc1'];
    $imgc2 = $dato['imgc2'];
    $imgc3 = $dato['imgc3'];
    $hiperImg1 = $dato['hiperImg1'];
    $separa1 = $dato['separa1'];
    $hiperImg2 = $dato['hiperImg2'];
    $separa2 = $dato['separa2'];
    $hiperImg3 = $dato['hiperImg3'];
    $separa3 = $dato['separa3'];
    $all1 = $dato['all1'];
    $app1 = $dato['app1'];
    $card1 = $dato['card1'];
    $web1 = $dato['web1'];
    $get = $dato['get'];
    $calle = $dato['calle'];
    $ciudad = $dato['ciudad'];
    $tel = $dato['tel'];
    $email = $dato['email'];
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="DIGITALIZÁNDOTE">
    <meta property="og:description" content="<?= $descripcion1; ?>">
    <meta property="og:image" content="../Plantillas/Plantilla1.png">
    <meta property="og:url" content="URL_COMPLETA_DE_LA_PAGINA_ACTUAL">
    <meta property="og:type" content="website">

    <!-- Favicons -->
    <link href="<?= "img/$id/$logo" ?>" rel="icon">
    <link href="<?= "img/$id/$logo" ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Folio - v4.10.0
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style type="text/css">
      #Layer1 {
        position: absolute;
        width: 41px;
        height: 39px;
        z-index: 100;
        left: 0px;
        top: 400px;
        bottom: 10x;
        right: 0px;
        position: fixed;
      }

      #hero {
        background: url('img/<?php echo $id . "/" . $imgEncabezado; ?>') repeat scroll center center/cover;
        height: 100vh;
        width: 100%;
      }

      .hero-content h1,
      .hero-content p {
        color: <?= $colorEncabezado ?> !important;
      }

      .p-heading {
        color: <?= $color1 ?> !important;
      }

      .bi {
        color: <?= $colorIconos ?> !important;
      }

      .separator {
        color: <?= $color3Secundario ?> !important;
      }

      .colo2Prim {
        color: <?= $color2Primario ?> !important;
      }

      .colorPor {
        color: <?= $color4 ?> !important;
      }
    </style>

  </head>

  <body>
    <!-- <div id="Layer1">

    <a href="https://digitalizandote.digital/panel/plantillas/"><img src="assets/img/regegresa_a_plantillas.png" width="150" height="40" alt=""></a>
  </div> -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo"><img src="<?= "img/$id/$logo" ?>" alt="" class=" img-fluid"></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero"><?= $home1; ?></a></li>
            <li><a class="nav-link scrollto" href="#about"><?= $about; ?></a></li>
            <li><a class="nav-link  scrollto" href="#portfolio"><?= $portafolio; ?></a></li>
            <li><a class="nav-link  scrollto" href="#journal"><?= $blog; ?></a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="home">

      <div class="container">
        <div class="hero-content">
          <h1><?= $nombre; ?></h1>
          <p><?= $descripcion1; ?></p>

          <ul class="list-unstyled list-social">
            <li><a href="<?= $facebook; ?>"><i class="bi bi-facebook"></i></a></li>
            <li><a href="<?= $twitter; ?>"><i class="bi bi-twitter"></i></a></li>
            <li><a href="<?= $instagram; ?>"><i class="bi bi-instagram"></i></a></li>
            <li><a href="<?= $whatsapp; ?>"><i class="bi bi-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <div id="about" class="paddsection">
        <div class="container">
          <div class="row justify-content-between">

            <div class="col-lg-4 ">
              <div class="div-img-bg">
                <div class="about-img">
                  <img src="<?= "img/$id/$imgEncabezado"; ?>" class="img-responsive" alt="me">
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="about-descr">

                <p class="p-heading"><?= $descripcion2; ?></p>

              </div>

            </div>
          </div>
        </div>
      </div><!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <div id="services">
        <div class="container">

          <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-briefcase"></i>
                  <span class="colo2Prim"><?= $cajaT1; ?></span>
                  <p class="separator"><?= $subCaja1; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-card-checklist"></i>
                  <span class="colo2Prim"><?= $cajaT2; ?></span>
                  <p class="separator"><?= $subCaja2; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-bar-chart"></i>
                  <span class="colo2Prim"><?= $cajaT3; ?></span>
                  <p class="separator"><?= $subCaja3; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-binoculars"></i>
                  <span class="colo2Prim"><?= $cajaT4; ?></span>
                  <p class="separator"><?= $subCaja4; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-brightness-high"></i>
                  <span class="colo2Prim"><?= $cajaT5; ?></span>
                  <p class="separator"><?= $subCaja5; ?> </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-calendar4-week"></i>
                  <span class="colo2Prim"><?= $cajaT6; ?></span>
                  <p class="separator"><?= $subCaja6; ?> </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </div><!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <div id="portfolio" class="paddsection">

        <div class="container">
          <div class="section-title text-center">
            <h2 class="colorPor"><?= $tituloPor; ?></h2>
          </div>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active"><?= $all1; ?></li>
                <li data-filter=".filter-app"><?= $app1; ?></li>
                <li data-filter=".filter-card"><?= $card1; ?></li>
                <li data-filter=".filter-web"><?= $web1; ?></li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="<?= "img/$id/$c1img"; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="<?= "img/$id/$c1img2"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="<?= "img/$id/$c2img"; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="<?= "img/$id/$c2img2"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="<?= "img/$id/$c3img"; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="<?= "img/$id/$c3img2"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

          </div>

        </div>

      </div><!-- End Portfolio Section -->

      <!-- ======= Journal Section ======= -->
      <div id="journal" class="text-left paddsection">

        <div class="container">
          <div class="section-title text-center">
            <h2><?= $subTitulo; ?></h2>
          </div>
        </div>

        <div class="container">
          <div class="journal-block">
            <div class="row">

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">

                  <a href="#"><img src="<?= "img/$id/$imgc1"; ?>" class="img-responsive" alt="img"></a>

                  <div class="journal-txt">

                    <h4><a href="blog-single.html"><?= $hiperImg1; ?></a></h4>
                    <p class="separator"><?= $separa1; ?>
                    </p>

                  </div>

                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">

                  <a href="#"><img src="<?= "img/$id/$imgc2"; ?>" class="img-responsive" alt="img"></a>

                  <div class="journal-txt">

                    <h4><a href="blog-single.html"><?= $hiperImg2; ?></a></h4>
                    <p class="separator"><?= $separa2; ?>
                    </p>

                  </div>

                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">

                  <a href="#"><img src="<?= "img/$id/$imgc3"; ?>" class="img-responsive" alt="img"></a>

                  <div class="journal-txt">

                    <h4><a href="blog-single.html"><?= $hiperImg3; ?></a></h4>
                    <p class="separator"><?= $separa3; ?>
                    </p>

                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div><!-- End Journal Section -->

      <!-- ======= Contact Section ======= -->
      <div id="contact" class="paddsection">
        <div class="container">
          <div class="contact-block1">
            <div class="row">

              <div class="col-lg-6">
                <div class="contact-contact">

                  <h2 class="mb-30"><?= $get; ?></h2>

                  <ul class="contact-details">
                    <li><span><?= $calle; ?></span></li>
                    <li><span><?= $ciudad; ?></span></li>
                    <li><span><?= $tel; ?></span></li>
                    <li><span><?= $email; ?></span></li>
                  </ul>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <div id="footer" class="text-center">
      <div class="container">
        <div class="socials-media text-center">

          <ul class="list-unstyled">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
          </ul>

        </div>

        <p>&copy; Copyrights Folio. All rights reserved.</p>

        <div class="credits">
          <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>

      </div>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
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
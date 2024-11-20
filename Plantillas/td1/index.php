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
    $nombre = $dato['nombre'];
    $descripcion1 = $dato['descripcion1'];
    $imgEncabezado = $dato['imgEncabezado'];
    // $whatsapp = $dato['whatsapp'];
    if ($dato['whatsapp'] == "") {
      $whatsapp = "";
    } else {
      $whatsapp = ' <li><a href="' . $dato['whatsapp'] . '"><i class="bi bi-whatsapp"></i>></a></li>';
    }
    // $facebook = $dato['facebook'];
    if ($dato['facebook'] == "") {
      $facebook = "";
    } else {
      $facebook = ' <li><a href="' . $dato['facebook'] . '"><i class="bi bi-facebook"></i></a></li>';
    }
    // $instagram = $dato['instagram'];
    if ($dato['instagram'] == "") {
      $instagram = "";
    } else {
      $instagram = ' <li><a href="' . $dato['instagram'] . '"><i class="bi bi-instagram"></i></a></li>';
    }
    // $twitter = $dato['twitter'];
    if ($dato['twitter'] == "") {
      $twitter = "";
    } else {
      $twitter = ' <li><a href="' . $dato['twitter'] . '"><i class="bi bi-twitter-x"></i></a></li>';
    }

    //  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
    // <li><a href="#"><i class="bi bi-twitter-x"></i></li>
    // <li><a href="#"><i class="bi bi-instagram"></i></a></li>
    // <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>

    $twitter = $dato['twitter'];
    $imgContenido = $dato['imgContenido'];
    $color1 = $dato['color1'];
    $descripcion2 = $dato['descripcion2'];
    $colorIconos = $dato['colorIconos'];
    $color2Primario = $dato['color2Primario'];
    $color3Secundario = $dato['color3Secundario'];
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
    $color4 = $dato['color4'];
    $tituloPor = $dato['tituloPor'];
    $c1img = $dato['c1img'];
    $c2img = $dato['c2img'];
    $c3img = $dato['c3img'];
    $c1img2 = $dato['c1img2'];
    $c2img2 = $dato['c2img2'];
    $c3img2 = $dato['c3img2'];
    $color5 = $dato['color5'];
    $color6 = $dato['color6'];
    $color7 = $dato['color7'];
    $color8 = $dato['color8'];
    $color9 = $dato['color9'];
    $color10 = $dato['color10'];
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
  <html lang="es">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Diseño</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  * Template Name: Folio
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
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
      p {
        color: <?= $colorEncabezado ?> !important;
      }

      .p-heading {
        color: <?= $color1 ?>;
      }

      .caja {
        color: <?= $color2Primario ?>;
      }

      .separator {
        color: <?= $color3Secundario ?>;
      }

      .porta {
        color: <?= $color4 ?>;
      }

      .subTitu {
        color: <?= $color5 ?>;
      }

      .hiper {
        color: <?= $color6 ?>;
      }

      .separatorH4 {
        color: <?= $color7 ?>;
      }

      .tituGet {
        color: <?= $color9 ?>;
      }

      .hip1 {
        color: <?= $color10 ?>;
      }
    </style>
    <style>
      .bi {
        color: <?= $colorIconos ?> !important;
      }
    </style>
    <style>
      .filter-active {
        color: <?= $color8 ?> !important;
      }
    </style>
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center justify-content-between">

        <a href="#" class="logo"><img src="<?= "img/$id/$logo" ?>" alt="" class="img-fluid"></a>
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
            <?= $facebook; ?>
            <?= $twitter; ?>
            <?= $instagram; ?>
            <?= $whatsapp; ?>
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

                <p class="p-heading"><?= $descripcion2; ?>
                <p>

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
                  <span class="caja"><?= $cajaT1; ?></span>
                  <p class="separator"><?= $subCaja1; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-card-checklist"></i>
                  <span class="caja"><?= $cajaT2; ?></span>
                  <p class="separator"><?= $subCaja2; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-bar-chart"></i>
                  <span class="caja"><?= $cajaT3; ?></span>
                  <p class="separator"><?= $subCaja3; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-binoculars"></i>
                  <span class="caja"><?= $cajaT4; ?></span>
                  <p class="separator"><?= $subCaja4; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-brightness-high"></i>
                  <span class="caja"><?= $cajaT5; ?></span>
                  <p class="separator"><?= $subCaja5; ?></p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="services-block">
                  <i class="bi bi-calendar4-week"></i>
                  <span class="caja"><?= $cajaT6; ?></span>
                  <p class="separator"><?= $subCaja6; ?></p>
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
            <h2 class="porta"><?= $tituloPor; ?></h2>
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
              <!-- app -->
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="<?= "img/$id/$c2img"; ?>" class="img-fluid" alt="">
              <!-- web 3-->
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="<?= "img/$id/$c3img"; ?>" class="img-fluid" alt="">
              <!-- app 2-->
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="<?= "img/$id/$c1img2"; ?>" class="img-fluid" alt="">
              <!-- card -->
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="<?= "img/$id/$c2img2"; ?>" class="img-fluid" alt="">
              <!-- web 2-->
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="<?= "img/$id/$c3img2"; ?>" class="img-fluid" alt="">
              <!-- app  3-->
            </div>

          </div>

        </div>

      </div><!-- End Portfolio Section -->

      <!-- ======= Journal Section ======= -->
      <div id="journal" class="text-left paddsection">

        <div class="container">
          <div class="section-title text-center">
            <h2 class="subTitu"><?= $subTitulo; ?></h2>
          </div>
        </div>

        <div class="container">
          <div class="journal-block">
            <div class="row">

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">
                  <img src="<?= "img/$id/$imgc1"; ?>" class="img-responsive" alt="img">

                  <div class="journal-txt">

                    <h4 class="hiper"><?= $hiperImg1; ?></h4>
                    <p class="separatorH4"><?= $separa1; ?>
                    </p>

                  </div>

                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">

                  <img src="<?= "img/$id/$imgc2"; ?>" class="img-responsive" alt="img">

                  <div class="journal-txt">

                    <h4 class="hiper"><?= $hiperImg2; ?></h4>
                    <p class="separatorH4"><?= $separa2; ?>
                    </p>

                  </div>

                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="journal-info">

                  <img src="<?= "img/$id/$imgc3"; ?>" class="img-responsive" alt="img">

                  <div class="journal-txt">

                    <h4 class="hiper"><?= $hiperImg3; ?></h4>
                    <p class="separatorH4"><?= $separa3; ?>
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

                  <h2 class="tituGet mb-30"><?= $get; ?></h2>

                  <ul class="contact-details">
                    <li><span class="hip1"><?= $calle; ?></span></li>
                    <li><span class="hip1"><?= $ciudad; ?></span></li>
                    <li><span class="hip1"><?= $tel; ?></span></li>
                    <li><span class="hip1"><?= $email; ?></span></li>
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
            <li><a href="#"><i class="bi bi-twitter-x"></i></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
          </ul>

        </div>
        <div class="copyright">
          2024, made with <i class="fa fa-heart heart text-danger"></i> by
          <a href="https://netrabbit.online/">NetRabbit S.A DE C.V</a>
        </div>

      </div>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>
<?php
}
?>
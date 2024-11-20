<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
  $id = 0;
}

$query = $link->query("SELECT * FROM planfotografo WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
  while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    $tituloEnc = $dato['tituloEnc'];
    $imgEnc = $dato['imgEnc'];
    $tituloNombre = $dato['tituloNombre'];
    $tituloSubNom = $dato['tituloSubNom'];
    $imgPerfil = $dato['imgPerfil'];
    $name = $dato['name'];
    $profile = $dato['profile'];
    $email = $dato['email'];
    $celular = $dato['celular'];
    $subTitu = $dato['subTitu'];
    $descripcion1 = $dato['descripcion1'];
    $tituloPort = $dato['tituloPort'];
    $descPorta = $dato['descPorta'];
    $imgP1 = $dato['imgP1'];
    $imgP2 = $dato['imgP2'];
    $imgP3 = $dato['imgP3'];
    $imgP4 = $dato['imgP4'];
    $imgP5 = $dato['imgP5'];
    $imgP6 = $dato['imgP6'];
    $nomImg1 = $dato['nomImg1'];
    $nomImg2 = $dato['nomImg2'];
    $nomImg3 = $dato['nomImg3'];
    $nomImg4 = $dato['nomImg4'];
    $nomImg5 = $dato['nomImg5'];
    $nomImg6 = $dato['nomImg6'];
    $fechaImg1 = $dato['fechaImg1'];
    $fechaImg2 = $dato['fechaImg2'];
    $fechaImg3 = $dato['fechaImg3'];
    $fechaImg4 = $dato['fechaImg4'];
    $fechaImg5 = $dato['fechaImg5'];
    $fechaImg6 = $dato['fechaImg6'];
    $blogtitulo = $dato['blogtitulo'];
    $descBlog = $dato['descBlog'];
    $imgBlog1 = $dato['imgBlog1'];
    $imgBlog2 = $dato['imgBlog2'];
    $imgBlog3 = $dato['imgBlog3'];
    $tituloBlog1 = $dato['tituloBlog1'];
    $tituloBlog2 = $dato['tituloBlog2'];
    $tituloBlog3 = $dato['tituloBlog3'];
    $descBlog1 = $dato['descBlog1'];
    $descBlog2 = $dato['descBlog2'];
    $descBlog3 = $dato['descBlog3'];
    $subTget = $dato['subTget'];
    $desGet = $dato['desGet'];
    $direccion = $dato['direccion'];
    $face = $dato['face'];
    $ins = $dato['ins'];
    $what = $dato['what'];
    $twitter = $dato['twitter'];
  }

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $tituloEnc; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
        left: 0px;
        top: 400px;
        bottom: 10x;
        right: 0px;
        position: fixed;
      }
    </style>


  </head>

  <body>



    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="#"><?= $tituloEnc; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url('img/<?php echo $id . "/" . $imgEnc; ?>')">
      <div class="overlay-itro"></div>
      <div class="hero-content display-table">
        <div class="table-cell">
          <div class="container">
            <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="hero-title mb-4"><?= $tituloNombre; ?></h1>
            <p class="hero-subtitle"><?= $tituloSubNom; ?></p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
          </div>
        </div>
      </div>
    </div><!-- End Hero Section -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-sm-6 col-md-5">
                        <div class="about-img">
                          <img src="<?= "img/$id/$imgPerfil"; ?>" class="img-fluid rounded b-shadow-a" alt="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-7">
                        <div class="about-info">
                          <p><span class="title-s">Name: </span> <span><?= $name; ?></span></p>
                          <p><span class="title-s">Profile: </span> <span><?= $profile; ?></span></p>
                          <p><span class="title-s">Email: </span> <span><?= $email; ?></span></p>
                          <p><span class="title-s">Phone: </span> <span><?= $celular; ?></span></p>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="about-me pt-4 pt-md-0">
                      <div class="title-box-2">
                        <h5 class="title-left"><?= $subTitu; ?></h5>
                      </div>
                      <p class="lead"><?= $descripcion1; ?></p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <!-- End Services Section -->

      <!-- ======= Counter Section ======= -->

      <!-- End Counter Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-box text-center">
                <h3 class="title-a"><?= $tituloPort; ?></h3>
                <p class="subtitle-a"><?= $descPorta; ?></p>
                <div class="line-mf"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= "img/$id/$imgP1"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?= "img/$id/$imgP1"; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $nomImg1; ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?= $fechaImg1; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="portfolio-details.html"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= "img/$id/$imgP2"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?= "img/$id/$imgP2"; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $nomImg2; ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?= $fechaImg2; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="portfolio-details.html"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= "img/$id/$imgP3"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?= "img/$id/$imgP3"; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $nomImg3; ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?= $fechaImg3; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="portfolio-details.html"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= "img/$id/$imgP4"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?= "img/$id/$imgP4"; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $nomImg4; ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?= $fechaImg4; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="portfolio-details.html"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= "img/$id/$imgP5"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?= "img/$id/$imgP5"; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $nomImg5; ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?= $fechaImg5; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="portfolio-details.html"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= "img/$id/$imgP6"; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?= "img/$id/$imgP6"; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $nomImg6; ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?= $fechaImg6; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="portfolio-details.html"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Testimonials Section ======= -->
      <!-- End Testimonials Section -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-box text-center">
                <h3 class="title-a"><?= $blogtitulo; ?></h3>
                <p class="subtitle-a"><?= $descBlog; ?></p>
                <div class="line-mf"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="#"><img src="<?= "img/$id/$imgBlog1"; ?>" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                  <h3 class="card-title"><a href="#"><?= $tituloBlog1; ?></a></h3>
                  <p class="card-description"><?= $descBlog1; ?></p>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="#"><img src="<?= "img/$id/$imgBlog2"; ?>" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                  <h3 class="card-title"><a href="#"><?= $tituloBlog2; ?></a></h3>
                  <p class="card-description"><?= $descBlog2; ?></p>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="#"><img src="<?= "img/$id/$imgBlog3"; ?>" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                  <h3 class="card-title"><a href="#"><?= $tituloBlog3; ?></a></h3>
                  <p class="card-description"><?= $descBlog3; ?></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section><!-- End Blog Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">

                    <div class="col-md-6">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left"><?= $subTget; ?></h5>
                      </div>
                      <div class="more-info">
                        <p class="lead"><?= $desGet; ?></p>
                        <ul class="list-ico">
                          <li><span class="bi bi-geo-alt"></span><?= $direccion; ?></li>
                          <li><span class="bi bi-phone"></span><?= $celular; ?></li>
                          <li><span class="bi bi-envelope"></span><?= $email; ?></li>
                        </ul>
                      </div>
                      <div class="socials">
                        <ul>
                          <li><a href="<?= $face; ?>"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                          <li><a href="<?= $ins; ?>"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                          <li><a href="<?= $twitter; ?>"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                          <li><a href="<?= $what; ?>"><span class="ico-circle"><i class="bi bi-whatsapp"></i></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>

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
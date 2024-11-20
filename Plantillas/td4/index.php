<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
  $id = 0;
}

$query = $link->query("SELECT * FROM planentrenador WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
  while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    $nombre = $dato['nombre'];
    $cargo = $dato['cargo'];
    $imgEncabezado = $dato['imgEncabezado'];
    $ints = $dato['ints'];
    $what = $dato['what'];
    $face = $dato['face'];
    $twitter = $dato['twitter'];
    $about1 = $dato['about1'];
    $descAbout = $dato['descAbout'];
    $imgPerfil = $dato['imgPerfil'];
    $subTituloA = $dato['subTituloA'];
    $descSub = $dato['descSub'];
    $birthday = $dato['birthday'];
    $phone = $dato['phone'];
    $city = $dato['city'];
    $age = $dato['age'];
    $degree = $dato['degree'];
    $email = $dato['email'];
    $descripcion2 = $dato['descripcion2'];
    $sumary = $dato['sumary'];
    $descripcion3 = $dato['descripcion3'];
    $nombreSumary = $dato['nombreSumary'];
    $descSumary = $dato['descSumary'];
    $nombreEscu = $dato['nombreEscu'];
    $descEducacion = $dato['descEducacion'];
    $nombreProf = $dato['nombreProf'];
    $descProfe = $dato['descProfe'];
    $nombreExp = $dato['nombreExp'];
    $descExpe = $dato['descExpe'];
    $portaFo = $dato['portaFo'];
    $descripcionPort = $dato['descripcionPort'];
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
    $tituloServi = $dato['tituloServi'];
    $descServ = $dato['descServ'];
    $loremIpsum = $dato['loremIpsum'];
    $descLorem = $dato['descLorem'];
    $sedPer = $dato['sedPer'];
    $descSed = $dato['descSed'];
    $magni = $dato['magni'];
    $descMagni = $dato['descMagni'];
    $localidad = $dato['localidad'];
  }

?>

  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Entrenador Personal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
        left: 0px;
        top: 600px;
        bottom: 10x;
        right: 0px;
        position: fixed;
      }

      #hero {
        width: 100%;
        height: 100vh;
        background: url('img/<?php echo $id . "/" . $imgEncabezado; ?>') top right no-repeat;
        background-size: cover;
        position: relative;
      }
    </style>


  </head>

  <body>





    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

      <nav id="navbar" class="navbar nav-menu">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre Mi</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resumen</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portafolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Servicios</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1><?= $nombre; ?></h1>
        <p><?= $cargo; ?></p>
        <div class="social-links">
          <a href="<?= $twitter; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="<?= $face; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?= $ints; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="<?= $what; ?>" class="linkedin"><i class="bx bxs-phone-call"></i></a>
        </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2><?= $about1; ?></h2>
            <p><?= $descAbout; ?></p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <img src="<?= "img/$id/$imgPerfil"; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3><?= $subTituloA; ?></h3>
              <p class="fst-italic"><?= $descSub; ?></p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Cumpleaños:</strong> <span><?= $birthday; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Telefono:</strong> <span><?= $phone; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span><?= $city; ?></span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Año:</strong> <span><?= $age; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Grado:</strong> <span><?= $degree; ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $email; ?></span></li>
                  </ul>
                </div>
              </div>
              <p><?= $descripcion2; ?></p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Facts Section ======= -->
      <!-- End Facts Section -->

      <!-- ======= Skills Section ======= -->
      <!-- End Skills Section -->

      <!-- ======= Resume Section ======= -->
      <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2><?= $sumary; ?></h2>
            <p><?= $descripcion3; ?></p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <h3 class="resume-title">Resumen:</h3>
              <div class="resume-item pb-0">
                <h4><?= $nombreSumary; ?></h4>
                <p><em><?= $descSumary; ?></em></p>

              </div>

              <h3 class="resume-title">Educación:</h3>
              <div class="resume-item">
                <h4><?= $nombreEscu; ?></h4>
                <p><?= $descEducacion; ?></p>
              </div>

            </div>
            <div class="col-lg-6">
              <h3 class="resume-title">Experiencia profesional</h3>
              <div class="resume-item">
                <h4><?= $nombreProf; ?></h4>
                <p><?= $descProfe; ?></p>

              </div>
              <div class="resume-item">
                <h4><?= $nombreExp; ?></h4>
                <p><?= $descExpe; ?></p>

              </div>
            </div>
          </div>

        </div>
      </section><!-- End Resume Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2><?= $portaFo; ?></h2>
            <p><?= $descripcionPort; ?></p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active"><?= $all1; ?></li>
                <li data-filter=".filter-app"><?= $app1; ?></li>
                <li data-filter=".filter-card"><?= $card1; ?></li>
                <li data-filter=".filter-web"><?= $web1; ?></li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img1"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img2"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img3"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img4"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img5"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img6"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img7"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img8"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= "img/$id/$img9"; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2><?= $tituloServi; ?></h2>
            <p><?= $descServ; ?></p>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="#">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bx bxl-dribbble"></i>
                </div>
                <h4><?= $loremIpsum; ?></h4>
                <p><?= $descLorem; ?></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="#">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><?= $sedPer; ?></h4>
                <p><?= $descSed; ?></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="#">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                  </svg>
                  <i class="bx bx-layer"></i>
                </div>
                <h4><?= $magni; ?></h4>
                <p><?= $descMagni; ?></p>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Testimonials Section ======= -->
      <!-- End Testimonials Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Contacto</h2>
          </div>

          <div class="row mt-1">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localidad:</h4>
                  <p><?= $localidad; ?></p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><?= $email; ?></p>
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
          &copy; Copyright 2024<strong></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
          Diseñado Por:<a href="https://netrabbit.online/"> Netrabbit</a>
        </div>
      </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
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
<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
  $id = 0;
}

$query = $link->query("SELECT * FROM planfrelanser WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
  while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    $title = $dato['title'];
    $imgPerfil = $dato['imgPerfil'];
    $imgEncabezado = $dato['imgEncabezado'];
    $imgLogo = $dato['imgLogo'];
    $color1 = $dato['color1'];
    $nombre = $dato['nombre'];
    $color2 = $dato['color2'];
    $cargo = $dato['cargo'];
    $slogan = $dato['slogan'];
    // $facebook = $dato['facebook'];
    if ($dato['facebook'] == "") {
      $facebook = "";
    } else {
      $facebook = ' <li><a href="' . $dato['facebook'] . '">< class="fa fa-facebook fa-stack-1x fa-inverse"></i></a></li>';
    }
    // $githup = $dato['githup'];
    if ($dato['githup'] == "") {
      $githup = "";
    } else {
      $githup = ' <li><a href="' . $dato['githup'] . '"><i class="fa fa-github fa-stack-1x fa-inverse"></i></a></li>';
    }

    //  <li><a href="#"><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a></li>
    // <li><a href="#"><i class="fa fa-github fa-stack-1x fa-inverse"></i></li>

    $color3 = $dato['color3'];
    $titulo1 = $dato['titulo1'];
    $colo4Titulo = $dato['colo4Titulo'];
    $punTitulo1 = $dato['punTitulo1'];
    $punTitulo2 = $dato['punTitulo2'];
    $punTitulo3 = $dato['punTitulo3'];
    $punTitulo4 = $dato['punTitulo4'];
    $color5Desc = $dato['color5Desc'];
    $punDesc1 = $dato['punDesc1'];
    $punDesc2 = $dato['punDesc2'];
    $punDesc3 = $dato['punDesc3'];
    $punDesc4 = $dato['punDesc4'];
    $color6Por = $dato['color6Por'];
    $tituliPort = $dato['tituliPort'];
    $imgDiseño1 = $dato['imgDiseño1'];
    $imgDiseño2 = $dato['imgDiseño2'];
    $imgDiseño3 = $dato['imgDiseño3'];
    $imgWeb1 = $dato['imgWeb1'];
    $imgWeb2 = $dato['imgWeb2'];
    $imgWeb3 = $dato['imgWeb3'];
    $imgApp1 = $dato['imgApp1'];
    $imgApp2 = $dato['imgApp2'];
    $imgApp3 = $dato['imgApp3'];
    $color7TP = $dato['color7TP'];
    $tituloPrem = $dato['tituloPrem'];
    $color8Date = $dato['color8Date'];
    $fecha1 = $dato['fecha1'];
    $fecha2 = $dato['fecha2'];
    $tituloP1 = $dato['tituloP1'];
    $tituloP2 = $dato['tituloP2'];
    $color9Desc = $dato['color9Desc'];
    $descP1 = $dato['descP1'];
    $descP2 = $dato['descP2'];
    $color10Con = $dato['color10Con'];
    $contacto = $dato['contacto'];
    $color11Con = $dato['color11Con'];
    $desCon = $dato['desCon'];
    $color12 = $dato['color12'];
    $direccion = $dato['direccion'];
    $telefono = $dato['telefono'];
    $email = $dato['email'];
  }

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/favicon.ico">
    <title><?= $title; ?></title>

    <!-- Global stylesheets -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
        left: 268px;
        top: 650px;
        bottom: 10x;
        right: 0px;
        position: fixed;
      }
    </style>
    <style>
      #about {
        background-image: url('img/<?php echo $id . "/" . $imgEncabezado; ?>');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
      }

      .mb-0 {
        color: <?= $color1 ?> !important;
      }
    </style>
    <style>
      .my-auto,
      subheading,
      p {
        color: <?= $color2 ?> !important;
      }

      /* .col-12 {
        color: <?= $color3 ?>;
      } */

      .my-auto,
      h4 {
        color: <?= $colo4Titulo ?> !important;
      }

      .resume-content,
      p {
        color: <?= $color5Desc ?>;
      }

      .colortexto {
        color: <?= $color6Por ?>;
      }

      /* .my-auto,
      h2 {
        color: <?= $color7TP ?>;
      } */

      .award-content,
      date,
      h5 {
        color: <?= $color8Date ?> !important;
      }

      .award-content,
      p {
        color: <?= $color9Desc ?> !important;
      }

      .contact-cont,
      h3 {
        color: <?= $color10Con ?>;
      }

      .contact-cont,
      p {
        color: <?= $color11Con ?>;
      }

      .contact-cont2,
      p {
        color: <?= $color12 ?>;
      }
    </style>

  </head>

  <body id="page-top">





    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">

        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= "img/$id/$imgPerfil" ?>" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experiencia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Certificaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <!--====================================================
                        ABOUT
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img src="<?= "img/$id/$imgLogo" ?>" class="img-fluid mb-3" alt="">
          <h1 class="mb-0"><?= $nombre; ?>
          </h1>
          <div class="subheading mb-5"><?= $cargo; ?>
          </div>
          <p class="mb-5" style="max-width: 500px;"><?= $slogan; ?></p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <?= $facebook; ?>
                  <!-- <i class="fa fa-facebook fa-stack-1x fa-inverse"></i> -->
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <?= $githup; ?>
                  <!-- <i class="fa fa-github fa-stack-1x fa-inverse"></i> -->
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <!--====================================================
                        EXPERIENCE
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 " id="experience">
        <div class="row my-auto">
          <div class="col-12">
            <h2 class="  text-center"><?= $titulo1; ?></h2>
            <div class="mb-5 heading-border"></div>
          </div>
          <div class="resume-item col-md-6 col-sm-12 ">
            <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class=" resume-content mr-auto">
                <h4 class="mb-3"> <?= $punTitulo1; ?></h4>
                <p><?= $punDesc1; ?></p>
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                <h4 class="mb-3"> <?= $punTitulo2; ?></h4>
                <p><?= $punDesc2; ?></p>
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #28a745; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                <h4 class="mb-3"> <?= $punTitulo3; ?></h4>
                <p><?= $punDesc3; ?></p>
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #2196f3; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                <h4 class="mb-3"> <?= $punTitulo4; ?></h4>
                <p><?= $punDesc4; ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--====================================================
                        PORTFOLIO
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
        <div class="row my-auto">
          <div class="col-12">
            <h2 class="  text-center colortexto"><?= $tituliPort; ?></h2>
            <div class="mb-5 heading-border"></div>
          </div>
          <div class="col-md-12">
            <div class="port-head-cont">
              <button class="btn btn-general btn-green filter-b" data-filter="all">0</button>
              <button class="btn btn-general btn-green filter-b" data-filter="consulting">1</button>
              <button class="btn btn-general btn-green filter-b" data-filter="finance">2</button>
              <button class="btn btn-general btn-green filter-b" data-filter="marketing">3</button>
            </div>
          </div>
        </div>
        <div class="row my-auto">
          <div class="col-sm-4 portfolio-item filter finance">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgDiseño1"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter marketing">
            <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgDiseño2"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter consulting">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgDiseño3"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter consulting">
            <a class="portfolio-link" href="#portfolioModal7" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgWeb1"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter consulting">
            <a class="portfolio-link" href="#portfolioModal8" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgWeb2"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter finance">
            <a class="portfolio-link" href="#portfolioModal9" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgWeb3"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter marketing">
            <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgApp1"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter marketing">
            <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgApp2"; ?>" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item filter finance">
            <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption-port">
                <div class="caption-port-content">

                </div>
              </div>
              <img class="img-fluid" src="<?= "img/$id/$imgApp3"; ?>" alt="">
            </a>
          </div>
        </div>
      </section>

      <!--====================================================
                        SKILLS
    ======================================================-->


      <!--====================================================
                           AWARDS
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="row my-auto">
          <div class="col-12">
            <h2 class="  text-center"><?= $tituloPrem; ?></h2>
            <div class="mb-5 heading-border"></div>
          </div>
          <div class="main-award" id="award-box">
            <div class="award">
              <div class="award-icon"></div>
              <div class="award-content">
                <span class="date"><?= $fecha1; ?></span>
                <h5 class="title"><?= $tituloP1; ?></h5>
                <p class="description">
                  <?= $descP1; ?>
                </p>
              </div>
            </div>
            <div class="award">
              <div class="award-icon"></div>
              <div class="award-content">
                <span class="date"><?= $fecha2; ?></span>
                <h5 class="title"><?= $tituloP2; ?></h5>
                <p class="description">
                  <?= $descP2; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--====================================================
                          CONTACT
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column">
        <div class="row my-auto" id="contact">
          <div class="col-md-8">
            <div class="contact-cont">
              <h3><?= $contacto; ?></h3>
              <div class="heading-border-light"></div>
              <p><?= $desCon; ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mt-5">
            <div class="contact-cont2">
              <div class="contact-add contact-box-desc">
                <h3><i class="fa fa-map-marker cl-atlantis fa-2x"></i> Dirección:</h3>
                <p><?= $direccion; ?></p>
              </div>
              <div class="contact-phone contact-side-desc contact-box-desc">
                <h3><i class="fa fa-phone cl-atlantis fa-2x"></i> Contácto:</h3>
                <p><?= $telefono; ?></p>
              </div>
              <div class="contact-mail contact-side-desc contact-box-desc">
                <h3><i class="fa fa-envelope-o cl-atlantis fa-2x"></i> Email:</h3>
                <address class="address-details-f">
                  <a href="mailto:info@themsbit.com" class=""><?= $email; ?></a>
                </address>
              </div>
            </div>
          </div>
        </div>
      </section>




    </div>

    <!--====================================================
                    PORTFOLIO MODALS
======================================================-->


    <!-- Global javascript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
      $(document).ready(function() {

        $(".filter-b").click(function() {
          var value = $(this).attr('data-filter');
          if (value == "all") {
            $('.filter').show('1000');
          } else {
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');
          }
        });

        if ($(".filter-b").removeClass("active")) {
          $(this).removeClass("active");
        }
        $(this).addClass("active");
      });

      // SKILLS
      $(function() {
        $('.counter').counterUp({
          delay: 10,
          time: 2000
        });

      });
    </script>
  </body>

  </html>
<?php
}
?>
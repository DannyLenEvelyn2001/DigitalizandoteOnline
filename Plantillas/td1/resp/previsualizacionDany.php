<?php
error_reporting(0);
include("../../conexion/conexion.php");

$id = $_REQUEST['id'];
if (empty($id)) {
    $id = 0;
}

$query = $link->query("SELECT * FROM plandiseno WHERE id = $id AND activo = 1");

while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    $logo = $dato['logo'];
    $imgEncabezado = $dato['imgEncabezado'];
    $imgContenido = $dato['imgContenido'];
    $c1img = $dato['c1img'];
    $c2img = $dato['c2img'];
    $c3img = $dato['c3img'];
    $c1img2 = $dato['c1img2'];
    $c2img2 = $dato['c2img2'];
    $c3img2 = $dato['c3img2'];
    $imgc1 = $dato['imgc1'];
    $imgc2 = $dato['imgc2'];
    $imgc3 = $dato['imgc3'];
}
if (empty($imgContenido) || $imgContenido == "") {
    $imgContenido = "assets/img/home-bg.jpg";
} else {
    $imgContenido = "img/$id/$imgContenido";
}
if (empty($imgContenido) || $imgContenido == "") {
    $imgContenido = "assets/img/me.jpg";
} else {
    $imgContenido = "img/$id/$imgContenido";
}
if (empty($c1img) || $c1img == "") {
    $c1img = "assets/img/portfolio/portfolio-1.jpg";
} else {
    $c1img = "img/$id/$c1img";
}
if (empty($c2img) || $c2img == "") {
    $c2img = "assets/img/portfolio/portfolio-1.jpg";
} else {
    $c2img = "img/$id/$c2img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-2.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-2.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-3.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-3.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-4.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-4.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-5.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($gal6) || $gal6 == "") {
    $gal6 = "assets/img/portfolio/portfolio-5.jpg";
} else {
    $gal6 = "img/$id/$gal6";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-6.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/portfolio/portfolio-6.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/blog-post-1.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/blog-post-2.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
if (empty($c3img) || $c3img == "") {
    $c3img = "assets/img/blog-post-3.jpg";
} else {
    $c3img = "img/$id/$c3img";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portafolio Joaquin Parker</title>
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
    </style>

</head>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo"><img id="logo" src="<?php echo $logo; ?>" alt="" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero" id="home1">Home</a></li>
                <li><a class="nav-link scrollto" href="#about" id="about">About</a></li>
                <li><a class="nav-link  scrollto" href="#portfolio" id="portafolio">Portfolio</a></li>
                <li><a class="nav-link  scrollto" href="#journal" id="blog">Blog</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- favicons
	================================================== -->
<?php if (!empty($id)) { ?>
    <link rel="shortcut icon" href="<?php echo "img/$id/$logo" ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo "img/$id/$logo" ?>" type="image/x-icon">
<?php } else { ?>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
<?php } ?>

<style>
    .colorTSN {
        color: #07617d;
    }

    .colorCSN {
        color: #2e383f;
    }

    .colorPSS {
        color: #FFFF;
    }

    header .header-logo a {
        background: unset;
        background-size: unset;
    }

    <?php if (!empty($id)) { ?>#home {
        background-image: url(<?php echo "img/$id/$imgEncabezado" ?>);
        background-repeat: no-repeat;
    }

    #services {
        background-image: url(<?php echo "img/$id/$imgContenido" ?>);
        background-repeat: no-repeat;
    }

    #hero {
        background: url('img/<?php echo $id . "/" . $imgEncabezado; ?>') repeat scroll center center/cover;
        height: 100vh;
        width: 100%;
    }

    <?php  }  ?>
</style>

</head>

<body id="top">

    <!-- header
   ================================================== -->
    <header>

        <div class="header-logo">
            <?php if (!empty($id)) { ?>
                <a href="index.html"><img id="logo" src="<?php echo "img/$id/$logo" ?>" alt="Logo" width="57px"></a>
            <?php } else { ?>
                <a href="index.html"><img id="logo" src="assets/img/logo.png" alt="Logo" width="57px"></a>
            <?php } ?>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero" id="home1">Home</a></li>
                <li><a class="nav-link scrollto" href="#about" id="about">About</a></li>
                <li><a class="nav-link  scrollto" href="#portfolio" id="portafolio">Portfolio</a></li>
                <li><a class="nav-link  scrollto" href="#journal" id="blog">Blog</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </header> <!-- end header -->


    <!-- home
   ================================================== -->
    <section id="home">

        <div class="overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1><span class="typed" data-typed-items="Soy Joaquin Parker, Diseñador, Programador, Freelancer, Fotografo" id="nombre"></span></h1>
                <p id="descripcion1">Diseñador, Programador, Freelancer, Fotografo</p>

                <ul class="home-social-list">
                    <li class="animate-intro ">
                        <a href="#" id="whatsapp1"><i class="fa fa-whatsapp colorTP6"></i></a>
                    </li>
                    <li class="animate-intro">
                        <a href="#" id="facebook1"><i class="fa fa-facebook-square colorTP7"></i></a>
                    </li>
                    <li class="animate-intro">
                        <a href="#" id="instagram1"><i class="fa fa-instagram colorTP8"></i></a>
                    </li>
                    <li class="animate-intro">
                        <a href="#" id="twitter1"><i class="fa fa-twitter colorTP9"></i></a>
                    </li>
                    <li class="animate-intro">
                        <a href="#" id="youtube1"><i class="fa fa-youtube colorTP10"></i></a>
                    </li>
                </ul> <!-- end home-social-list -->
            </div>
        </div>
        </div><!-- End Hero -->

    </section> <!-- end home -->
    <section id="about">
        <!-- ======= About Section ======= -->
        <div id="about" class="paddsection">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-4 ">
                        <div class="div-img-bg">
                            <div class="about-img">
                                <img src="<?php echo $imgContenido; ?>" class="img-responsive" alt="me">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about-descr">

                            <p class="p-heading" id="descripcion2">im a ux /ui designer austin based who loves clean, simple & unique design. i also
                                enjoy crafting brand identities, icons, & ilustration work. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- End About Section -->
    </section>





    <!-- portfolio
   ================================================== -->
    <section id="services">
        <!-- ======= Services Section ======= -->
        <div id="services">
            <div class="container">

                <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-briefcase"></i>
                                <span id="cajaT1">UI/UX DESIGN</span>
                                <p class="separator" id="subCaja1">To an English person, it will seem like simplified English,told me what </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-card-checklist"></i>
                                <span id="cajaT2">BRAND IDENTITY</span>
                                <p class="separator" id="subCaja2">To an English person, it will seem like simplified English,told me what </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-bar-chart"></i>
                                <span id="cajaT3">WEB DESIGN</span>
                                <p class="separator" id="subCaja3">To an English person, it will seem like simplified English,told me what </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-binoculars"></i>
                                <span id="cajaT4">MOBILE APPS</span>
                                <p class="separator" id="subCaja4">To an English person, it will seem like simplified English,told me what </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-brightness-high"></i>
                                <span id="cajaT5">Analytics</span>
                                <p class="separator" id="subCaja5">To an English person, it will seem like simplified English,told me what </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-calendar4-week"></i>
                                <span id="cajaT6">PHOTOGRAPHY</span>
                                <p class="separator" id="subCaja6">To an English person, it will seem like simplified English,told me what </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </div><!-- End Services Section -->


    </section> <!-- end portfolio -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2 id="tituloPor">My Portfolio</h2>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active" id="all1">All</li>
                        <li data-filter=".filter-app" id="app1">App</li>
                        <li data-filter=".filter-card" id="card1">Card</li>
                        <li data-filter=".filter-web" id="web1">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo $c1img; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4 id="app1">App 1</h4>
                        <?php if (!empty($id)) { ?>
                            <a href="assets/img/portfolio/portfolio-1.jpg"><img id="c1img" src="<?php echo "img/$id/$c1img" ?>" alt="c1img" width="57px"></a>
                        <?php } else { ?>
                            <a href="portfolio-details.html"><img id="c1img" src="assets/img/portfolio/portfolio-1.jpg" alt="c1img" width="57px"></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo $c2img; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4 id="web1">web 1</h4>
                        <?php if (!empty($id)) { ?>
                            <a href="assets/img/portfolio/portfolio-2.jpg"><img id="c2img" src="<?php echo "img/$id/$c2img" ?>" alt="c2img" width="57px"></a>
                        <?php } else { ?>
                            <a href="portfolio-details.html"><img id="c2img" src="assets/img/portfolio/portfolio-2.jpg" alt="c2img" width="57px"></a>
                        <?php } ?>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo $c3img; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4 id="app1">app 2</h4>
                        <?php if (!empty($id)) { ?>
                            <a href="assets/img/portfolio/portfolio-3.jpg"><img id="c3img" src="<?php echo "img/$id/$c3img" ?>" alt="c3img" width="57px"></a>
                        <?php } else { ?>
                            <a href="portfolio-details.html"><img id="c3img" src="assets/img/portfolio/portfolio-3.jpg" alt="c3img" width="57px"></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?php echo $c1img2; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4 id="card1">Card 2</h4>
                        <?php if (!empty($id)) { ?>
                            <a href="assets/img/portfolio/portfolio-4.jpg"><img id="c1img2" src="<?php echo "img/$id/$c1img2" ?>" alt="c1img2" width="57px"></a>
                        <?php } else { ?>
                            <a href="portfolio-details.html"><img id="c1img2" src="assets/img/portfolio/portfolio-4.jpg" alt="c1img2" width="57px"></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo $c2img2; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4 id="web1">Web 2</h4>
                        <?php if (!empty($id)) { ?>
                            <a href="assets/img/portfolio/portfolio-5.jpg"><img id="c1img2" src="<?php echo "img/$id/$c2img2" ?>" alt="c2img2" width="57px"></a>
                        <?php } else { ?>
                            <a href="portfolio-details.html"><img id="c2img2" src="assets/img/portfolio/portfolio-5.jpg" alt="c2img2" width="57px"></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo $c3img2; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4 id="web1">App 3</h4>
                        <?php if (!empty($id)) { ?>
                            <a href="assets/img/portfolio/portfolio-6.jpg"><img id="c3img2" src="<?php echo "img/$id/$c3img2" ?>" alt="c3img2" width="57px"></a>
                        <?php } else { ?>
                            <a href="portfolio-details.html"><img id="c3img2" src="assets/img/portfolio/portfolio-6.jpg" alt="c3img2" width="57px"></a>
                        <?php } ?>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Portfolio Section -->


    <!-- ======= Journal Section ======= -->
    <section id="journal" class="text-left paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2 id="subTitulo">journal</h2>
            </div>
        </div>

        <div class="container">
            <div class="journal-block">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <?php if (!empty($id)) { ?>
                                <a href="blog-single.html"><img id="imgc1" src="<?php echo "img/$id/$imgc1" ?>" alt="imgc1" width="57px"></a>
                            <?php } ?>

                            <div class="journal-txt">

                                <h4><a href="blog-single.html" id="hiperImg1">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                                <p class="separator" id="separa1">To an English person, it will seem like simplified English
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <?php if (!empty($id)) { ?>
                                <a href="blog-single.html"><img id="imgc2" src="<?php echo "img/$id/$imgc2" ?>" alt="imgc2" width="57px"></a>
                            <?php } ?>

                            <div class="journal-txt">
                                <h4><a href="blog-single.html" id="hiperImg2">WE'RE GONA MAKE DREAMS COMES</a></h4>
                                <p class="separator" id="separa2">To an English person, it will seem like simplified English
                                </p>

                            </div>
                            <!-- <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>
                            <div class="journal-txt">
                                <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                                <p class="separator">To an English person, it will seem like simplified English
                                </p>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <?php if (!empty($id)) { ?>
                                <a href="blog-single.html"><img id="imgc3" src="<?php echo "img/$id/$imgc3" ?>" alt="imgc3" width="57px"></a>
                            <?php } ?>
                            <div class="journal-txt">

                                <h4><a href="blog-single.html" id="hiperImg3">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                                <p class="separator" id="separa3">To an English person, it will seem like simplified English
                                </p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section><!-- End Journal Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paddsection">
        <div class="container">
            <div class="contact-block1">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact-contact">

                            <h2 class="mb-30" id="get">GET IN TOUCH</h2>

                            <ul class="contact-details">
                                <li><span id="calle">23 Main, Street</span></li>
                                <li><span id="ciudad">New York, United States</span></li>
                                <li><span id="tel">+88 01912704287</span></li>
                                <li><span id="email">example@example.com</span></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- footer
   ================================================== -->
    <footer>
        <div class="footer-bottom">

            <div class="row">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright <a href="https://netrabbit.online/" target="_blank" id="copyright">Plantilla Diseño Web</a>. Todos los derechos reservados.</span>
                        Diseñado por <span id="disenado">Net Rabbit S.A. de C.V.</span>
                    </div>
                </div>

            </div>

        </div> <!-- end footer-bottom -->

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
            </a>
        </div>
    </footer>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
   ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <script>
        // Escuchar mensajes del formulario y actualizar la previsualización
        window.addEventListener('message', function(event) {
            var formData = event.data;
            if (formData.logo) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('logo').src = e.target.result;
                }
                reader.readAsDataURL(formData.logo);
            }

            document.getElementById('home1').textContent = formData.home1;
            document.getElementById('about').textContent = formData.about;
            document.getElementById('portafolio').textContent = formData.portafolio;
            document.getElementById('blog').textContent = formData.blog;
            if (formData.imgEncabezado) { // Actualizar imagen de Hero
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('home').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgEncabezado);
            }

            document.getElementById('nombre').textContent = formData.nombre;
            document.getElementById('descripcion1').textContent = formData.descripcion1;
            document.getElementById('whatsapp').href = formData.whatsapp;
            document.getElementById('whatsapp').href = "https://api.whatsapp.com/send?phone=52" + formData.whatsapp + "&text=" + formData.mensajewhats;
            document.getElementById('facebook').href = formData.facebook;
            document.getElementById('instagram').href = formData.instagram;
            document.getElementById('twitter').href = formData.twitter;
            if (formData.imgContenido) { // Actualizar imagen de Hero
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('services').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgContenido);
            }

            document.getElementById('descripcion2').textContent = formData.descripcion2;
            document.getElementById('cajaT1').textContent = formData.cajaT1;
            document.getElementById('cajaT2').textContent = formData.cajaT2;
            document.getElementById('cajaT3').textContent = formData.cajaT3;
            document.getElementById('cajaT4').textContent = formData.cajaT4;
            document.getElementById('cajaT5').textContent = formData.cajaT5;
            document.getElementById('cajaT6').textContent = formData.cajaT6;
            document.getElementById('subCaja1').textContent = formData.subCaja1;
            document.getElementById('subCaja2').textContent = formData.subCaja2;
            document.getElementById('subCaja3').textContent = formData.subCaja3;
            document.getElementById('subCaja4').textContent = formData.subCaja4;
            document.getElementById('subCaja5').textContent = formData.subCaja5;
            document.getElementById('subCaja6').textContent = formData.subCaja6;
            document.getElementById('tituloPor').textContent = formData.tituloPor;

            // 'tituloPor', 'c1img', 'c2img', 'c3img', 'c1img2', 'c2img2', 'c3img2', 'subTitulo', 'imgc1', 'imgc2', 'imgc3', 'hiperImg1', 'separa1', 'hiperImg2', 'separa2', 'hiperImg3', 'separa3', 'celular', 'all1', 'app1', 'card1', 'web1', 'get', 'calle', 'ciudad', 'tel', 'email', 'activo'

            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('c1img').src = e.target.result;
                }
                reader.readAsDataURL(formData.c1img);
            }
            var divItemWrap = document.getElementById('c1img-1');
            if (divItemWrap && formData.c1img) {
                var imageUrl = URL.createObjectURL(formData.c1img);
                divItemWrap.setAttribute('data-src', imageUrl);
            }

            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('c2img').src = e.target.result;
                }
                reader.readAsDataURL(formData.c2img);
            }
            var divItemWrap = document.getElementById('c2img-2');
            if (divItemWrap && formData.c2img) {
                var imageUrl = URL.createObjectURL(formData.c2img);
                divItemWrap.setAttribute('data-src', imageUrl);
            }

            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('c3img').src = e.target.result;
                }
                reader.readAsDataURL(formData.c3img);
            }
            var divItemWrap = document.getElementById('c3img-3');
            if (divItemWrap && formData.c3img) {
                var imageUrl = URL.createObjectURL(formData.c3img);
                divItemWrap.setAttribute('data-src', imageUrl);
            }

            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('c1img2').src = e.target.result;
                }
                reader.readAsDataURL(formData.c1img2);
            }
            var divItemWrap = document.getElementById('c1img2-4');
            if (divItemWrap && formData.c1img2) {
                var imageUrl = URL.createObjectURL(formData.c1img2);
                divItemWrap.setAttribute('data-src', imageUrl);
            }
            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('c2img2').src = e.target.result;
                }
                reader.readAsDataURL(formData.c2img2);
            }
            var divItemWrap = document.getElementById('c2img2-5');
            if (divItemWrap && formData.c2img2) {
                var imageUrl = URL.createObjectURL(formData.c2img2);
                divItemWrap.setAttribute('data-src', imageUrl);
            }
            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('c3img2').src = e.target.result;
                }
                reader.readAsDataURL(formData.c3img2);
            }
            var divItemWrap = document.getElementById('c3img2-6');
            if (divItemWrap && formData.c3img2) {
                var imageUrl = URL.createObjectURL(formData.c3img2);
                divItemWrap.setAttribute('data-src', imageUrl);
            }
            document.getElementById('subTitulo').textContent = formData.subTitulo;

            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgc1').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgc1);
            }
            var divItemWrap = document.getElementById('imgc1-6');
            if (divItemWrap && formData.imgc1) {
                var imageUrl = URL.createObjectURL(formData.imgc1);
                divItemWrap.setAttribute('data-src', imageUrl);
            }
            document.getElementById('hiperImg1-5').textContent = formData.hiperImg1;
            document.getElementById('separa1').textContent = formData.separa1;
            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgc2').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgc2);
            }
            var divItemWrap = document.getElementById('imgc2-6');
            if (divItemWrap && formData.imgc2) {
                var imageUrl = URL.createObjectURL(formData.imgc2);
                divItemWrap.setAttribute('data-src', imageUrl);
            }
            document.getElementById('hiperImg2-5').textContent = formData.hiperImg2;
            document.getElementById('separa2').textContent = formData.separa2;
            if (formData.c1img) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgc3').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgc3);
            }
            var divItemWrap = document.getElementById('imgc3-6');
            if (divItemWrap && formData.imgc3) {
                var imageUrl = URL.createObjectURL(formData.imgc3);
                divItemWrap.setAttribute('data-src', imageUrl);
            }
            document.getElementById('hiperImg3-5').textContent = formData.hiperImg3;
            document.getElementById('separa3').textContent = formData.separa3;

            //  'celular', 'all1', 'app1', 'card1', 'web1', 'get', 'calle', 'ciudad', 'tel', 'email', 'activo'
            document.getElementById('celular').textContent = formData.celular;
            document.getElementById('all1').textContent = formData.all1;
            document.getElementById('app1').textContent = formData.app1;
            document.getElementById('card1').textContent = formData.card1;
            document.getElementById('web1').textContent = formData.web1;
            document.getElementById('get').textContent = formData.get;
            document.getElementById('calle').textContent = formData.calle;
            document.getElementById('ciudad').textContent = formData.ciudad;
            document.getElementById('tel').textContent = formData.tel;
            document.getElementById('email').textContent = formData.email;
            document.getElementById('activo').textContent = formData.activo;

        });
    </script>

</body>

</html>
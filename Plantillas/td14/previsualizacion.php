<!DOCTYPE html>
<html>

<head>
    <title id="title">ESTILISTA, BARBERO O PELUQUERO</title>


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
            top: 550px;
            bottom: 10x;
            right: 0px;
            position: fixed;
        }
    </style>
    <style>
        .home {
            background: url("img/intro-bg-01.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .services {
            background: url("img/sec-bg-01.jpg");
            background-repeat: no-repeat;
            background-position: top right;
        }

        .sec-bg-02 {
            background: url("img/sec-bg-02.jpg");
            background-repeat: no-repeat;
            background-position: top left;
            background-size: cover;
        }

        .sec-bg-03 {
            background: url("img/sec-bg-03.jpg");
            background-repeat: no-repeat;
            background-position: top left;
            background-size: cover;
        }

        .sec-bg-04 {
            background: url("img/sec-bg-04.jpg");
            background-repeat: no-repeat;
            background-position: top left;
            background-size: cover;
        }
    </style>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<link rel="stylesheet" type="text/css" href="css/loaders.css" />
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">



<body>



    <!-- Page loading animation -->
    <div class="loader loader-bg">
        <div class="loader-inner ball-pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Top navigation -->
    <nav class="navbar navbar-expand-md fixed-top top-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><strong id="nomLogo" class="colorLogo">La Nabaja veloz</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto text-sm-center text-md-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">QUIEN SOY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">TESTIMONIOS</a>
                    </li>
                </ul>
            </div>
            <!--
		  <ul class="navbar-nav ml-auto search-box">
		    <li class="nav-item">
		      <a class="nav-link" href="#"><i class="fa fa-search text-white"></i></a>
		    </li>
		  </ul>
          
        -->
        </div>
    </nav>

    <!-- Intro Three -->
    <section id="home" class="intro intro-bg bg-overlay parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
                    <div class="intro-caption mt-5">
                        <h1 class="text-white mb-2 colorEnc" id="nombre">Jose Manuel Morales</h1>
                        <p class="text-white mb-4 colorEnc1" id="cargo"> ESTILISTA, BARBERO Y PELUQUERO PROFESIONAL </p>
                        <a class="btn btn-primary text-white mr-3 colorEnc2" id="telefono">Citas al 7221111111</a>

                    </div>
                </div>
            </div>
    </section>

    <!-- Info block 1 -->
    <section id="services" class="info-section text-white bg-right bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="head-box">
                        <h2 class="font-abril colorServ" id="servicios">Services We offered!</h2>
                    </div>
                    <div class="three-panel-block mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/scissors.png" class="img-fluid" id="imgServ1"></i>
                                    <h3 class="text-primary colorTserv" id="tituloSer1">Scissor Cut</h3>
                                    <p class="colorDeServ" id="descSer1">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/razor-1.png" class="img-fluid" id="imgServ2"></i>
                                    <h3 class="text-primary colorTserv1" id="tituloSer2">Razor Cut</h3>
                                    <p class="colorDeServ1" id="descSer2">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/brush.png" class="img-fluid" id="imgServ3"></i>
                                    <h3 class="text-primary colorTserv2" id="tituloSer3">Head Shave</h3>
                                    <p class="colorDeServ2" id="descSer3">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/hair-clip.png" class="img-fluid" id="imgServ4"></i>
                                    <h3 class="text-primary colorTserv3" id="tituloSer4">Clipper Cut</h3>
                                    <p class="colorDeServ3" id="descSer4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Content block 1 -->
    <section id="about" class="copy-content-sec sec-bg-02 h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 copy-container ml-auto">
                    <div class="copy-content pr-4">
                        <h2 class="font-abril text-primary colorWho" id="tituloWho">
                            Who We Are
                        </h2>
                        <p class="lead ml-2 colorDesc" id="descWho">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info block 2 -->



    <!-- Testimonial Block 01-->
    <section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-100">
        <div class="container">
            <div class="row">
                <div class="head-box text-center mb-3 col-md-12 mt-5">
                    <h2 class="font-abril colorComen" id="tituloComent">What Our Clients Says About Us</h2>
                </div>
            </div>
            <div class="single-testimonial">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner pt-5" role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial-box text-center">
                                <div class="testimonial-content w-100 bg-faded">
                                    <p class="mb-0"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i></p>
                                    <p class="lead font-abril colorC" id="descC1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="testimonial-footer">
                                        <h4 class="mt-2 mb-0 text-primary colorC1" id="nombreC1">Gerald Montgomery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-box text-center">
                                <div class="testimonial-content w-100 bg-faded">
                                    <p class="mb-0"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i></p>
                                    <p class="lead font-abril colorC2" id="descC2">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.</p>
                                    <div class="testimonial-footer">
                                        <h4 class="mt-2 mb-0 text-primary colorC3" id="nombreC2">Harper Robertson</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigator-box">
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">
                                << /span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Block -->


    <!-- footer Block -->




    <!-- Javascript Files  -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script async deffer type="text/javascript" src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
    <script src="js/gmap-custom.js"></script>
    <script src="js/core.js"></script>

    <script>
        // Escuchar mensajes del formulario y actualizar la previsualización
        window.addEventListener('message', function(event) {
            var formData = event.data;

            document.getElementById('title').textContent = formData.title;
            document.querySelector('.colorLogo').style.color = formData.colorLogo;
            document.getElementById('nomLogo').textContent = formData.nomLogo;
            document.querySelector('.colorEnc').style.color = formData.colorEnc;
            document.querySelector('.colorEnc1').style.color = formData.colorEnc;
            document.querySelector('.colorEnc2').style.color = formData.colorEnc;
            document.getElementById('nombre').textContent = formData.nombre;
            document.getElementById('cargo').textContent = formData.cargo;
            document.getElementById('telefono').textContent = formData.telefono;

            if (formData.imgEncabezado) { // Actualizar imagen de Hero
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('home').style.backgroundImage = 'url(' + e.target.result + ')';
                }
                reader.readAsDataURL(formData.imgEncabezado);
            }
            if (formData.imgEnc2) { // Actualizar imagen de Hero
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('services').style.backgroundImage = 'url(' + e.target.result + ')';
                }
                reader.readAsDataURL(formData.imgEnc2);
            }

            document.querySelector('.colorServ').style.color = formData.colorServ;
            document.getElementById('servicios').textContent = formData.servicios;
            if (formData.imgServ1) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgServ1').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgServ1);
            }
            if (formData.imgServ2) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgServ2').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgServ2);
            }
            if (formData.imgServ3) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgServ3').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgServ3);
            }
            if (formData.imgServ4) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgServ4').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgServ4);
            }

            document.querySelector('.colorTserv').style.color = formData.colorTserv;
            document.querySelector('.colorTserv1').style.color = formData.colorTserv;
            document.querySelector('.colorTserv2').style.color = formData.colorTserv;
            document.querySelector('.colorTserv3').style.color = formData.colorTserv;
            document.getElementById('tituloSer1').textContent = formData.tituloSer1;
            document.getElementById('tituloSer2').textContent = formData.tituloSer2;
            document.getElementById('tituloSer3').textContent = formData.tituloSer3;
            document.getElementById('tituloSer4').textContent = formData.tituloSer4;
            document.querySelector('.colorDeServ').style.color = formData.colorDeServ;
            document.querySelector('.colorDeServ1').style.color = formData.colorDeServ;
            document.querySelector('.colorDeServ2').style.color = formData.colorDeServ;
            document.querySelector('.colorDeServ3').style.color = formData.colorDeServ;
            document.getElementById('descSer1').textContent = formData.descSer1;
            document.getElementById('descSer2').textContent = formData.descSer2;
            document.getElementById('descSer3').textContent = formData.descSer3;
            document.getElementById('descSer4').textContent = formData.descSer4;

            if (formData.img3Perfil) { // Actualizar imagen de Hero
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('about').style.backgroundImage = 'url(' + e.target.result + ')';
                }
                reader.readAsDataURL(formData.img3Perfil);
            }

            document.querySelector('.colorWho').style.color = formData.colorWho;
            document.getElementById('tituloWho').textContent = formData.tituloWho;
            document.querySelector('.colorDesc').style.color = formData.colorDesc;
            document.getElementById('descWho').textContent = formData.descWho;



            document.querySelector('.colorComen').style.color = formData.colorComen;
            document.getElementById('tituloComent').textContent = formData.tituloComent;

            document.querySelector('.colorC').style.color = formData.colorC;
            document.querySelector('.colorC1').style.color = formData.colorC;
            document.querySelector('.colorC2').style.color = formData.colorC;
            document.querySelector('.colorC3').style.color = formData.colorC;
            document.getElementById('descC1').textContent = formData.descC1;
            document.getElementById('descC2').textContent = formData.descC2;
            document.getElementById('nombreC1').textContent = formData.nombreC1;
            document.getElementById('nombreC2').textContent = formData.nombreC2;

            // document.getElementById('subCaja1').textContent = formData.subCaja1;



            // document.getElementById('hv5').textContent = formData.hv5;
        });
    </script>

</body>

</html>
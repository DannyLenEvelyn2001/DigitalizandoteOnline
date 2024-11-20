<!-- =======================================================
* digitalizandote.digital
* Plantilla Tarjeta Digital  1
* Author: BootstrapMade.com
* Integrador : NetRabbit, S.A. de C.V.
* Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
* Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
======================================================== -->

<!DOCTYPE HTML>
<html>

<head>
    <title>Mi Negocio</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom  files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
    <!----//webfonts---->

    <style type="text/css">
        #Layer1 {
            position: absolute;
            width: 41px;
            height: 39px;
            z-index: 100;
            left: 0px;
            top: 200px;
            bottom: 10x;
            right: 0px;
            position: fixed;
        }

        #contact {
            background: url(../images/contact-bg.jpg) no-repeat 0px 0px;

        }

        .top-bannar {
            background: url(../images/bg.jpg) no-repeat 0px 0px;

        }
    </style>
</head>

<body>




    <!----wrap---->
    <div class="top-bannar" id="move-top">
        <div class="container">
            <div class="top-header row">
                <!---logo--->
                <div id="sb-search" class="sb-search">
                    <form>
                        <input type="text" class="sb-search-input" id="search" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
                <script src="js/classie.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch(document.getElementById('sb-search'));
                </script>
                <!---//logo--->
                <!--top-nav---->
                <div class="top-nav">
                    <div class="nav-icon">
                        <a href="#" class="right_bt" id="activator"><span> </span> </a>
                    </div>
                    <div class="box" id="box">
                        <div class="box_content">
                            <div class="box_content_center">
                                <div class="form_content">
                                    <div class="menu_box_list">
                                        <ul>
                                            <li><a href="#home"><span>Inicio</span></a></li>
                                            <li><a href="#works"><span>Servicio</span></a></li>
                                            <li><a href="#gallery"><span>Menú</span></a></li>
                                            <li><a href="#testimonials"><span>Platillos</span></a></li>
                                            <div class="clearfix"> </div>
                                        </ul>
                                    </div>
                                    <a class="boxclose" id="boxclose"> <span> </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---start-click-drop-down-menu----->
                <!----start-dropdown--->
                <script type="text/javascript">
                    var $ = jQuery.noConflict();
                    $(function() {
                        $('#activator').click(function() {
                            $('#box').animate({
                                'top': '0px'
                            }, 900);
                        });
                        $('#boxclose').click(function() {
                            $('#box').animate({
                                'top': '-1000px'
                            }, 900);
                        });
                    });
                    $(document).ready(function() {
                        //Hide (Collapse) the toggle containers on load
                        $(".toggle_container").hide();
                        //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
                        $(".trigger").click(function() {
                            $(this).toggleClass("active").next().slideToggle("slow");
                            return false; //Prevent the browser jump to the link anchor
                        });

                    });
                </script>
                <!---//End-click-drop-down-menu----->
                <!--top-nav---->
                <div class="clear"> </div>
                <!---header-welcomenote--->
                <div class="col-md-12 header-welcome-note">
                    <div class=" col-md-6 welcome-note-left">
                        <span class="divice12"><img src="images/divice.png" alt="" id="imgFrontal" /></span>
                        <h1 class="colortitulo" id="negocio">BurgerSota</h1>
                        <h2 style="color:white;" class="colorEncabezado" id="nombre">Propietario Ruben Garcia.</h2>
                        <h3 style="color:white;" class="colorEncabezado1" id="celular">5512345678.</h3>
                    </div>
                    <div class="col-md-6 welcome-note-right">
                        <img src="images/divice.png" alt="" id="imgFrontal1" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!---//header-welcomenote--->
            </div>
        </div>
    </div>
    <!---start-content--->
    <div class=" features" id="features">
        <div class=" row superb-feature">
            <h2 class="colorT1" id="titulo1">Check out the superb features</h2>
            <p class="colorT12" id="descChech">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
        </div>
    </div>
    <div class="works" id="works">
        <!----start-works---->
        <div class="content_top">
            <div class="container">
                <div class="row content_main">
                    <div class="app_img col-md-5">
                        <img src="images/black-phone.png" alt="" id="imgSub1">
                    </div>
                    <div class="app_desc img col-md-7">
                        <h3 class="colorSubtitulo" id="subTitulo1">Login page with social signups</h3>
                        <p class="colorDesc" id="descSub1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="content_bottom">
            <div class="container ">
                <div class=" row devices- main">
                    <div class=" col-md-7 devices_desc">
                        <h3 class="colorSubtitulo2" id="subTitulo2">Todays' menus</h3>
                        <p class="colorDesc2" id="descSub2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="col-md-5 devices">
                        <img src="images/black-phone2.png" alt="" id="imgSub2">
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---start-our story----->
    <div class="gellery" id="gallery">
        <div class="our-story">
            <p class="color2" id="titulo2">Check out</p>
            <h4 class="color22" id="descripcionTitulo2">App Gallery</h4>
        </div>
        <div class="group_2" id="Portfolio">
            <div class="group_2_items">
                <div class="container">
                    <div id="owl-demo1" class="owl-carousel">

                        <div class="item">
                            <div class="carousel">
                                <div class="group_2_img1">
                                    <img src="images/slider.png" alt="" id="img1">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel">
                                <div class="group_2_img1">
                                    <img src="images/slider.png" alt="" id="img2">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel">
                                <div class="group_2_img1">
                                    <img src="images/slider.png" alt="" id="img3">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel">
                                <div class="group_2_img1">
                                    <img src="images/slider.png" alt="" id="img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <!-- Prettify -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: true,
                scrollPerPage: true,
                pagination: true,
                paginationNumbers: false,
            });

        });
        $(document).ready(function() {

            $("#owl-demo1").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: true,
                scrollPerPage: true,
                pagination: false,
                paginationNumbers: false,
            });

        });
    </script>
    <!--start-testimonials-->
    <!---/start-text-slider----->
    <div class="testimonials" id="testimonials">
        <div class="wmuSlider example1">
            <div class="container-flueid">
                <article style="position: absolute; width:64%; opacity: 0;">

                    <div class=" cont span_2_of_3 client-main">
                        <div class="client">
                            <img src="images/client.png" alt="" id="imgP1">
                        </div>
                        <div class="client-des">
                            <h4 class="color3" id="perfil1">Alif noor</h4>
                            <p class="color4" id="descripcion1">Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500..</p>
                            <span> </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>
                <article style="position: absolute; width:64%; opacity: 0;">
                    <div class=" cont span_2_of_3  client-main">
                        <div class="client">
                            <img src="images/client3.jpg" alt="" id="imgP2">
                        </div>
                        <div class="client-des">
                            <h4 class="color32" id="perfil2">Alif noor</h4>
                            <p class="color42" id="descripcion2">Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500.</p>
                            <span> </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>
                <article style="position: absolute; width:64%; opacity: 0;">
                    <div class="cont span_2_of_3  client-main">
                        <div class="client">
                            <img src="images/client2.jpg" alt="" id="imgP3">
                        </div>
                        <div class="client-des">
                            <h4 class="color33" id="perfil3">Alif noor</h4>
                            <p class="color43" id="descripcion3">Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500.</p>
                            <span> </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>

                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>
    </div>
    <!---//text-slider----->
    <!-- //end-testimonials-->
    <!---/contact----->
    <div class="contact" id="contact">
        <div class=" row newsletter">
            <div class="col-md-6 newsletter-left">
                <h5 class="color5" id="tituloNavar"> Sign upto our Newsletter</h5>
                <p class="color52" id="descNavar"> stay par with our News and updates</p>
            </div>
            <div class="col-md-6 newsletter-right">

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!---//contact----->
    <!-- /footer-->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-main">

                <div class="clearfix"> </div>
            </div>
            <div class="social-icons">
                <ul class="top-social-icons" list-unstyled>
                    <li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#" id="facebook"> </a></li>
                    <li> <a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#" id="twitter"> </a></li>
                    <li> <a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#" id="pinteres"> </a> </li>
                    <li> <a class="youtube simptip-position-bottom simptip-movable" data-tooltip="Youtube" href="#" id="youtube"> </a> </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="credits">Copyright &copy;2024 <a href="https://netrabbit.online/">Net Rabbit S.A. de C.V.</a> Todos los derechos reservados.</div>
        </div>
    </div>
    <!-- //footer-->
    <a href="#move-top" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
    <!---smoth-scrlling---->
    <script type="text/javascript">
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = this.hash,
                    $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 1000, 'swing', function() {
                    window.location.hash = target;
                });
            });
        });
    </script>
    <!---//smoth-scrlling---->
    <script>
        // Escuchar mensajes del formulario y actualizar la previsualización
        window.addEventListener('message', function(event) {
            var formData = event.data;
            document.querySelector('.colortitulo').style.color = formData.colortitulo;
            document.getElementById('negocio').textContent = formData.negocio;
            document.querySelector('.colorEncabezado').style.color = formData.colorEncabezado;
            document.querySelector('.colorEncabezado1').style.color = formData.colorEncabezado;
            document.getElementById('nombre').textContent = formData.nombre;
            document.getElementById('celular').textContent = formData.celular;
            if (formData.imgFondo) { // Actualizar imagen de Hero
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('move-top').style.backgroundImage = 'url(' + e.target.result + ')';
                }
                reader.readAsDataURL(formData.imgFondo);
            }
            if (formData.imgFrontal) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgFrontal').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgFrontal);
            }
            if (formData.imgFrontal) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgFrontal1').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgFrontal);
            }
            document.querySelector('.colorT1').style.color = formData.colorT1;
            document.querySelector('.colorT12').style.color = formData.colorT1;
            document.getElementById('titulo1').textContent = formData.titulo1;
            document.getElementById('descChech').textContent = formData.descChech;
            document.querySelector('.colorSubtitulo').style.color = formData.colorSubtitulo;
            document.querySelector('.colorSubtitulo2').style.color = formData.colorSubtitulo;
            document.querySelector('.colorDesc').style.color = formData.colorDesc;
            document.querySelector('.colorDesc2').style.color = formData.colorDesc;
            document.getElementById('subTitulo1').textContent = formData.subTitulo1;
            document.getElementById('descSub1').textContent = formData.descSub1;
            if (formData.imgSub1) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgSub1').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgSub1);
            }
            document.getElementById('subTitulo2').textContent = formData.subTitulo2;
            document.getElementById('descSub2').textContent = formData.descSub2;
            if (formData.imgSub2) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgSub2').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgSub2);
            }
            document.querySelector('.color2').style.color = formData.color2;
            document.querySelector('.color22').style.color = formData.color2;
            document.getElementById('titulo2').textContent = formData.titulo2;
            document.getElementById('descripcionTitulo2').textContent = formData.descripcionTitulo2;
            if (formData.img1) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('img1').src = e.target.result;
                }
                reader.readAsDataURL(formData.img1);
            }
            if (formData.img2) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('img2').src = e.target.result;
                }
                reader.readAsDataURL(formData.img2);
            }
            if (formData.img3) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('img3').src = e.target.result;
                }
                reader.readAsDataURL(formData.img3);
            }
            if (formData.img4) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('img4').src = e.target.result;
                }
                reader.readAsDataURL(formData.img4);
            }
            document.querySelector('.color3').style.color = formData.color3;
            document.querySelector('.color32').style.color = formData.color3;
            document.querySelector('.color33').style.color = formData.color3;
            document.getElementById('perfil1').textContent = formData.perfil1;
            if (formData.imgP1) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgP1').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgP1);
            }
            document.querySelector('.color4').style.color = formData.color4;
            document.querySelector('.color42').style.color = formData.color4;
            document.querySelector('.color43').style.color = formData.color4;
            document.getElementById('descripcion1').textContent = formData.descripcion1;
            document.getElementById('perfil2').textContent = formData.perfil2;
            if (formData.imgP2) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgP2').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgP2);
            }
            document.getElementById('descripcion2').textContent = formData.descripcion2;
            document.getElementById('perfil3').textContent = formData.perfil3;
            if (formData.imgP3) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imgP3').src = e.target.result;
                }
                reader.readAsDataURL(formData.imgP3);
            }
            document.getElementById('descripcion3').textContent = formData.descripcion3;
            document.querySelector('.color5').style.color = formData.color5;
            document.querySelector('.color52').style.color = formData.color5;
            document.getElementById('tituloNavar').textContent = formData.tituloNavar;
            document.getElementById('descNavar').textContent = formData.descNavar;
            if (formData.imgFondo) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('contact').style.backgroundImage = 'url(' + e.target.result + ')';
                }
                reader.readAsDataURL(formData.imgFondo);
            }
            document.getElementById('facebook').href = formData.facebook;
            document.getElementById('twitter').href = formData.twitter;
            document.getElementById('pinteres').href = formData.pinteres;
            document.getElementById('youtube').href = formData.youtube;




            // document.getElementById('hv5').textContent = formData.hv5;
        });
    </script>

</body>

</html>
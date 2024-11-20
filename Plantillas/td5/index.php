<!-- =======================================================
* digitalizandote.digital
* Plantilla Tarjeta Digital  1
* Author: BootstrapMade.com
* Integrador : NetRabbit, S.A. de C.V.
* Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
* Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
======================================================== -->
<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
    $id = 0;
}

$query = $link->query("SELECT * FROM planalimento WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
    while ($dato = mysqli_fetch_array($query)) {
        $id = $dato['id'];
        $title = $dato['title'];
        $imgEncabezado = $dato['imgEncabezado'];
        $colorEncabezado = $dato['colorEncabezado'];
        $negocio = $dato['negocio'];
        $nombre = $dato['nombre'];
        $celular = $dato['celular'];
        $imgFrontal = $dato['imgFrontal'];
        $colorT1 = $dato['colorT1'];
        $titulo1 = $dato['titulo1'];
        $descChech = $dato['descChech'];
        $colorTiServ = $dato['colorTiServ'];
        $subTitulo1 = $dato['subTitulo1'];
        $subTitulo2 = $dato['subTitulo2'];
        $colorDesc = $dato['colorDesc'];
        $descSub1 = $dato['descSub1'];
        $descSub2 = $dato['descSub2'];
        $imgSub1 = $dato['imgSub1'];
        $imgSub2 = $dato['imgSub2'];
        $colorCarrusel = $dato['colorCarrusel'];
        $tituloCarr = $dato['tituloCarr'];
        $img1 = $dato['img1'];
        $img2 = $dato['img2'];
        $img3 = $dato['img3'];
        $img4 = $dato['img4'];
        $color3 = $dato['color3'];
        $perfil1 = $dato['perfil1'];
        $perfil2 = $dato['perfil2'];
        $imgP1 = $dato['imgP1'];
        $imgP2 = $dato['imgP2'];
        $desP1 = $dato['c3idesP1mg'];
        $desP2 = $dato['desP2'];
    }

?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title><?= $title; ?></title>
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
        </style>
    </head>

    <body>


        <!----wrap---->
        <div class="top-bannar" id="move-top">
            <div class="container">
                <div class="top-header row">
                    <!---logo--->
                    <div id="sb-search" class="sb-search">

                    </div>
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                    <!---//logo--->
                    <!--top-nav---->

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
                            <!-- <span class="divice12"><img src="images/divice.png" alt="" /></span> -->
                            <h1><?= $negocio; ?></h1>
                            <h2 style="color:white;"><?= $nombre; ?></h2>
                            <h3 style="color:white;"><?= $celular; ?>.</h3>

                        </div>
                        <div class="col-md-6 welcome-note-right">
                            <img src="<?= "img/$id/$imgFrontal"; ?>" alt="" />
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
                <h2><?= $titulo1; ?></h2>
                <p><?= $descChech; ?></p>
            </div>
        </div>
        <div class="works" id="works">
            <!----start-works---->
            <div class="content_top">
                <div class="container">
                    <div class="row content_main">
                        <div class="app_img col-md-5">
                            <img src="<?= "img/$id/$imgSub1"; ?>" alt="">
                        </div>
                        <div class="app_desc img col-md-7">
                            <h3><?= $subTitulo1; ?></h3>
                            <p><?= $descSub1; ?></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="container ">
                    <div class=" row devices- main">
                        <div class=" col-md-7 devices_desc">
                            <h3><?= $subTitulo2; ?></h3>
                            <p><?= $descSub2; ?></p>
                        </div>
                        <div class="col-md-5 devices">
                            <img src="<?= "img/$id/$imgSub2"; ?>" alt="">
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---start-our story----->
        <div class="gellery" id="gallery">
            <div class="our-story">
                <h4><?= $tituloCarr; ?></h4>
            </div>
            <div class="group_2" id="Portfolio">
                <div class="group_2_items">
                    <div class="container">
                        <div id="owl-demo1" class="owl-carousel">

                            <div class="item">
                                <div class="carousel">
                                    <div class="group_2_img1">
                                        <img src="<?= "img/$id/$img1"; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel">
                                    <div class="group_2_img1">
                                        <img src="<?= "img/$id/$img2"; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel">
                                    <div class="group_2_img1">
                                        <img src="<?= "img/$id/$img3"; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel">
                                    <div class="group_2_img1">
                                        <img src="<?= "img/$id/$img4"; ?>" alt="">
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
                                <img src="<?= "img/$id/$imgP1"; ?>" alt="">
                            </div>
                            <div class="client-des">
                                <h4><?= $perfil1; ?></h4>
                                <p><?= $desP1; ?></p>
                                <span> </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width:64%; opacity: 0;">
                        <div class=" cont span_2_of_3  client-main">
                            <div class="client">
                                <img src="<?= "img/$id/$imgP2"; ?>" alt="">
                            </div>
                            <div class="client-des">
                                <h4><?= $perfil2; ?></h4>
                                <p><?= $desP2; ?></p>
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

        <!---//contact----->
        <!-- /footer-->

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

    </body>

    </html>
<?php
}
?>
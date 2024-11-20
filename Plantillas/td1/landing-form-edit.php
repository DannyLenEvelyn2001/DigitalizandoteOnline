<!doctype html>
<html lang="es">

<head>

    <?php
    include("head.php");
    include("../../conexion/conexion.php");
    ?>

    <title>Nueva Landing Page</title>

</head>

<body>

    <?php
    if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

        $LP = 1;
        include("../../conexion/navbar.php");

        $idEmpresa = $_GET['a'];

        // Para la plantilla editable
        $id = $_REQUEST['id'];
        if (empty($id)) {
            $id = 0;
        }


        $query = $link->query("SELECT * FROM plandiseno WHERE id = $id AND activo = 1");
        if (mysqli_num_rows($query) != 0) {
            while ($dato = mysqli_fetch_array($query)) {
                $home1 = $dato['home1'];
                $about = $dato['about'];
                $portafolio = $dato['portafolio'];
                $blog = $dato['blog'];
                $colorEncabezado = $dato['colorEncabezado'];
                $nombre = $dato['nombre'];
                $descripcion1 = $dato['descripcion1'];
                $whatsapp = $dato['whatsapp'];
                $facebook = $dato['facebook'];
                $instagram = $dato['instagram'];
                $twitter = $dato['twitter'];
                $color1 = $dato['color1'];
                $descripcion2 = $dato['descripcion2'];
                $colorIconos = $dato['colorIconos'];
                $color2Primario = $dato['color2Primario'];
                $cajaT1 = $dato['cajaT1'];
                $cajaT2 = $dato['cajaT2'];
                $cajaT3 = $dato['cajaT3'];
                $cajaT4 = $dato['cajaT4'];
                $cajaT5 = $dato['cajaT5'];
                $cajaT6 = $dato['cajaT6'];
                $color3Secundario = $dato['color3Secundario'];
                $subCaja1 = $dato['subCaja1'];
                $subCaja2 = $dato['subCaja2'];
                $subCaja3 = $dato['subCaja3'];
                $subCaja4 = $dato['subCaja4'];
                $subCaja5 = $dato['subCaja5'];
                $subCaja6 = $dato['subCaja6'];
                $color4 = $dato['color4'];
                $tituloPor = $dato['tituloPor'];
                $color5 = $dato['color5'];
                $subTitulo = $dato['subTitulo'];
                $color6 = $dato['color6'];
                $color7 = $dato['color7'];
                $hiperImg1 = $dato['hiperImg1'];
                $separa1 = $dato['separa1'];
                $hiperImg2 = $dato['hiperImg2'];
                $separa2 = $dato['separa2'];
                $hiperImg3 = $dato['hiperImg3'];
                $separa3 = $dato['separa3'];
                $color8 = $dato['color8'];
                $all1 = $dato['all1'];
                $app1 = $dato['app1'];
                $card1 = $dato['card1'];
                $web1 = $dato['web1'];
                $color9 = $dato['color9'];
                $get = $dato['get'];
                $color10 = $dato['color10'];
                $calle = $dato['calle'];
                $ciudad = $dato['ciudad'];
                $tel = $dato['tel'];
                $email = $dato['email'];
            }
            // revisar variable
            // $tittle = "Edición de $nombre";
        }


        if (mysqli_num_rows($query) != 0) {

            $LP = 1;
            // include("../../navbar.php");

    ?>

            <div class="container">
                <div class="page-content">
                    <div data-bs-theme="dark">

                        <form id="formulario" class="row g-3" action="guardar.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="idEmpresa" value="<?= $idEmpresa ?>">

                            <!-- ASPECTOS GENERALES -->
                            <h2 class="titulosector">Aspectos Generales</h2>
                            <hr class="hr">

                            <div class="col-md-4">
                                <label class="form-label tituloimput">HOME</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                    <input type="text" class="form-control" name="home1" id="home1" placeholder="Home" value="<?= $home1 ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">ABOUT</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                    <input type="text" class="form-control" name="about" id="about" value="<?= $about ?>" placeholder="About">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">PORTAFOLIO</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                    <input type="text" class="form-control" name="portafolio" id="portafolio" value="<?= $portafolio ?>" placeholder="Portafolio">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">BLOG</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                    <input type="text" class="form-control" name="blog" id="blog" value="<?= $blog ?>" placeholder="Blog">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <label class="form-label tituloimput">logo</label>
                                <input class="form-control tituloimput" type="file" name="logo" id="logo">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <!-- <div class="col-md-12">
                            <label class="form-label tituloimput">Link de la página principal</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
                                <input type="text" class="form-control" name="link" id="link" placeholder="Introducir link de la página principal">
                            </div>
                        </div> -->

                            <!-- MENU -->
                            <hr>

                            <hr class="hr">

                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="colorEncabezado" name="colorEncabezado" value="<?= $colorEncabezado ?>" class="form-control form-control-color" title="Elegir color">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">NOMBRE</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $nombre ?>" placeholder="IntroducE tu nombre">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">DESCRIPCION</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                    <input type="text" class="form-control" name="descripcion1" id="descripcion1" value="<?= $descripcion1 ?>" placeholder="Introducir descripcion">
                                </div>
                            </div>

                            <hr>
                            <!-- REDES SOCIALES -->
                            <hr>
                            <h2 class="titulosector">Redes Sociales</h2>
                            <hr class="hr">

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-whatsapp me-2"></i>whatsapp</span>
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="<?= $whatsapp ?>" placeholder="Introducir número de whatsapp (10 dígitos)">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-facebook me-2"></i>facebook</span>
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?= $facebook ?>" placeholder="Introducir link de facebook">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-instagram me-2"></i>instagram</span>
                                    <input type="text" class="form-control" name="instagram" id="instagram" value="<?= $instagram ?>" placeholder="Introducir link de instagram">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-twitter me-2"></i>Twitter</span>
                                    <input type="text" class="form-control" name="twitter" id="twitter" value="<?= $twitter ?>" placeholder="Introducir link de Twitter">
                                </div>
                            </div>

                            <!-- HERO -->
                            <hr>
                            <h2 class="titulosector">Hero</h2>
                            <hr class="hr">

                            <div class="col-md-9">
                                <label class="form-label tituloimput">IMAGEN ENCABEZADO</label>
                                <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>


                            <h3 class="titulosector">Título Principal</h3>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN DE CONTENIDO</label>
                                <input class="form-control tituloimput" type="file" name="imgContenido" id="imgContenido">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color1" name="color1" class="form-control form-control-color" value="<?= $color1 ?>" title="Elegir color">
                            </div>
                            <div class="mb-3">
                                <label class="form-label tituloimput">DESCRIPCION 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                    <input type="text" class="form-control" name="descripcion2" id="descripcion2" value="<?= $descripcion2 ?>" placeholder="Introducir DESCRIPCION 2">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de iconos</label>
                                <input type="color" id="colorIconos" name="colorIconos" class="form-control form-control-color" value="<?= $colorIconos ?>" title="Elegir color">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color2Primario" name="color2Primario" class="form-control form-control-color" value="<?= $color2Primario ?>" title="Elegir color">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">CAJA 1</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="cajaT1" id="cajaT1" value="<?= $cajaT1 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">CAJA 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="cajaT2" id="cajaT2" value="<?= $cajaT2 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">CAJA 3</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="cajaT3" id="cajaT3" value="<?= $cajaT3 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">CAJA 4</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="cajaT4" id="cajaT4" value="<?= $cajaT4 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>

                            <!-- SECCIÓN NOSOTROS -->
                            <hr>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">CAJA 5</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="cajaT5" id="cajaT5" value="<?= $cajaT5 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">CAJA 6</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="cajaT6" id="cajaT6" value="<?= $cajaT6 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>

                            <!-- SECCIÓN SERVICIOS -->
                            <hr>

                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color3Secundario" name="color3Secundario" class="form-control form-control-color" value="<?= $color3Secundario ?>" title="Elegir color">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB CAJA 1</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subCaja1" id="subCaja1" value="<?= $subCaja1 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB CAJA 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subCaja2" id="subCaja2" value="<?= $subCaja2 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB CAJA 3</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subCaja3" id="subCaja3" value="<?= $subCaja3 ?>" placeholder="Introducir título de la sección">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB CAJA 4</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subCaja4" id="subCaja4" value="<?= $subCaja4 ?>" placeholder="Introducir título ">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB CAJA 5</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subCaja5" id="subCaja5" value="<?= $subCaja5 ?>" placeholder="Introducir título ">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB CAJA 6</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subCaja6" id="subCaja6" value="<?= $subCaja6 ?>" placeholder="Introducir título ">
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color4" name="color4" class="form-control form-control-color" value="<?= $color4 ?>" title="Elegir color">
                            </div>
                            <div class="col-md-10">
                                <label class="form-label tituloimput">TITULO DEL PORTAFOLIO</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="tituloPor" id="tituloPor" value="<?= $tituloPor ?>" placeholder="Introducir titulo en lugar de 'Portafolio'" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN 1</label>
                                <input class="form-control tituloimput" type="file" name="c1img" id="c1img">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN 2</label>
                                <input class="form-control tituloimput" type="file" name="c2img" id="c2img">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN 3</label>
                                <input class="form-control tituloimput" type="file" name="c3img" id="c3img">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN 4</label>
                                <input class="form-control tituloimput" type="file" name="c1img2" id="c1img2">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN 5</label>
                                <input class="form-control tituloimput" type="file" name="c2img2" id="c2img2">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label tituloimput">IMAGEN 6</label>
                                <input class="form-control tituloimput" type="file" name="c3img2" id="c3img2">
                                <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color5" name="color5" class="form-control form-control-color" value="<?= $color5 ?>" title="Elegir color">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">SUB TITULO</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="subTitulo" id="subTitulo" value="<?= $subTitulo ?> " placeholder="Introducir sub titulo">
                                </div>
                            </div>
                            <!-- GALERÍA DE IMÁGENES -->
                            <hr>
                            <h2 class="titulosector">IMAGENES 2</h2>
                            <hr class="hr">
                            <hr>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color6" name="color6" class="form-control form-control-color" value="<?= $color6 ?>" title="Elegir color">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color7" name="color7" class="form-control form-control-color" value="<?= $color7 ?>" title="Elegir color">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Imágen 1</label>
                                <input class="form-control tituloimput" type="file" name="imgc1" id="imgc1">
                                <div class="form-text">(Preferible <strong>800 x 800</strong> pixeles o <strong>800 x 1000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">Título 1</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="hiperImg1" id="hiperImg1" value="<?= $hiperImg1 ?> " placeholder="Introducir título 1">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label class="form-label tituloimput">Descripción 1</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="separa1" id="separa1" value="<?= $separa1 ?>" placeholder="Introducir descripcion 1" rows="2"></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Imágen 2</label>
                                <input class="form-control tituloimput" type="file" name="imgc2" id="imgc2">
                                <div class="form-text">(Preferible <strong>800 x 800</strong> pixeles o <strong>800 x 1000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">Título 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="hiperImg2" id="hiperImg2" value="<?= $hiperImg2 ?>" placeholder="Introducir título 2">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label class="form-label tituloimput">Descripción 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="separa2" id="separa2" value="<?= $separa2 ?>" placeholder="Introducir descrpcion 2" rows="2"></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Imágen 3</label>
                                <input class="form-control tituloimput" type="file" name="imgc3" id="imgc3">
                                <div class="form-text">(Preferible <strong>800 x 800</strong> pixeles o <strong>800 x 1000</strong> pixeles)</div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label tituloimput">Título 3</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                    <input type="text" class="form-control" name="hiperImg3" id="hiperImg3" value="<?= $hiperImg3 ?>" placeholder="Introducir título 3">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label class="form-label tituloimput">Descripción 3</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="separa3" id="separa3" value="<?= $separa3 ?>" placeholder="Introducir descripcion 3" rows="2"></textarea>
                                </div>
                            </div>
                            <hr>


                            <!-- 1 -->
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color8" name="color8" class="form-control form-control-color" value="<?= $color8 ?>" title="Elegir color">
                            </div>
                            <div class="mb-3">

                                <label class="form-label tituloimput">ALL</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="all1" id="all1" value="<?= $all1 ?>" placeholder="All"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label tituloimput">APP</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" name="app1" id="app1" value="<?= $app1 ?>" placeholder="App">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label tituloimput">CARD</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                    <input type="text" class="form-control" name="card1" id="card1" value="<?= $card1 ?>" placeholder="Card">
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="mb-3">
                                <label class="form-label tituloimput">WEB</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="web1" id="web1" value="<?= $web1 ?>" placeholder="Web"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color9" name="color9" class="form-control form-control-color" value="<?= $color9 ?>" title="Elegir color">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label tituloimput">GET</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" name="get" id="get" value="<?= $get ?>" placeholder="Introducir titulo get">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto</label>
                                <input type="color" id="color10" name="color10" class="form-control form-control-color" value="<?= $color10 ?>" title="Elegir color">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label tituloimput">CALLE</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                    <input type="text" class="form-control" name="calle" id="calle" value="<?= $calle ?>" placeholder="Introducir la calle">
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="mb-3">
                                <label class="form-label tituloimput">CIUDAD</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="ciudad" id="ciudad" value="<?= $ciudad ?>" placeholder="Introducirla ciudad"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label tituloimput">TELEFONO 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" name="tel" id="tel" value="<?= $tel ?>" placeholder="Introducir telefono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label tituloimput">EMAIL</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                    <input type="text" class="form-control" name="email" id="email" value="<?= $email ?>" placeholder="Introducir email">
                                </div>
                            </div>



                            <div class="input-group justify-content-md-center">
                                <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <script>
                // Obtener referencia al popup de previsualización
                var screenWidth = window.screen.width; // Ancho completo de la pantalla
                var screenHeight = window.screen.height;
                var halfScreenWidth = (screenWidth / 3) * 2 + 100; // Mitad del ancho de la pantalla
                var width = halfScreenWidth; // Ancho igual a la mitad de la pantalla
                var height = screenHeight;
                const nombreVentana = "previsualizacionPopup"; // Nombre que tendrá la ventana
                var left = screenWidth + halfScreenWidth; // Posicionarse a la mitad del ancho de la pantalla
                /* Pantalla Dividida */
                var previsualizacionWindow = window.open("previsualizacion.php", nombreVentana, "width=" + width + ",height=" + height + ",left=" + left + ",top=0");

                // Escuchar cambios en los campos del formulario y actualizar la previsualización en tiempo real
                document.getElementById('formulario').addEventListener('input', function() {
                    var formData = {

                        home1: document.getElementById('home1').value,
                        about: document.getElementById('about').value,
                        portafolio: document.getElementById('portafolio').value,
                        blog: document.getElementById('blog').value,
                        logo: document.getElementById('logo').files[0],
                        colorEncabezado: document.getElementById('colorEncabezado').value,
                        nombre: document.getElementById('nombre').value,
                        descripcion1: document.getElementById('descripcion1').value,
                        facebook: document.getElementById('facebook').value,
                        twitter: document.getElementById('twitter').value,
                        instagram: document.getElementById('instagram').value,
                        whatsapp: document.getElementById('whatsapp').value,
                        imgEncabezado: document.getElementById('imgEncabezado').files[0],
                        imgContenido: document.getElementById('imgContenido').files[0],
                        color1: document.getElementById('color1').value,
                        descripcion2: document.getElementById('descripcion2').value,
                        colorIconos: document.getElementById('colorIconos').value,
                        color2Primario: document.getElementById('color2Primario').value,
                        cajaT1: document.getElementById('cajaT1').value,
                        cajaT2: document.getElementById('cajaT2').value,
                        cajaT3: document.getElementById('cajaT3').value,
                        cajaT4: document.getElementById('cajaT4').value,
                        cajaT5: document.getElementById('cajaT5').value,
                        cajaT6: document.getElementById('cajaT6').value,
                        color3Secundario: document.getElementById('color3Secundario').value,
                        subCaja1: document.getElementById('subCaja1').value,
                        subCaja2: document.getElementById('subCaja2').value,
                        subCaja3: document.getElementById('subCaja3').value,
                        subCaja4: document.getElementById('subCaja4').value,
                        subCaja5: document.getElementById('subCaja5').value,
                        subCaja6: document.getElementById('subCaja6').value,
                        color4: document.getElementById('color4').value,
                        tituloPor: document.getElementById('tituloPor').value,
                        c1img: document.getElementById('c1img').files[0],
                        c2img: document.getElementById('c2img').files[0],
                        c3img: document.getElementById('c3img').files[0],
                        c1img2: document.getElementById('c1img2').files[0],
                        c2img2: document.getElementById('c2img2').files[0],
                        c3img2: document.getElementById('c3img2').files[0],
                        color5: document.getElementById('color5').value,
                        subTitulo: document.getElementById('subTitulo').value,
                        color6: document.getElementById('color6').value,
                        color7: document.getElementById('color7').value,
                        imgc1: document.getElementById('imgc1').files[0],
                        hiperImg1: document.getElementById('hiperImg1').value,
                        separa1: document.getElementById('separa1').value,
                        imgc2: document.getElementById('imgc2').files[0],
                        hiperImg2: document.getElementById('hiperImg2').value,
                        separa2: document.getElementById('separa2').value,
                        imgc3: document.getElementById('imgc3').files[0],
                        hiperImg3: document.getElementById('hiperImg3').value,
                        separa3: document.getElementById('separa3').value,
                        color8: document.getElementById('color8').value,
                        all1: document.getElementById('all1').value,
                        app1: document.getElementById('app1').value,
                        card1: document.getElementById('card1').value,
                        web1: document.getElementById('web1').value,
                        color9: document.getElementById('color9').value,
                        get: document.getElementById('get').value,
                        color10: document.getElementById('color10').value,
                        calle: document.getElementById('calle').value,
                        ciudad: document.getElementById('ciudad').value,
                        tel: document.getElementById('tel').value,
                        email: document.getElementById('email').value,

                    };

                    // Enviar mensaje al popup de previsualización
                    previsualizacionWindow.postMessage(formData, '*');
                });
                // Cargar previsualización inicial
                window.addEventListener('load', function() {
                    var formData = {
                        home1: document.getElementById('home1').value,
                        about: document.getElementById('about').value,
                        portafolio: document.getElementById('portafolio').value,
                        blog: document.getElementById('blog').value,
                        logo: document.getElementById('logo').files[0],
                        colorEncabezado: document.getElementById('colorEncabezado').value,
                        nombre: document.getElementById('nombre').value,
                        descripcion1: document.getElementById('descripcion1').value,
                        facebook: document.getElementById('facebook').value,
                        twitter: document.getElementById('twitter').value,
                        instagram: document.getElementById('instagram').value,
                        whatsapp: document.getElementById('whatsapp').value,
                        imgEncabezado: document.getElementById('imgEncabezado').files[0],
                        imgContenido: document.getElementById('imgContenido').files[0],
                        color1: document.getElementById('color1').value,
                        descripcion2: document.getElementById('descripcion2').value,
                        colorIconos: document.getElementById('colorIconos').value,
                        color2Primario: document.getElementById('color2Primario').value,
                        cajaT1: document.getElementById('cajaT1').value,
                        cajaT2: document.getElementById('cajaT2').value,
                        cajaT3: document.getElementById('cajaT3').value,
                        cajaT4: document.getElementById('cajaT4').value,
                        cajaT5: document.getElementById('cajaT5').value,
                        cajaT6: document.getElementById('cajaT6').value,
                        color3Secundario: document.getElementById('color3Secundario').value,
                        subCaja1: document.getElementById('subCaja1').value,
                        subCaja2: document.getElementById('subCaja2').value,
                        subCaja3: document.getElementById('subCaja3').value,
                        subCaja4: document.getElementById('subCaja4').value,
                        subCaja5: document.getElementById('subCaja5').value,
                        subCaja6: document.getElementById('subCaja6').value,
                        color4: document.getElementById('color4').value,
                        tituloPor: document.getElementById('tituloPor').value,
                        c1img: document.getElementById('c1img').files[0],
                        c2img: document.getElementById('c2img').files[0],
                        c3img: document.getElementById('c3img').files[0],
                        c1img2: document.getElementById('c1img2').files[0],
                        c2img2: document.getElementById('c2img2').files[0],
                        c3img2: document.getElementById('c3img2').files[0],
                        color5: document.getElementById('color5').value,
                        subTitulo: document.getElementById('subTitulo').value,
                        color6: document.getElementById('color6').value,
                        color7: document.getElementById('color7').value,
                        imgc1: document.getElementById('imgc1').files[0],
                        hiperImg1: document.getElementById('hiperImg1').value,
                        separa1: document.getElementById('separa1').value,
                        imgc2: document.getElementById('imgc2').files[0],
                        hiperImg2: document.getElementById('hiperImg2').value,
                        separa2: document.getElementById('separa2').value,
                        imgc3: document.getElementById('imgc3').files[0],
                        hiperImg3: document.getElementById('hiperImg3').value,
                        separa3: document.getElementById('separa3').value,
                        color8: document.getElementById('color8').value,
                        all1: document.getElementById('all1').value,
                        app1: document.getElementById('app1').value,
                        card1: document.getElementById('card1').value,
                        web1: document.getElementById('web1').value,
                        color9: document.getElementById('color9').value,
                        get: document.getElementById('get').value,
                        color10: document.getElementById('color10').value,
                        calle: document.getElementById('calle').value,
                        ciudad: document.getElementById('ciudad').value,
                        tel: document.getElementById('tel').value,
                        email: document.getElementById('email').value,

                    };

                    // Enviar mensaje al popup de previsualización
                    previsualizacionWindow.postMessage(formData, '*');
                });
            </script>
        <?php
        } else { // --------------- CASO DE ID INHABILITADO O INEXISTENTE ----------------------------
        ?>
            <div class="container">
                <div class="page-content bg-light">
                    <div style="text-align: center;">
                        <h2 class="titulosector">La landing page que intentas editar no existe o no está disponible</h2>
                        <hr class="hr">
                        <h4 class="tituloimput">Por favor verifica la dirección.</h4>
                        <br>
                        <br>
                        <!-- <a href="../../panellandings.php"><button class="btn btn-form btn-lg">Regresar</button></a> -->
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        header("Location: ../../../../conexion/conexion.php");
    }
    // include("../../footer.php");
    ?>
</body>

</html>
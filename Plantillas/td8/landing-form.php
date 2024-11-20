<!doctype html>
<html lang="es">

<head>

    <?php
    include("head.php");
    include("../../conexion/conexion.php");
    ?>

    <title>Nueva Landing Page</title>
    <link href="css/styles.css" rel='stylesheet' type='text/css' />
    <!-- estilo del hr -->
    <style>
        .line-separator {
            border: 0;
            height: 1px;
            background: #09d8db;
            /* Color de la línea */
            margin: 20px 0;
            /* Espaciado superior e inferior */
        }
    </style>
</head>

<body>

    <?php
    if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

        $LP = 1;
        include("../../conexion/navbar.php");

        // $idEmpresa = $_GET['a'];
    ?>

        <div class="container">
            <div class="page-content">
                <div data-bs-theme="dark">

                    <form id="formulario" class="row g-3" action="guardad.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="idEmpresa" value="<?= $idEmpresa ?>">

                        <!-- ASPECTOS GENERALES -->
                        <hr>
                        <h2 class="titulosector">Aspectos Generales</h2>
                        <hr class="hr">
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DEL ENCABEZADO</label>
                            <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorEnca" name="colorEnca" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo Encabezado</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="tituloEnca" id="tituloEnca" placeholder="logo">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Texto de inicio</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="inicio" id="inicio" placeholder="Introducir texto de inicio (puede incluirlo o no)">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Texto de Espacios</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="espacio" id="espacio" placeholder="Introducir texto de Espacios (puede incluirlo o no)">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Texto de servicios</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="servicios" id="servicios" placeholder="Introducir texto de servicios (puede incluirlo o no)">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce tu nombre">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Cargo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Introduce el cargo">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Texto del boton de modal</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="btnModal1" id="btnModal1" placeholder="Introducir texto de boton de modal">
                            </div>
                        </div>

                        <hr>
                        <h2 class="titulosector">Razones de elección</h2>
                        <hr class="hr">
                        <hr>
                        <!-- COLOR DEL TITULO Y SUB TITULO -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color2" name="color2" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="titulo1" id="titulo1" placeholder="Titulo">
                            </div>
                        </div>
                        <!-- COLOR DE LAS DESCRIPCIONES -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color3" name="color3" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subtitulo1" id="subtitulo1" placeholder="Punto uno">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descrip1" id="descrip1" placeholder="Descripción">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subtitulo2" id="subtitulo2" placeholder="Punto dos">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descrip2" id="descrip2" placeholder="Descripción">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subtitulo3" id="subtitulo3" placeholder="Punto tres">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descrip3" id="descrip3" placeholder="Descripción">
                            </div>
                        </div>
                        <hr>
                        <h2 class="titulosector">Titulo 2</h2>
                        <hr class="hr">
                        <!-- color del titulo -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color4T" name="color4T" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="titulo2" id="titulo2" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 1</label>
                            <input class="form-control tituloimput" type="file" name="imgSub1" id="imgSub1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <!-- color del subtitulo -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color5S" name="color5S" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub Titulo 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subD1" id="subD1" placeholder="Sub titulo">
                            </div>
                        </div>
                        <!-- color de la descripcion -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color6T" name="color6T" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textSub1" id="textSub1" placeholder="Descripción">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 2</label>
                            <input class="form-control tituloimput" type="file" name="imgSub2" id="imgSub2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub Titulo 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subS2" id="subS2" placeholder="Sub titulo">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textSub2" id="textSub2" placeholder="Descripción">
                            </div>
                        </div>
                        <hr>
                        <h2 class="titulosector">Planes</h2>
                        <hr class="hr">
                        <!-- color del titulo y de los botones de los planes -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color7P" name="color7P" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo de los planes</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="titulo3" id="titulo3" placeholder="Titulo 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 1 titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="btnPart1" id="btnPart1" placeholder="Plan 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo1" id="textTitulo1" placeholder="Plan 1">
                            </div>
                        </div>
                        <!-- color para los precios  -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color8P" name="color8P" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio1" id="precio1" placeholder="$$">
                            </div>
                        </div>
                        <!-- color para los puntos por precio -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color9D" name="color9D" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto11" id="punto11" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto12" id="punto12" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo2" id="textTitulo2" placeholder="Plan 2">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio2" id="precio2" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto21" id="punto21" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto22" id="punto22" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo3" id="textTitulo3" placeholder="Plan 3">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio3" id="precio3" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto31" id="punto31" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto32" id="punto32" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo4" id="textTitulo4" placeholder="Plan 4">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio4" id="precio4" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto41" id="punto41" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto42" id="punto42" placeholder="razones">
                            </div>
                        </div>
                        <!-- revisar la linea del hr para division -->
                        <hr style="border: 1px solid #09d8db; margin: 20px 10;">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo de los planes 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="btnPart2" id="btnPart2" placeholder="Titulo 2">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo5" id="textTitulo5" placeholder="Plan 5">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio5" id="precio5" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto51" id="punto51" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto52" id="punto52" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo6" id="textTitulo6" placeholder="Plan 6">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio6" id="precio6" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto61" id="punto61" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto62" id="punto62" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 7</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo7" id="textTitulo7" placeholder="Plan 7">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 7</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio7" id="precio7" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 7</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto71" id="punto71" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 7</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto72" id="punto72" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Plan 8</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="textTitulo8" id="textTitulo8" placeholder="Plan 8">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Precio del pla 8</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="precio8" id="precio8" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 1 del pla 8</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="punto81" id="punto81" placeholder="razones">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Punto 2 del pla 8</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solpunto82id fa-t"></i></span>
                                <input type="text" class="form-control" name="punto82" id="punto82" placeholder="razones">
                            </div>
                        </div>
                        <hr>
                        <h2 class="titulosector">Preguntas</h2>
                        <hr class="hr">
                        <!-- color de las preguntas  -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color10" name="color10" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="titulo4" id="titulo4" placeholder="titulo">
                            </div>
                        </div>
                        <!-- color de los sub titulos -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colo11" name="colo11" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub titulo 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTi1" id="subTi1" placeholder="Sub titulo / pregunta 1">
                            </div>
                        </div>
                        <!-- color de las respuestas -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color12" name="color12" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción / Respuesta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descTitulo1" id="descTitulo1" placeholder="Descripción /respuesta">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub titulo 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTi2" id="subTi2" placeholder="Sub titulo / pregunta 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción / Respuesta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descTitulo2" id="descTitulo2" placeholder="Descripción /respuesta">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub titulo 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTi3" id="subTi3" placeholder="Sub titulo / pregunta 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción / Respuesta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descTitulo3" id="descTitulo3" placeholder="Descripción /respuesta">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub titulo 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTi4" id="subTi4" placeholder="Sub titulo / pregunta 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción / Respuesta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descTitulo4" id="descTitulo4" placeholder="Descripción /respuesta">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub titulo 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTi5" id="subTi5" placeholder="Sub titulo / pregunta 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción / Respuesta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descTitulo5" id="descTitulo5" placeholder="Descripción /respuesta">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub titulo 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTi6" id="subTi6" placeholder="Sub titulo / pregunta 1">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripción / Respuesta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descTitulo6" id="descTitulo6" placeholder="Descripción /respuesta">
                            </div>
                        </div>

                        <hr>
                        <h2 class="titulosector">Comentarios</h2>
                        <hr class="hr">
                        <!-- color del titulo de los autores -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color13" name="color13" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="titulo5" id="titulo5" placeholder="Titulo">
                            </div>
                        </div>
                        <!-- color de los autores -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colo14" name="colo14" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Autor 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="autor1" id="autor1" placeholder="Autor">
                            </div>
                        </div>
                        <!-- color de los comentarios o respuestas -->
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color15" name="color15" class="form-control form-control-color" value="#F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Comentario 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="opinion1" id="opinion1" placeholder="Comentario">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Autor 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="autor2" id="autor2" placeholder="Autor">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Comentario 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="opinion2" id="opinion2" placeholder="Comentario">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Autor 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="autor3" id="autor3" placeholder="Autor">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Comentario 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="opinion3" id="opinion3" placeholder="Comentario">
                            </div>
                        </div>

                        <br>
                        <hr>
                        <h2 class="titulosector">Flooter</h2>
                        <hr>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Dirección</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Telefono</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="email" id="email" placeholder="info@example.com">
                            </div>
                        </div>

                        <hr>
                        <h2 class="titulosector">Redes sociales</h2>
                        <hr>

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Facebook</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">X</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Whatsapp</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Instagram</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="intagram" id="intagram" placeholder="Introducir descripcion">
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

                    colorEnca: document.getElementById('colorEnca').value,
                    tituloEnca: document.getElementById('tituloEnca').value,
                    inicio: document.getElementById('inicio').value,
                    espacio: document.getElementById('espacio').value,
                    servicios: document.getElementById('servicios').value,
                    imgEncabezado: document.getElementById('imgEncabezado').files[0],
                    nombre: document.getElementById('nombre').value,
                    cargo: document.getElementById('cargo').value,
                    btnModal1: document.getElementById('btnModal1').value,
                    color2: document.getElementById('color2').value,
                    titulo1: document.getElementById('titulo1').value,
                    subtitulo1: document.getElementById('subtitulo1').value,
                    subtitulo2: document.getElementById('subtitulo2').value,
                    subtitulo3: document.getElementById('subtitulo3').value,
                    color3: document.getElementById('color3').value,
                    descrip1: document.getElementById('descrip1').value,
                    descrip2: document.getElementById('descrip2').value,
                    descrip3: document.getElementById('descrip3').value,
                    color4T: document.getElementById('color4T').value,
                    titulo2: document.getElementById('titulo2').value,
                    color5S: document.getElementById('color5S').value,
                    subD1: document.getElementById('subD1').value,
                    subS2: document.getElementById('subS2').value,
                    color6T: document.getElementById('color6T').value,
                    textSub1: document.getElementById('textSub1').value,
                    textSub2: document.getElementById('textSub2').value,
                    imgSub1: document.getElementById('imgSub1').value,
                    imgSub2: document.getElementById('imgSub2').value,
                    titulo3: document.getElementById('titulo3').value,
                    // me quede aqui
                    btnPart1: document.getElementById('btnPart1').value,
                    btnPart2: document.getElementById('btnPart2').value,
                    color7P: document.getElementById('color7P').value,
                    textTitulo1: document.getElementById('textTitulo1').value,
                    textTitulo2: document.getElementById('textTitulo2').value,
                    textTitulo3: document.getElementById('textTitulo3').value,
                    textTitulo4: document.getElementById('textTitulo4').value,
                    textTitulo5: document.getElementById('textTitulo5').value,
                    textTitulo6: document.getElementById('textTitulo6').value,
                    textTitulo7: document.getElementById('textTitulo7').value,
                    textTitulo8: document.getElementById('textTitulo8').value,
                    color8P: document.getElementById('color8P').value,
                    precio1: document.getElementById('precio1').value,
                    precio2: document.getElementById('precio2').value,
                    precio3: document.getElementById('precio3').value,
                    precio4: document.getElementById('precio4').value,
                    precio5: document.getElementById('precio5').value,
                    precio6: document.getElementById('precio6').value,
                    precio7: document.getElementById('precio7').value,
                    precio8: document.getElementById('precio8').value,
                    color9D: document.getElementById('color9D').value,
                    punto11: document.getElementById('punto11').value,
                    punto12: document.getElementById('punto12').value,
                    punto21: document.getElementById('punto21').value,
                    punto22: document.getElementById('punto22').value,
                    punto31: document.getElementById('punto31').value,
                    punto32: document.getElementById('punto32').value,
                    punto41: document.getElementById('punto41').value,
                    punto42: document.getElementById('punto42').value,
                    punto51: document.getElementById('punto51').value,
                    punto52: document.getElementById('punto52').value,
                    punto61: document.getElementById('punto61').value,
                    punto62: document.getElementById('punto62').value,
                    punto71: document.getElementById('punto71').value,
                    punto72: document.getElementById('punto72').value,
                    punto81: document.getElementById('punto81').value,
                    punto82: document.getElementById('punto82').value,
                    color10: document.getElementById('color10').value,
                    titulo4: document.getElementById('titulo4').value,
                    colo11: document.getElementById('colo11').value,
                    subTi1: document.getElementById('subTi1').value,
                    subTi2: document.getElementById('subTi2').value,
                    subTi3: document.getElementById('subTi3').value,
                    subTi4: document.getElementById('subTi4').value,
                    subTi5: document.getElementById('subTi5').value,
                    subTi6: document.getElementById('subTi6').value,
                    color12: document.getElementById('color12').value,
                    descTitulo1: document.getElementById('descTitulo1').value,
                    descTitulo2: document.getElementById('descTitulo2').value,
                    descTitulo3: document.getElementById('descTitulo3').value,
                    descTitulo4: document.getElementById('descTitulo4').value,
                    descTitulo5: document.getElementById('descTitulo5').value,
                    descTitulo6: document.getElementById('descTitulo6').value,
                    color13: document.getElementById('color13').value,
                    titulo5: document.getElementById('titulo5').value,
                    colo14: document.getElementById('colo14').value,
                    autor1: document.getElementById('autor1').value,
                    autor2: document.getElementById('autor2').value,
                    autor3: document.getElementById('autor3').value,
                    color15: document.getElementById('color15').value,
                    opinion1: document.getElementById('opinion1').value,
                    opinion2: document.getElementById('opinion2').value,
                    opinion3: document.getElementById('opinion3').value,
                    direccion: document.getElementById('direccion').value,
                    email: document.getElementById('email').value,
                    celular: document.getElementById('celular').value,
                    facebook: document.getElementById('facebook').value,
                    twitter: document.getElementById('twitter').value,
                    whatsapp: document.getElementById('whatsapp').value,
                    intagram: document.getElementById('intagram').value,



                    // activo: document.getElementById('activo').value,
                };

                // Enviar mensaje al popup de previsualización
                previsualizacionWindow.postMessage(formData, '*');
            });
        </script>

    <?php
    } else {
        header("Location: ../../../../conexion/conexion.php");
    }
    // include("../../footer.php");
    ?>
</body>

</html>
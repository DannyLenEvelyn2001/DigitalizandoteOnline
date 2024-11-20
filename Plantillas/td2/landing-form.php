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
    ?>

        <div class="container">
            <div class="page-content">
                <div data-bs-theme="dark">

                    <form id="formulario" class="row g-3" action="guardad.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="idEmpresa" value="<?= $idEmpresa ?>">

                        <!-- ASPECTOS GENERALES -->
                        <h2 class="titulosector">Aspectos Generales</h2>
                        <hr class="hr">

                        <h3 class="titulosector">Perfil</h3>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DE PERFIL</label>
                            <input class="form-control tituloimput" type="file" name="imgPerfil" id="imgPerfil">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color1" name="color1" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">NOMBRE PARA EL ENCABEZADO</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="nombrePerfil" id="nombrePerfil" placeholder="Introduce tu nombre">
                            </div>
                        </div>

                        <h2 class="titulosector">Redes Sociales</h2>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de los iconos</label>
                            <input type="color" id="color1" name="color1" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-square-whatsapp"></i>whatsapp</span>
                                <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Introducir enlace">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-square-facebook"></i>Facebook</span>
                                <input type="text" class="form-control" name="face" id="face" placeholder="Introducir enlace">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-square-instagram"></i>Instagram</span>
                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Introducir enlace">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-square-x-twitter"></i>Twitter</span>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Introducir enlace">
                            </div>
                        </div>

                        <h2 class="titulosector">Hero</h2>
                        <hr class="hr">

                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN ENCABEZADO</label>
                            <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">NOMBRE PARA EL ENCABEZADO</label>
                            <div class="col-md-4">
                                <label class="form-label tituloimput">Color de texto para el encabezado</label>
                                <input type="color" id="color1" name="color1" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="nombreEncab" id="nombreEncab" placeholder="IntroducE tu nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto de la descripcion</label>
                            <input type="color" id="color1" name="color1" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion1" id="descripcion1" placeholder="Introducir descripcion">
                            </div>
                        </div>

                        <h2 class="titulosector">ABOUT</h2>
                        <hr class="hr">
                        <!-- ABOUT -->
                        <div class="col-md-5">
                            <label class="form-label tituloimput">ABOUT</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="about1" id="about1" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION ABOUT</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion2" id="descripcion2" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">UI/UX Designer & Web Developer.</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT1" id="subT1" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Birthday:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="birth" id="birth" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Phone:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">City:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="city" id="city" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Age:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="age" id="age" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Degree:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="degree" id="degree" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">PhEmailone:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="phemail" id="phemail" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION ABOUT 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text" id="text" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <!-- FACTS -->
                        <h2 class="titulosector">FACTS</h2>
                        <hr class="hr">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">FACTS</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT2" id="subT2" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION FACTS</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text2" id="text2" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <!-- SKILLS -->
                        <h2 class="titulosector">SKILLS</h2>
                        <hr class="hr">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">SKILLS</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT3" id="subT3" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION FACTS</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text3" id="text3" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <!-- RESUME -->
                        <h2 class="titulosector">RESUME</h2>
                        <hr class="hr">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">RESUMEN</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT4" id="subT4" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION RESUME</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text4" id="text4" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT5" id="subT5" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text5" id="text5" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <h2 class="titulosector">EDUCACION</h2>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT6" id="subT6" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text6" id="text6" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT7" id="subT7" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text7" id="text7" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <h2 class="titulosector">EXPERIENCIA PROFESIONAL</h2>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT8" id="subT8" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text8" id="text8" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT9" id="subT9" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text9" id="text9" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT10" id="subT10" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text10" id="text10" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subT11" id="subT11" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="text11" id="text11" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <!-- PORTAFOLIO -->
                        <h2 class="titulosector">MI PORTAFOLIO</h2>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="portafolio" id="portafolio" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion3" id="descripcion3" placeholder="Introducir descripcion">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label tituloimput">ALL</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="all1" id="all1" placeholder="All"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">APP</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="app1" id="app1" placeholder="App">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">CARD</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="card1" id="card1" placeholder="Card">
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="mb-3">
                            <label class="form-label tituloimput">WEB</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="web1" id="web1" placeholder="Web"></textarea>
                            </div>
                        </div>
                        <!-- IMAGENES DEL PORTAFOLIO -->
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 1</label>
                            <input class="form-control tituloimput" type="file" name="img1" id="img1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 2</label>
                            <input class="form-control tituloimput" type="file" name="img2" id="img2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 3</label>
                            <input class="form-control tituloimput" type="file" name="img3" id="img3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 4</label>
                            <input class="form-control tituloimput" type="file" name="img4" id="img4">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 5</label>
                            <input class="form-control tituloimput" type="file" name="img5" id="img5">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 6</label>
                            <input class="form-control tituloimput" type="file" name="img6" id="img6">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 7</label>
                            <input class="form-control tituloimput" type="file" name="img7" id="img7">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 8</label>
                            <input class="form-control tituloimput" type="file" name="img8" id="img8">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 9</label>
                            <input class="form-control tituloimput" type="file" name="img9" id="img9">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>

                        <!-- SERVICIOS -->
                        <h2 class="titulosector">MIS SERVICIOS</h2>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="service" id="service" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion4" id="descripcion4" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="texto1" id="texto1" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="texto2" id="texto2" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="texto3" id="texto3" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="texto4" id="texto4" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="texto5" id="texto5" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="texto6" id="texto6" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <!-- TESTIMONIOS -->
                        <h2 class="titulosector">MIS TESTIMONIOS</h2>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">NOMBRE</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTesti" id="subTesti" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion5" id="descripcion5" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">TESTIMONIO 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="testi1" id="testi1" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">AUTOR 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nomTes1" id="nomTes1" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">TESTIMONIO 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="testi2" id="testi2" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">AUTOR 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nomTes2" id="nomTes2" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">TESTIMONIO 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="testi3" id="testi3" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">AUTOR 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nomTes3" id="nomTes3" placeholder="Introducir título de la sección">
                            </div>
                        </div>

                        <h2 class="titulosector">MI CONTACTO</h2>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">CONTACTO</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="contac" id="contac" placeholder="Introducir título de la sección">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion6" id="descripcion6" placeholder="Introducir descripcion">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">CIUDAD:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="city" id="city" placeholder="Introducirla ciudad"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">EMAIL</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="phemail" id="phemail" placeholder="Introducir email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">TELEFONO</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Introducir telefono">
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

                    imgEncabezado: document.getElementById('imgEncabezado').files[0],
                    imgPerfil: document.getElementById('imgPerfil').files[0],
                    nombreEncab: document.getElementById('nombreEncab').value,
                    nombrePerfil: document.getElementById('nombrePerfil').value,
                    descripcion1: document.getElementById('descripcion1').value,
                    about1: document.getElementById('about1').value,
                    descripcion2: document.getElementById('descripcion2').value,
                    subT1: document.getElementById('subT1').value,
                    text1: document.getElementById('text1').value,
                    birth: document.getElementById('birth').value,
                    phone: document.getElementById('phone').value,
                    city: document.getElementById('city').value,
                    age: document.getElementById('age').value,
                    degree: document.getElementById('degree').value,
                    phemail: document.getElementById('phemail').value,
                    text: document.getElementById('text').value,
                    subT2: document.getElementById('subT2').value,
                    text2: document.getElementById('text2').value,
                    subT3: document.getElementById('subT3').value,
                    text3: document.getElementById('text3').value,
                    subT4: document.getElementById('subT4').value,
                    text4: document.getElementById('text4').value,
                    subT5: document.getElementById('subT5').value,
                    text5: document.getElementById('text5').value,
                    subT6: document.getElementById('subT6').value,
                    text6: document.getElementById('text6').value,
                    subT7: document.getElementById('subT7').value,
                    text7: document.getElementById('text7').value,
                    subT8: document.getElementById('subT8').value,
                    text8: document.getElementById('text8').value,
                    subT9: document.getElementById('subT9').value,
                    text9: document.getElementById('text9').value,
                    subT10: document.getElementById('subT10').value,
                    text10: document.getElementById('text10').value,
                    subT11: document.getElementById('subT11').value,
                    text11: document.getElementById('text11').value,
                    portafolio: document.getElementById('portafolio').value,
                    descripcion3: document.getElementById('descripcion3').value,
                    all1: document.getElementById('all1').value,
                    app1: document.getElementById('app1').value,
                    card1: document.getElementById('card1').value,
                    web1: document.getElementById('web1').value,
                    img1: document.getElementById('img1').files[0],
                    img2: document.getElementById('img2').files[0],
                    img3: document.getElementById('img3').files[0],
                    img4: document.getElementById('img4').files[0],
                    img5: document.getElementById('img5').files[0],
                    img6: document.getElementById('img6').files[0],
                    img7: document.getElementById('img7').files[0],
                    img8: document.getElementById('img8').files[0],
                    img9: document.getElementById('img9').files[0],
                    descripcion4: document.getElementById('descripcion4').value,
                    service: document.getElementById('service').value,
                    texto1: document.getElementById('texto1').value,
                    texto2: document.getElementById('texto2').value,
                    texto3: document.getElementById('texto3').value,
                    texto4: document.getElementById('texto4').value,
                    texto5: document.getElementById('texto5').value,
                    texto6: document.getElementById('texto6').value,
                    subTesti: document.getElementById('subTesti').value,
                    descripcion5: document.getElementById('descripcion5').value,
                    testi1: document.getElementById('testi1').value,
                    nomTes1: document.getElementById('nomTes1').value,
                    testi2: document.getElementById('testi2').value,
                    nomTes2: document.getElementById('nomTes2').value,
                    testi3: document.getElementById('testi3').value,
                    nomTes3: document.getElementById('nomTes3').value,
                    contact: document.getElementById('contact').value,
                    descripcion6: document.getElementById('descripcion6').value,
                    fase: document.getElementById('face').value,
                    whatsapp: document.getElementById('whatsapp').value,
                    instagram: document.getElementById('instagram').value,
                    twitter: document.getElementById('twitter').value,
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
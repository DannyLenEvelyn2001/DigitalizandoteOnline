<html lang="en">

<head>
    <?php
    include("head.php");
    include("../../conexion/conexion.php");
    ?>
    <title>Nueva Landing Page</title>
    <link href="css/stylee.css" rel="stylesheet">
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
                    <form id="formulario" class="row g-3" action="guardar.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idEmpresa" value="<?= $idEmpresa ?>">
                        <h2 class="titulosector">Aspectos Generales</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de Tarjeta:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto de perfil:</label>
                            <input class="form-control tituloimput" type="file" name="imgPerfil" id="imgPerfil">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Logo:</label>
                            <input class="form-control tituloimput" type="file" name="imgLogo" id="imgLogo">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color1" name="color1" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color2" name="color2" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Cargo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Slogan o cualquier texto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="slogan" id="slogan" placeholder="texto">
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Facebook:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Introducir link de facebook">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">GitHup:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="githup" id="githup" placeholder="Introducir link de GitHup">
                            </div>
                        </div>
                        <!-- HERO -->
                        <hr>
                        <h2 class="titulosector">Segundo apartado: Experiencia</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color3" name="color3" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="titulo1" id="titulo1" placeholder="Titulo Principal">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colo4Titulo" name="colo4Titulo" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punTitulo1" id="punTitulo1" placeholder="Titulo 1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punTitulo2" id="punTitulo2" placeholder="Titulo 2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punTitulo3" id="punTitulo3" placeholder="Titulo 3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punTitulo4" id="punTitulo4" placeholder="Titulo 4">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color5Desc" name="color5Desc" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punDesc1" id="punDesc1" placeholder="Descripcion 1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punDesc2" id="punDesc2" placeholder="Descripcion 2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punDesc3" id="punDesc3" placeholder="Descripcion 3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="punDesc4" id="punDesc4" placeholder="Descripcion 4">
                            </div>
                        </div>

                        <hr>
                        <h2 class="titulosector">Tercer apartado: Portafolio</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color6Por" name="color6Por" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituliPort" id="tituliPort" placeholder="Titulo del portafolio">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgDiseño1" id="imgDiseño1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgDiseño2" id="imgDiseño2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgDiseño3" id="imgDiseño3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgWeb1" id="imgWeb1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgWeb2" id="imgWeb2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgWeb3" id="imgWeb3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgApp1" id="imgApp1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgApp2" id="imgApp2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de Encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgApp3" id="imgApp3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <hr>
                        <h2 class="titulosector">Cuarto apartado: Premios</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color7TP" name="color7TP" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloPrem" id="tituloPrem" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color8Date" name="color8Date" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Fecha:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="fecha1" id="fecha1" placeholder="Fecha">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Fecha:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="fecha2" id="fecha2" placeholder="Fecha">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Sub-Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloP1" id="tituloP1" placeholder="Sub-Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Sub-Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloP2" id="tituloP2" placeholder="Sub-Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color9Desc" name="color9Desc" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Sub-Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descP1" id="descP1" placeholder="Sub-Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Sub-Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descP2" id="descP2" placeholder="Sub-Titulo">
                            </div>
                        </div>
                        <hr>
                        <h2 class="titulosector">Quinto apartado: Contacto</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color10Con" name="color10Con" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Contacto o cualquier otro titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="contacto" id="contacto" placeholder="Contacto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color11Con" name="color11Con" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="desCon" id="desCon" placeholder="Sub-Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color12" name="color12" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Direccion:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Telefono:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Correo electronico:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
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

                    title: document.getElementById('title').value,
                    imgPerfil: document.getElementById('imgPerfil').files[0],
                    imgEncabezado: document.getElementById('imgEncabezado').files[0],
                    imgLogo: document.getElementById('imgLogo').files[0],
                    color1: document.getElementById('color1').value,
                    nombre: document.getElementById('nombre').value,
                    color2: document.getElementById('color2').value,
                    cargo: document.getElementById('cargo').value,
                    slogan: document.getElementById('slogan').value,
                    facebook: document.getElementById('facebook').value,
                    githup: document.getElementById('githup').value,
                    color3: document.getElementById('color3').value,
                    titulo1: document.getElementById('titulo1').value,
                    colo4Titulo: document.getElementById('colo4Titulo').value,
                    punTitulo1: document.getElementById('punTitulo1').value,
                    punTitulo2: document.getElementById('punTitulo2').value,
                    punTitulo3: document.getElementById('punTitulo3').value,
                    punTitulo4: document.getElementById('punTitulo4').value,
                    color5Desc: document.getElementById('color5Desc').value,
                    punDesc1: document.getElementById('punDesc1').value,
                    punDesc2: document.getElementById('punDesc2').value,
                    punDesc3: document.getElementById('punDesc3').value,
                    punDesc4: document.getElementById('punDesc4').value,
                    color6Por: document.getElementById('color6Por').value,
                    tituliPort: document.getElementById('tituliPort').value,
                    imgDiseño1: document.getElementById('imgDiseño1').files[0],
                    imgDiseño2: document.getElementById('imgDiseño2').files[0],
                    imgDiseño3: document.getElementById('imgDiseño3').files[0],
                    imgWeb1: document.getElementById('imgWeb1').files[0],
                    imgWeb2: document.getElementById('imgWeb2').files[0],
                    imgWeb3: document.getElementById('imgWeb3').files[0],
                    imgApp1: document.getElementById('imgApp1').files[0],
                    imgApp2: document.getElementById('imgApp2').files[0],
                    imgApp3: document.getElementById('imgApp3').files[0],
                    color7TP: document.getElementById('color7TP').value,
                    tituloPrem: document.getElementById('tituloPrem').value,
                    color8Date: document.getElementById('color8Date').value,
                    fecha1: document.getElementById('fecha1').value,
                    fecha2: document.getElementById('fecha2').value,
                    tituloP1: document.getElementById('tituloP1').value,
                    tituloP2: document.getElementById('tituloP2').value,
                    color9Desc: document.getElementById('color9Desc').value,
                    descP1: document.getElementById('descP1').value,
                    descP2: document.getElementById('descP2').value,
                    color10Con: document.getElementById('color10Con').value,
                    contacto: document.getElementById('contacto').value,
                    color11Con: document.getElementById('color11Con').value,
                    desCon: document.getElementById('desCon').value,
                    color12: document.getElementById('color12').value,
                    direccion: document.getElementById('direccion').value,
                    telefono: document.getElementById('telefono').value,
                    email: document.getElementById('email').value,

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
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
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorLogo" name="colorLogo" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de Tarjeta:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="nomLogo" id="nomLogo" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorEnc" name="colorEnc" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de Tarjeta:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de Tarjeta:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de Tarjeta:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="imgEnc2" id="imgEnc2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorServ" name="colorServ" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de Tarjeta:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="servicios" id="servicios" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="imgServ1" id="imgServ1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="imgServ2" id="imgServ2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="imgServ3" id="imgServ3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="imgServ4" id="imgServ4">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorTserv" name="colorTserv" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloSer1" id="tituloSer1" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloSer2" id="tituloSer2" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloSer3" id="tituloSer3" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloSer4" id="tituloSer4" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorDeServ" name="colorDeServ" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descSer1" id="descSer1" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descSer2" id="descSer2" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descSer3" id="descSer3" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo del servicio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descSer4" id="descSer4" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="img3Perfil" id="img3Perfil">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorWho" name="colorWho" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloWho" id="tituloWho" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorDesc" name="colorDesc" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descWho" id="descWho" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen de fondo:</label>
                            <input class="form-control tituloimput" type="file" name="imgEnc3" id="imgEnc3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorComen" name="colorComen" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="tituloComent" id="tituloComent" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorC" name="colorC" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descC1" id="descC1" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descC2" id="descC2" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="nombreC1" id="nombreC1" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="nombreC2" id="nombreC2" placeholder="Titulo">
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
                    colorLogo: document.getElementById('colorLogo').value,
                    nomLogo: document.getElementById('nomLogo').value,
                    colorEnc: document.getElementById('colorEnc').value,
                    nombre: document.getElementById('nombre').value,
                    cargo: document.getElementById('cargo').value,
                    telefono: document.getElementById('telefono').value,
                    imgEncabezado: document.getElementById('imgEncabezado').files[0],
                    imgEnc2: document.getElementById('imgEnc2').files[0],
                    colorServ: document.getElementById('colorServ').value,
                    servicios: document.getElementById('servicios').value,
                    imgServ1: document.getElementById('imgServ1').files[0],
                    imgServ2: document.getElementById('imgServ2').files[0],
                    imgServ3: document.getElementById('imgServ3').files[0],
                    imgServ4: document.getElementById('imgServ4').files[0],
                    colorTserv: document.getElementById('colorTserv').value,
                    tituloSer1: document.getElementById('tituloSer1').value,
                    tituloSer2: document.getElementById('tituloSer2').value,
                    tituloSer2: document.getElementById('tituloSer2').value,
                    tituloSer4: document.getElementById('tituloSer4').value,
                    colorDeServ: document.getElementById('colorDeServ').value,
                    descSer1: document.getElementById('descSer1').value,
                    descSer2: document.getElementById('descSer2').value,
                    descSer3: document.getElementById('descSer3').value,
                    descSer4: document.getElementById('descSer4').value,
                    img3Perfil: document.getElementById('img3Perfil').files[0],
                    colorWho: document.getElementById('colorWho').value,
                    tituloWho: document.getElementById('tituloWho').value,
                    colorDesc: document.getElementById('colorDesc').value,
                    descWho: document.getElementById('descWho').value,
                    imgEnc3: document.getElementById('imgEnc3').files[0],
                    colorComen: document.getElementById('colorComen').value,
                    tituloComent: document.getElementById('tituloComent').value,
                    colorC: document.getElementById('colorC').value,
                    descC1: document.getElementById('descC1').value,
                    descC2: document.getElementById('descC2').value,
                    nombreC1: document.getElementById('nombreC1').value,
                    nombreC2: document.getElementById('nombreC2').value,


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
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
        $idColaborador = $_GET['b'];
    ?>

        <div class="container">
            <div class="page-content">
                <div data-bs-theme="dark">

                    <form id="formulario" class="row g-3" action="guardar.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="idEmpresa" value="<?= $idEmpresa ?>">
                        <input type="hidden" name="idColaborador" value="<?= $idColaborador ?>">

                        <!-- ASPECTOS GENERALES -->
                        <h2 class="titulosector">Aspectos Generales</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de la pestaña:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN ENCABEZADO</label>
                            <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorEncabezado" name="colorEncabezado" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Negocio:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="negocio" id="negocio" placeholder="Negocio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Teléfono:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Teléfono ">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN FRONTAL</label>
                            <input class="form-control tituloimput" type="file" name="imgFrontal" id="imgFrontal">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>

                        <!-- Descripción -->
                        <hr>
                        <h2 class="titulosector">Descripción</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorT1" name="colorT1" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Título:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="titulo1" id="titulo1" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descChech" id="descChech" placeholder="Descripción">
                            </div>
                        </div>
                        <!-- Descripción -->
                        <hr>
                        <h2 class="titulosector">Servicios</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorTiServ" name="colorTiServ" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Título:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="subTitulo1" id="subTitulo1" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Título:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="subTitulo2" id="subTitulo2" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorDesc" name="colorDesc" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descSub2" id="descSub2" placeholder="Descripción">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descSub1" id="descSub1" placeholder="Descripción">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN FRONTAL</label>
                            <input class="form-control tituloimput" type="file" name="imgSub1" id="imgSub1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN FRONTAL</label>
                            <input class="form-control tituloimput" type="file" name="imgSub2" id="imgSub2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <!-- Carrusel -->
                        <hr>
                        <h2 class="titulosector">Carrusel</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorCarrusel" name="colorCarrusel" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Título:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="tituloCarr" id="tituloCarr" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DE CARRUSEL</label>
                            <input class="form-control tituloimput" type="file" name="img1" id="img1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DE CARRUSEL</label>
                            <input class="form-control tituloimput" type="file" name="img2" id="img2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DE CARRUSEL</label>
                            <input class="form-control tituloimput" type="file" name="img3" id="img3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DE CARRUSEL</label>
                            <input class="form-control tituloimput" type="file" name="img4" id="img4">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <!--  -->
                        <hr>
                        <h2 class="titulosector">Extra</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color3" name="color3" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Perfil:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="perfil1" id="perfil1" placeholder="Perfil">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Perfil:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="perfil2" id="perfil2" placeholder="Perfil">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN</label>
                            <input class="form-control tituloimput" type="file" name="imgP1" id="imgP1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN</label>
                            <input class="form-control tituloimput" type="file" name="imgP2" id="imgP2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="desP1" id="desP1" placeholder="Descripción">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="desP2" id="desP2" placeholder="Descripción">
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
                    imgSub2: document.getElementById('imgSub2').files[0],
                    colorEncabezado: document.getElementById('colorEncabezado').value,
                    negocio: document.getElementById('negocio').value,
                    nombre: document.getElementById('nombre').value,
                    celular: document.getElementById('celular').value,
                    imgFrontal: document.getElementById('imgFrontal').files[0],
                    colorT1: document.getElementById('colorT1').value,
                    titulo1: document.getElementById('titulo1').value,
                    descChech: document.getElementById('descChech').value,
                    colorTiServ: document.getElementById('colorTiServ').value,
                    subTitulo1: document.getElementById('subTitulo1').value,
                    subTitulo2: document.getElementById('subTitulo2').value,
                    colorDesc: document.getElementById('colorDesc').value,
                    descSub1: document.getElementById('descSub1').value,
                    descSub2: document.getElementById('descSub2').value,
                    imgSub1: document.getElementById('imgSub1').files[0],
                    imgSub2: document.getElementById('imgSub2').files[0],
                    colorCarrusel: document.getElementById('colorCarrusel').value,
                    tituloCarr: document.getElementById('tituloCarr').value,
                    img1: document.getElementById('img1').files[0],
                    img2: document.getElementById('img2').files[0],
                    img3: document.getElementById('img3').files[0],
                    img4: document.getElementById('img4').files[0],
                    color3: document.getElementById('color3').value,
                    perfil1: document.getElementById('perfil1').value,
                    perfil2: document.getElementById('perfil2').value,
                    imgP1: document.getElementById('imgP1').files[0],
                    imgP2: document.getElementById('imgP2').files[0],
                    desP1: document.getElementById('desP1').value,
                    desP2: document.getElementById('desP2').value,
                    // descSub1: document.getElementById('descSub1').value,
                };

                // Enviar mensaje al popup de previsualización
                previsualizacionWindow.postMessage(formData, '*');
            });
        </script>

    <?php
    } else {
        header("Location: ../../../../conexion/conexion.php");
    }

    ?>
</body>

</html>
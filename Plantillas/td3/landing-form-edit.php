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

                    <form id="formulario" class="row g-3" action="guardar.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="idEmpresa" value="<?= $idEmpresa ?>">

                        <!-- ASPECTOS GENERALES -->
                        <h2 class="titulosector">ENCABEZADO</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre del encabezado</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="tituloEnc" id="tituloEnc" placeholder="Nombre del encabezado">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion Encabezado</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="tituloNombre" id="tituloNombre" placeholder="Descripcion Encabezado">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="tituloSubNom" id="tituloSubNom" placeholder="Descripcion">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen del Encabezado</label>
                            <input class="form-control tituloimput" type="file" name="imgEnc" id="imgEnc">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>

                        <!-- ACERCA DE MI -->
                        <hr>
                        <h2 class="titulosector">SOBRE MI</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Perfil:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="profile" id="profile" placeholder="Perfil">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Email:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Contacto:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
                            </div>
                        </div>

                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imagen del Perfil</label>
                            <input class="form-control tituloimput" type="file" name="imgPerfil" id="imgPerfil">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nota 1 Sobre Mi:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="subTitu" id="subTitu" placeholder="Nota 1 Sobre Mi:">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">DESCRIPCION:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descripcion1" id="descripcion1" placeholder="DESCRIPCION">
                            </div>
                        </div>


                        <!-- PORTAFOLIO -->
                        <hr>
                        <h2 class="titulosector">Portafolio</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo de tu portafolio:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="tituloPort" id="tituloPort" placeholder="Titulo de tu portafolio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripcion del portafolio:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="descPorta" id="descPorta" placeholder="Descripcion del portafolio">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN 1</label>
                            <input class="form-control tituloimput" type="file" name="imgP1" id="imgP1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="nomImg1" id="nomImg1" placeholder="Titulo imagen 1">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Fecha imagen 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="fechaImg1" id="fechaImg1" placeholder="Fecha de la imagen 1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 2</label>
                            <input class="form-control tituloimput" type="file" name="imgP2" id="imgP2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="nomImg2" id="nomImg2" placeholder="Titulo imagen 2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Fecha imagen 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="fechaImg2" id="fechaImg2" placeholder="Fecha de la imagen 2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 3</label>
                            <input class="form-control tituloimput" type="file" name="imgP3" id="imgP3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="nomImg3" id="nomImg3" placeholder="Titulo imagen 3">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Fecha imagen 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="fechaImg3" id="fechaImg3" placeholder="Fecha de la imagen 1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 4</label>
                            <input class="form-control tituloimput" type="file" name="imgP4" id="imgP4">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="nomImg4" id="nomImg4" placeholder="Titulo imagen 4">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Fecha imagen 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="fechaImg4" id="fechaImg4" placeholder="Fecha de la imagen 4">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 5</label>
                            <input class="form-control tituloimput" type="file" name="imgP5" id="imgP5">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="nomImg5" id="nomImg5" placeholder="Titulo imagen 5">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Fecha imagen 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="fechaImg5" id="fechaImg5" placeholder="Fecha de la imagen 5">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 6</label>
                            <input class="form-control tituloimput" type="file" name="imgP6" id="imgP6">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="nomImg6" id="nomImg6" placeholder="Titulo imagen 6">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Fecha imagen 6</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="fechaImg6" id="fechaImg6" placeholder="Fecha de la imagen 6">
                            </div>
                        </div>
                        <!-- SECCIÓN BLOG -->
                        <hr>
                        <h2 class="titulosector">BLOG</h2>
                        <hr class="hr">

                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo del blog:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="blogtitulo" id="blogtitulo" placeholder="Titulo del blog">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripcion del blog:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descBlog" id="descBlog" placeholder="Descripcion del blog">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 1</label>
                            <input class="form-control tituloimput" type="file" name="imgBlog1" id="imgBlog1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="tituloBlog1" id="tituloBlog1" placeholder="Titulo imagen 1">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Descripcion 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="descBlog1" id="descBlog1" placeholder="Descripcion imagen 1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 2</label>
                            <input class="form-control tituloimput" type="file" name="imgBlog2" id="imgBlog2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="tituloBlog2" id="tituloBlog2" placeholder="Titulo imagen 2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Descripcion 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="descBlog2" id="descBlog2" placeholder="Descripcion imagen 2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 3</label>
                            <input class="form-control tituloimput" type="file" name="imgBlog3" id="imgBlog3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo imagen 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="tituloBlog3" id="tituloBlog3" placeholder="Titulo imagen 3">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Descripcion 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="descBlog3" id="descBlog3" placeholder="Descripcion imagen 3">
                            </div>
                        </div>

                        <!-- SECCIÓN CONTACTO -->
                        <hr>
                        <h2 class="titulosector">CONTACTO</h2>
                        <hr class="hr">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="subTget" id="subTget" placeholder="Contacto">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripcion:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="desGet" id="desGet" placeholder="Descripcion del contacto">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Direccion</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
                            </div>
                        </div>
                        <!-- LINKS -->
                        <hr>
                        <h2 class="titulosector">REDES SOCIALES</h2>
                        <hr class="hr">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-whatsapp me-2"></i>whatsapp</span>
                                <input type="text" class="form-control" name="what" id="what" placeholder="Introducir link de whatsapp">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-facebook me-2"></i>facebook</span>
                                <input type="text" class="form-control" name="face" id="face" placeholder="Introducir link de facebook">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-instagram me-2"></i>instagram</span>
                                <input type="text" class="form-control" name="ins" id="ins" placeholder="Introducir link de instagram">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-twitter me-2"></i>Twitter</span>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Introducir link de Twitter">
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

                    tituloEnc: document.getElementById('tituloEnc').value,
                    imgEnc: document.getElementById('imgEnc').files[0],
                    tituloNombre: document.getElementById('tituloNombre').value,
                    tituloSubNom: document.getElementById('tituloSubNom').value,
                    imgPerfil: document.getElementById('imgPerfil').files[0],
                    name: document.getElementById('name').value,
                    profile: document.getElementById('profile').value,
                    email: document.getElementById('email').value,
                    celular: document.getElementById('celular').value,
                    subTitu: document.getElementById('subTitu').value,
                    descripcion1: document.getElementById('descripcion1').value,
                    tituloPort: document.getElementById('tituloPort').value,
                    descPorta: document.getElementById('descPorta').value,
                    imgP1: document.getElementById('imgP1').files[0],
                    imgP2: document.getElementById('imgP2').files[0],
                    imgP3: document.getElementById('imgP3').files[0],
                    imgP4: document.getElementById('imgP4').files[0],
                    imgP5: document.getElementById('imgP5').files[0],
                    imgP6: document.getElementById('imgP6').files[0],
                    nomImg1: document.getElementById('nomImg1').value,
                    nomImg2: document.getElementById('nomImg2').value,
                    nomImg3: document.getElementById('nomImg3').value,
                    nomImg4: document.getElementById('nomImg4').value,
                    nomImg5: document.getElementById('nomImg5').value,
                    nomImg6: document.getElementById('nomImg6').value,
                    fechaImg1: document.getElementById('fechaImg1').value,
                    fechaImg2: document.getElementById('fechaImg2').value,
                    fechaImg3: document.getElementById('fechaImg3').value,
                    fechaImg4: document.getElementById('fechaImg4').value,
                    fechaImg5: document.getElementById('fechaImg5').value,
                    fechaImg6: document.getElementById('fechaImg6').value,
                    blogtitulo: document.getElementById('blogtitulo').value,
                    descBlog: document.getElementById('descBlog').value,
                    imgBlog1: document.getElementById('imgBlog1').files[0],
                    imgBlog2: document.getElementById('imgBlog2').files[0],
                    imgBlog3: document.getElementById('imgBlog3').files[0],
                    tituloBlog1: document.getElementById('tituloBlog1').value,
                    tituloBlog2: document.getElementById('tituloBlog2').value,
                    tituloBlog3: document.getElementById('tituloBlog3').value,
                    descBlog1: document.getElementById('descBlog1').value,
                    descBlog2: document.getElementById('descBlog2').value,
                    descBlog3: document.getElementById('descBlog3').value,
                    subTget: document.getElementById('subTget').value,
                    desGet: document.getElementById('desGet').value,
                    direccion: document.getElementById('direccion').value,
                    face: document.getElementById('face').value,
                    ins: document.getElementById('ins').value,
                    what: document.getElementById('what').value,
                    twitter: document.getElementById('twitter').value,

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
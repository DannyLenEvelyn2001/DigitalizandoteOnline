<html lang="en">

<head>
    <?php
    include("head.php");
    include("../../conexion/conexion.php");
    ?>
    <title>Nueva Landing Page...</title>
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
                            <label class="form-label tituloimput">Logo:</label>
                            <input class="form-control tituloimput" type="file" name="logo" id="logo">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="color1T" name="color1T" class="form-control form-control-color" value="#060404" title="Elegir color">
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
                            <input type="color" id="color2CC" name="color2CC" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Cargo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Contacto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="Contacto">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto de encabezado:</label>
                            <input class="form-control tituloimput" type="file" name="imgEnca" id="imgEnca">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Facebook</span>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Introducir Facebook">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Instagram</span>
                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Introducir Intagram">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Pinterest</span>
                                <input type="text" class="form-control" name="pinterest" id="pinterest" placeholder="Introducir Pinterest">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Tipo de producto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descImgSueter" id="descImgSueter" placeholder="Tipo de producto">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto:</label>
                            <input class="form-control tituloimput" type="file" name="imgSueteres" id="imgSueteres">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Tipo de producto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descImgShoes" id="descImgShoes" placeholder="Tipo de producto">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto:</label>
                            <input class="form-control tituloimput" type="file" name="imgShoes" id="imgShoes">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Tipo de producto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="descImgAcce" id="descImgAcce" placeholder="Tipo de producto">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto:</label>
                            <input class="form-control tituloimput" type="file" name="imgAccesorio" id="imgAccesorio">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorTitulo" name="colorTitulo" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="titulo1" id="titulo1" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto de Producto:</label>
                            <input class="form-control tituloimput" type="file" name="imgPro1" id="imgPro1">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto de Producto:</label>
                            <input class="form-control tituloimput" type="file" name="imgPro2" id="imgPro2">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto de Producto:</label>
                            <input class="form-control tituloimput" type="file" name="imgPro3" id="imgPro3">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-9">
                            <label class="form-label tituloimput">Foto de Producto:</label>
                            <input class="form-control tituloimput" type="file" name="imgPro4" id="imgPro4">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Texto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="text1" id="text1" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Texto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="text2" id="text2" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Texto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="text3" id="text3" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Texto:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="text4" id="text4" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorDes" name="colorDes" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="desc1" id="desc1" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="desc2" id="desc2" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="desc3" id="desc3" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Descripción:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="desc4" id="desc4" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="colorPre" name="colorPre" class="form-control form-control-color" value="#060404" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Precio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="precio1" id="precio1" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Precio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="precio2" id="precio2" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Precio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="precio3" id="precio3" placeholder="$$">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Precio:</label>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="precio4" id="precio4" placeholder="$$">
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
                    logo: document.getElementById('logo').files[0],
                    color1T: document.getElementById('color1T').value,
                    nombre: document.getElementById('nombre').value,
                    color2CC: document.getElementById('color2CC').value,
                    cargo: document.getElementById('cargo').value,
                    celular: document.getElementById('celular').value,
                    imgEnca: document.getElementById('imgEnca').files[0],
                    facebook: document.getElementById('facebook').value,
                    instagram: document.getElementById('instagram').value,
                    pinterest: document.getElementById('pinterest').value,
                    descImgSueter: document.getElementById('descImgSueter').value,
                    imgSueteres: document.getElementById('imgSueteres').files[0],
                    descImgShoes: document.getElementById('descImgShoes').value,
                    imgShoes: document.getElementById('imgShoes').files[0],
                    descImgAcce: document.getElementById('descImgAcce').value,
                    imgAccesorio: document.getElementById('imgAccesorio').files[0],
                    colorTitulo: document.getElementById('colorTitulo').value,
                    titulo1: document.getElementById('titulo1').value,
                    imgPro1: document.getElementById('imgPro1').files[0],
                    imgPro2: document.getElementById('imgPro2').files[0],
                    imgPro3: document.getElementById('imgPro3').files[0],
                    imgPro4: document.getElementById('imgPro4').files[0],
                    text1: document.getElementById('text1').value,
                    text2: document.getElementById('text2').value,
                    text3: document.getElementById('text3').value,
                    text4: document.getElementById('text4').value,
                    colorDes: document.getElementById('colorDes').value,
                    desc1: document.getElementById('desc1').value,
                    desc2: document.getElementById('desc2').value,
                    desc3: document.getElementById('desc3').value,
                    desc4: document.getElementById('desc4').value,
                    colorPre: document.getElementById('colorPre').value,
                    precio1: document.getElementById('precio1').value,
                    precio2: document.getElementById('precio2').value,
                    precio3: document.getElementById('precio3').value,
                    precio4: document.getElementById('precio4').value,


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
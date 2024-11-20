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
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN ENCABEZADO</label>
                            <input class="form-control tituloimput" type="file" name="imgEncabezado" id="imgEncabezado">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Concepto:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Concepto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-twitter me-2"></i>X</span>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="X">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-facebook me-2"></i>facebook</span>
                                <input type="text" class="form-control" name="face" id="face" placeholder="facebook">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-instagram me-2"></i>instagram</span>
                                <input type="text" class="form-control" name="ints" id="ints" placeholder="instagram">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-whatsapp me-2"></i>whatsapp</span>
                                <input type="text" class="form-control" name="what" id="what" placeholder="whatsapp">
                            </div>
                        </div>

                        <hr>
                        <h2 class="titulosector">SOBRE MI</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="about1" id="about1" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="descAbout" id="descAbout" placeholder="Descripción" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN DE PERFIL</label>
                            <input class="form-control tituloimput" type="file" name="imgPerfil" id="imgPerfil">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Sub Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="subTituloA" id="subTituloA" placeholder="Sub Titulo">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="descSub" id="descSub" placeholder="Descripción" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Cumpleaños:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Cumpleaños">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Telefono:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Ciudad:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="city" id="city" placeholder="Ciudad">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Año:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="age" id="age" placeholder="Año">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Grado:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="degree" id="degree" placeholder="Grado">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="descripcion2" id="descripcion2" placeholder="Descripción" rows="2"></textarea>
                            </div>
                        </div>


                        <hr>
                        <h2 class="titulosector">RESUMEN</h2>
                        <hr class="hr">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="sumary" id="sumary" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="descripcion3" id="descripcion3" placeholder="Descripción" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Resumen: Ingresa tu nombre</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nombreSumary" id="nombreSumary" placeholder="Ingresa tu nombre">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Resumen: Ingresa una descripcion</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descSumary" id="descSumary" placeholder="Ingresa una descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Educación: Ingresa tu educación</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nombreEscu" id="nombreEscu" placeholder="Ingresa tu educación">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Educación: Ingresa una descripcion</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descEducacion" id="descEducacion" placeholder="Ingresa una descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Experiencia profesional: Lugar 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nombreProf" id="nombreProf" placeholder="Experiencia profesional">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Resumen: Ingresa una descripcion</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descProfe" id="descProfe" placeholder="Ingresa una descripcion">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Experiencia profesional: Lugar 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="nombreExp" id="nombreExp" placeholder="Experiencia profesional">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Resumen: Ingresa una descripcion</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descExpe" id="descExpe" placeholder="Ingresa una descripcion">
                            </div>
                        </div>

                        <hr>
                        <h2 class="titulosector">PORTAFOLIO</h2>
                        <hr class="hr">

                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="portaFo" id="portaFo" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="descripcionPort" id="descripcionPort" placeholder="Descripción" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub Categoria 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="all1" id="all1" placeholder="Sub Categoria">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub Categoria 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="app1" id="app1" placeholder="Sub Categoria">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub Categoria 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="card1" id="card1" placeholder="Sub Categoria">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Sub Categoria 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="web1" id="web1" placeholder="Sub Categoria">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">IMAGENES DEL PORTAFOLIO</label>
                        </div>
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


                        <hr>
                        <h2 class="titulosector">SERVICIOS</h2>
                        <hr class="hr">

                        <div class="col-md-5">
                            <label class="form-label tituloimput">Título</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="tituloServi" id="tituloServi" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Descripción</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="descServ" id="descServ" placeholder="Descripción" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Servicio 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="loremIpsum" id="loremIpsum" placeholder="Servicio">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripcion del servicio 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descLorem" id="descLorem" placeholder="Descripcion del servicio">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Servicio 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="sedPer" id="sedPer" placeholder="Servicio">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripcion del servicio 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descSed" id="descSed" placeholder="Descripcion del servicio">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Servicio 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="magni" id="magni" placeholder="Servicio">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Descripcion del servicio 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="descMagni" id="descMagni" placeholder="Descripcion del servicio">
                            </div>
                        </div>


                        <hr>
                        <h2 class="titulosector">CONTACTO</h2>
                        <hr class="hr">
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Localidad:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="localidad" id="localidad" placeholder="Localidad">
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

                    nombre: document.getElementById('nombre').value,
                    cargo: document.getElementById('cargo').value,
                    imgEncabezado: document.getElementById('imgEncabezado').files[0],
                    ints: document.getElementById('ints').value,
                    what: document.getElementById('what').value,
                    face: document.getElementById('face').value,
                    twitter: document.getElementById('twitter').value,
                    about1: document.getElementById('about1').value,
                    descAbout: document.getElementById('descAbout').value,
                    imgPerfil: document.getElementById('imgPerfil').files[0],
                    subTituloA: document.getElementById('subTituloA').value,
                    descSub: document.getElementById('descSub').value,
                    birthday: document.getElementById('birthday').value,
                    phone: document.getElementById('phone').value,
                    city: document.getElementById('city').value,
                    age: document.getElementById('age').value,
                    degree: document.getElementById('degree').value,
                    email: document.getElementById('email').value,
                    descripcion2: document.getElementById('descripcion2').value,
                    sumary: document.getElementById('sumary').value,
                    descripcion3: document.getElementById('descripcion3').value,
                    nombreSumary: document.getElementById('nombreSumary').value,
                    descSumary: document.getElementById('descSumary').value,
                    nombreEscu: document.getElementById('nombreEscu').value,
                    descEducacion: document.getElementById('descEducacion').value,
                    nombreProf: document.getElementById('nombreProf').value,
                    descProfe: document.getElementById('descProfe').value,
                    nombreExp: document.getElementById('nombreExp').value,
                    descExpe: document.getElementById('descExpe').value,
                    portaFo: document.getElementById('portaFo').value,
                    descripcionPort: document.getElementById('descripcionPort').value,
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
                    tituloServi: document.getElementById('tituloServi').value,
                    descServ: document.getElementById('descServ').value,
                    loremIpsum: document.getElementById('loremIpsum').value,
                    descLorem: document.getElementById('descLorem').value,
                    sedPer: document.getElementById('sedPer').value,
                    descSed: document.getElementById('descSed').value,
                    magni: document.getElementById('magni').value,
                    descMagni: document.getElementById('descMagni').value,
                    localidad: document.getElementById('localidad').value,
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
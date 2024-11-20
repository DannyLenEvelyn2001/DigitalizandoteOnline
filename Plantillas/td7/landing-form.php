<html lang="en">

<head>
    <?php
    include("head.php");
    include("../../conexion/conexion.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h2 class="titulosector">MENU DEL ENCABEZADO</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto del logo</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Logo/slogan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Boton Inicio</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Inicio">
                            </div>
                        </div>
                        <hr class="hr">
                        <h2 class="titulosector">ENCABEZADO</h2>
                        <hr class="hr">
                        <div class="col-md-9">
                            <label class="form-label tituloimput">IMAGEN DEL ENCABEZADO</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>1200 x 700</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto para la descripcion del encabezado</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Concepto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Cargo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Concepto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Contacto:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Concepto">
                            </div>
                        </div>

                        <hr class="hr">
                        <h2 class="titulosector">Contenido</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Titulo">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto para los titulos</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Sub titulo 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Sub Titulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Punto 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Ingresa una descripcion leve">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Punto 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Ingresa una descripcion leve">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Punto 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Ingresa una descripcion leve">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto para los titulos</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN </label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>

                        <hr class="hr">
                        <h2 class="titulosector"> SEGUNDO APARTADO </h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Titulo 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Ingresa una descripcion leve">
                            </div>
                            <div class="col-md-10">
                                <label class="form-label tituloimput">DESSCRIPCIÓN:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                    <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color para cuadro de texto</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color para los iconos</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto titulo</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto, descripcion</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo de servicio 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Sub Titulo">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo de servicio 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Sub Titulo">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Titulo de servicio 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Sub Titulo">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>

                        <hr class="hr">
                        <h2 class="titulosector"> TERCER PARTE </h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de fondo de iconos</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de iconos</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 4:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 5:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 6:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 7:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">ICONO 8:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="ICONO">
                            </div>
                        </div>

                        <hr class="hr">
                        <h2 class="titulosector"> CUARTA PARTE</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de titulo</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">TITULO</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="TITULO"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 1</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 2</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 3</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">PRECIO 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="$$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">PRECIO 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="$$$">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">PRECIO 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="$$$">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">SUB TITULO 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="sub titulo"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">SUB TITULO 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="sub titulo"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">SUB TITULO 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="sub titulo"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 1:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 2:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN 3:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <hr class="hr">
                        <h2 class="titulosector"> QUINTA PARTE</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Locacion:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Direccion/Ubicación">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">E-mail:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="email@hotmail.com">
                            </div>
                        </div>
                        <hr class="hr">
                        <h2 class="titulosector"> SEXTA PARTE</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 1</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 2</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">IMAGEN 3</label>
                            <input class="form-control tituloimput" type="file" name="" id="">
                            <div class="form-text">(Preferible <strong>3000 x 2000</strong> pixeles)</div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <hr class="hr">
                        <h2 class="titulosector">SEPTIMA PARTE</h2>
                        <hr class="hr">
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">DESSCRIPCIÓN:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="" id="" placeholder="descripcion"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de texto</label>
                            <input type="color" id="" name="" class="form-control form-control-color" value="#000" title="Elegir color">
                        </div>
                        <hr>
                        <div class="col-md-5">
                            <label class="form-label tituloimput">Titulo:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="" id="" placeholder="Titulo">
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

                    logoText: document.getElementById('logoText').value,
                    colorLogo: document.getElementById('colorLogo').value,
                    btnInicio: document.getElementById('btnInicio').value,
                    nombre: document.getElementById('nombre').value,
                    cargo: document.getElementById('cargo').value,
                    imgEnca: document.getElementById('imgEnca').files[0],
                    tel: document.getElementById('tel').value,
                    colorCargo: document.getElementById('colorCargo').value,
                    titulo1: document.getElementById('titulo1').value,
                    color1: document.getElementById('color1').value,
                    subTitu1: document.getElementById('subTitu1').value,
                    punt1: document.getElementById('punt1').value,
                    punt2: document.getElementById('punt2').value,
                    punt3: document.getElementById('punt3').value,
                    color2: document.getElementById('color2').value,
                    img1: document.getElementById('img1').files[0],
                    titulo2C: document.getElementById('titulo2C').value,
                    descripcion: document.getElementById('descripcion').value,
                    color3: document.getElementById('color3').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    color1: document.getElementById('color1').value,
                    subTitu1

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
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
    ?>

        <div class="container">
            <div class="page-content">

            </div>
        </div>

        <!-- <script>
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
                    about1: document.getElementById('about1').value,
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
        </script> -->

    <?php
    } else {
        header("Location: ../../../../conexion/conexion.php");
    }
    ?>
</body>

</html>
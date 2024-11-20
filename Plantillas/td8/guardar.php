<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("head.php");
    include("../../conexion/conexion.php");
    ?>
    <title>Guardando...</title>

</head>

<body class="text-dark">

    <?php
    if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida
    ?>

        <div class="container" style="margin-top: 70px; margin-bottom: 50px;">
            <?php
            // OBTENCIÓN DE VARIABLES
            $id = $_REQUEST['id']; // Sí esta variable se recibe significa que se trata de una edición.
            $colorEnca = trim($_POST['colorEnca']);
            $tituloEnca = trim($_POST['tituloEnca']);
            $inicio = trim($_POST['inicio']);
            $espacio = trim($_POST['espacio']);
            $servicios = trim($_POST['servicios']);
            $nombre = trim($_POST['nombre']);
            $cargo = trim($_POST['cargo']);
            $btnModal1 = trim($_POST['btnModal1']);
            $color2 = trim($_POST['color2']);
            $titulo1 = trim($_POST['titulo1']);
            $subtitulo1 = trim($_POST['subtitulo1']);
            $subtitulo2 = trim($_POST['subtitulo2']);
            $subtitulo3 = trim($_POST['subtitulo3']);
            $color3 = trim($_POST['color3']);
            $descrip1 = trim($_POST['descrip1']);
            $descrip2 = trim($_POST['descrip2']);
            $descrip3 = trim($_POST['descrip3']);
            $color4T = trim($_POST['color4T']);
            $titulo2 = trim($_POST['titulo2']);
            $color5S = trim($_POST['color5S']);
            $subD1 = trim($_POST['subD1']);
            $subS2 = trim($_POST['subS2']);
            $color6T = trim($_POST['color6T']);
            $textSub1 = trim($_POST['textSub1']);
            $textSub2 = trim($_POST['textSub2']);
            $imgSub1 = trim($_POST['imgSub1']);
            $imgSub2 = trim($_POST['imgSub2']);
            $titulo3 = trim($_POST['titulo3']);

            $color4 = trim($_POST['color4']);
            $tituloPor = trim($_POST['tituloPor']);
            $color5 = trim($_POST['color5']);
            $subTitulo = trim($_POST['subTitulo']);
            $color6 = trim($_POST['color6']);
            $color7 = trim($_POST['color7']);
            $hiperImg1 = trim($_POST['hiperImg1']);
            $separa1 = trim($_POST['separa1']);
            $hiperImg2 = trim($_POST['hiperImg2']);
            $separa2 = trim($_POST['separa2']);
            $hiperImg3 = trim($_POST['hiperImg3']);
            $separa3 = trim($_POST['separa3']);
            $color8 = trim($_POST['color8']);
            $all1 = trim($_POST['all1']);
            $app1 = trim($_POST['app1']);
            $card1 = trim($_POST['card1']);
            $web1 = trim($_POST['web1']);
            $color9 = trim($_POST['color9']);
            $get = trim($_POST['get']);
            $color10 = trim($_POST['color10']);
            $calle = trim($_POST['calle']);
            $ciudad = trim($_POST['ciudad']);
            $tel = trim($_POST['tel']);
            $email = trim($_POST['email']);
            $idEmpresa = $_POST['idEmpresa']; // ! Para que no se me olvide

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from plandiseno");
                while ($dato = mysqli_fetch_array($query)) {
                    $maxid = $dato['MAX(id)'] + 1;
                }

                $directorioDestino = "img/$maxid/";
                // Directorio donde se creará la carpeta de imágenes
                $rutaCompleta = "img/$maxid";
            }

            // Verificar si la carpeta ya existe antes de crearla
            if (!file_exists($rutaCompleta)) {
                if (mkdir($rutaCompleta, 0777, true)) {
                }
            }
            // LOGO
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Verificar si se ha seleccionado un archivo
                if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == 0) {

                    // Obtener la extensión del archivo
                    $infoArchivo = pathinfo($_FILES["logo"]["name"]);
                    $extension = $infoArchivo["extension"];

                    // Generar un nombre único para el archivo
                    $logo = "logo.$extension";

                    // Ruta completa del archivo de destino
                    $rutaCompleta = $directorioDestino . $logo;

                    // Mover el archivo cargado al directorio de destino
                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $rutaCompleta)) {
                        echo "Logo subido y almacenado con éxito. Nombre: $logo";
                    } else {
                        echo "Error al subir el Logo.";
                    }
                } else {
                    echo "<br>No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // IMGENCABEZADO
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgEncabezado"]) && $_FILES["imgEncabezado"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgEncabezado"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria1 = "imgEncabezado.$extension";
                    $rutaCompleta = $directorioDestino . $galeria1;

                    if (move_uploaded_file($_FILES["imgEncabezado"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria1";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // IMGCONTENIDO
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgContenido"]) && $_FILES["imgContenido"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgContenido"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria2 = "imgContenido.$extension";
                    $rutaCompleta = $directorioDestino . $galeria2;

                    if (move_uploaded_file($_FILES["imgContenido"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria2";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // C1IMG
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["c1img"]) && $_FILES["c1img"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["c1img"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "c1img.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["c1img"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // C2IMG
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["c2img"]) && $_FILES["c2img"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["c2img"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "c2img.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["c2img"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // C3IMG
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["c3img"]) && $_FILES["c3img"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["c3img"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria5 = "c3img.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["c3img"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // C1IMG2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["c1img2"]) && $_FILES["c1img2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["c1img2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria6 = "c1img2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["c1img2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // C2IMG2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["c2img2"]) && $_FILES["c2img2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["c2img2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria7 = "c2img2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["c2img2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // C3IMG2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["c3img2"]) && $_FILES["c3img2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["c3img2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria8 = "c3img2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["c3img2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // IMGC1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgc1"]) && $_FILES["imgc1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgc1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria9 = "imgc1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria9;

                    if (move_uploaded_file($_FILES["imgc1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria9";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // IMGC2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgc2"]) && $_FILES["imgc2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgc2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria10 = "imgc2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria10;

                    if (move_uploaded_file($_FILES["imgc2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria10";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // IMGC3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgc3"]) && $_FILES["imgc3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgc3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria11 = "imgc3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria11;

                    if (move_uploaded_file($_FILES["imgc3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria11";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }

            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM plandiseno WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {
                    if ($logo == '') {
                        $logo = $dato['logo'];
                    }
                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgEncabezado'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgContenido'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['c1img'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['c2img'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['c3img'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['c1img2'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['c2img2'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['c3img2'];
                    }
                    if ($galeria9 == '') {
                        $galeria9 = $dato['imgc1'];
                    }
                    if ($galeria10 == '') {
                        $galeria10 = $dato['imgc2'];
                    }
                    if ($galeria11 == '') {
                        $galeria11 = $dato['imgc3'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE plandiseno SET logo = '$logo', home1 = '$home1', about = '$about', portafolio = '$portafolio', blog = '$blog', colorEncabezado = '$colorEncabezado', nombre = '$nombre', descripcion1 = '$descripcion1', imgEncabezado = '$galeria1', whatsapp = '$whatsapp', facebook = '$facebook', instagram = '$instagram', twitter = '$twitter', imgContenido = '$galeria2', color1 = '$color1', descripcion2 = '$descripcion2', colorIconos = '$colorIconos', color2Primario = '$color2Primario', cajaT1 = '$cajaT1', cajaT2 = '$cajaT2', cajaT3 = '$cajaT3', cajaT4 = '$cajaT4', cajaT5 = '$cajaT5', cajaT6 = '$cajaT6', color3Secundario = '$color3Secundario', subCaja1 = '$subCaja1', subCaja2 = '$subCaja2', subCaja3 = '$subCaja3', subCaja4 = '$subCaja4', subCaja5 = '$subCaja5', subCaja6 = '$subCaja6', color4 = '$color4', tituloPor = '$tituloPor', c1img = '$galeria3', c2img = '$galeria4', c3img = '$galeria5', c1img2 = '$galeria6', c2img2 = '$galeria7', c3img2 = '$galeria8', color5 = '$color5', subTitulo = '$subTitulo', color6 = '$color6', color7 = '$color7', imgc1 = '$galeria9', imgc2 = '$galeria10', imgc3 = '$galeria11', color8 = '$color8', hiperImg1 = '$hiperImg1', separa1 = '$separa1', hiperImg2 = '$hiperImg2', separa2 = '$separa2', hiperImg3 = '$hiperImg3', separa3 = '$separa3', color9 = '$color9', all1 = '$all1', app1 = '$app1', card1 = '$card1', web1 = '$web1', color10 = '$color10', get = '$get', calle = '$calle', ciudad = '$ciudad', tel = '$tel', email = '$email', fecha='$hoy'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                echo "Hola mundo";
                $query = $link->query("INSERT INTO plandiseno VALUES ('', '$logo', '$home1', '$about', '$portafolio', '$blog', '$colorEncabezado', '$nombre', '$descripcion1', '$galeria1', '$whatsapp', '$facebook', '$instagram', '$twitter', '$galeria2', '$color1', '$descripcion2', '$colorIconos', '$color2Primario', '$cajaT1', '$cajaT2', '$cajaT3', '$cajaT4', '$cajaT5', '$cajaT6', '$color3Secundario', '$subCaja1', '$subCaja2', '$subCaja3', '$subCaja4', '$subCaja5', '$subCaja6', '$color4', '$tituloPor', '$galeria3', '$galeria4', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$color5', '$subTitulo', '$color6', '$color7', '$galeria9', '$galeria10', '$galeria11', '$hiperImg1', '$separa1', '$hiperImg2', '$separa2', '$hiperImg3', '$separa3', '$color8', '$all1', '$app1', '$card1', '$web1', '$color9', '$get', '$color10', '$calle', '$ciudad', '$tel', '$email', '$hoy', '1')");

                $query = $link->query("SELECT MAX(id) FROM plandiseno");
                while ($dato = mysqli_fetch_array($query)) {
                    $id = $dato['MAX(id)'];
                }

                // Asocia registro con la empresa
                $query = $link->query("INSERT INTO relplantilla VALUES ('', '$idEmpresa', '1', '$id', '1')");
                echo "fin";
            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            }
            ?>
        </div>
    <?php
    } else {
        header("Location: ../../../../login/login.php");
    }
    ?>
</body>

</html>
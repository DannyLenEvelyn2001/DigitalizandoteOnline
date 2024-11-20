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
            $title = trim($_POST['title']);
            $color1T = trim($_POST['color1T']);
            $nombre = trim($_POST['nombre']);
            $color2CC = trim($_POST['color2CC']);
            $cargo = trim($_POST['cargo']);
            $celular = trim($_POST['celular']);
            $facebook = trim($_POST['facebook']);
            $instagram = trim($_POST['instagram']);
            $pinterest = trim($_POST['pinterest']);
            $descImgSueter = trim($_POST['descImgSueter']);
            $descImgShoes = trim($_POST['descImgShoes']);
            $descImgAcce = trim($_POST['descImgAcce']);
            $colorTitulo = trim($_POST['colorTitulo']);
            $titulo1 = trim($_POST['titulo1']);
            $text1 = trim($_POST['text1']);
            $text2 = trim($_POST['text2']);
            $text3 = trim($_POST['text3']);
            $text4 = trim($_POST['text4']);
            $colorDes = trim($_POST['colorDes']);
            $desc1 = trim($_POST['desc1']);
            $desc2 = trim($_POST['desc2']);
            $desc3 = trim($_POST['desc3']);
            $desc4 = trim($_POST['desc4']);
            $colorPre = trim($_POST['colorPre']);
            $precio1 = trim($_POST['precio1']);
            $precio2 = trim($_POST['precio2']);
            $precio3 = trim($_POST['precio3']);
            $precio4 = trim($_POST['precio4']);


            $idEmpresa = $_POST['idEmpresa']; // ! Para que no se me olvide

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planmodas");
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
            // imgEnca
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgEnca"]) && $_FILES["imgEnca"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgEnca"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria1 = "imgEnca.$extension";
                    $rutaCompleta = $directorioDestino . $galeria1;

                    if (move_uploaded_file($_FILES["imgEnca"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria1";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgSueteres
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgSueteres"]) && $_FILES["imgSueteres"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgSueteres"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria2 = "imgSueteres.$extension";
                    $rutaCompleta = $directorioDestino . $galeria2;

                    if (move_uploaded_file($_FILES["imgSueteres"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria2";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgShoes
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgShoes"]) && $_FILES["imgShoes"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgShoes"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "imgShoes.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["imgShoes"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgAccesorio
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgAccesorio"]) && $_FILES["imgAccesorio"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgAccesorio"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "imgAccesorio.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["imgAccesorio"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgPro1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgPro1"]) && $_FILES["imgPro1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgPro1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria5 = "imgPro1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["imgPro1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgPro2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgPro2"]) && $_FILES["imgPro2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgPro2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria6 = "imgPro2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["imgPro2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgPro3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgPro3"]) && $_FILES["imgPro3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgPro3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria7 = "imgPro3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["imgPro3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgPro4
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgPro4"]) && $_FILES["imgPro4"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgPro4"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria8 = "imgPro4.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["imgPro4"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // sssssssss


            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM planmodas WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {
                    if ($logo == '') {
                        $logo = $dato['logo'];
                    }
                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgEnca'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgSueteres'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['imgShoes'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['imgAccesorio'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['imgPro1'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['imgPro2'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['imgPro3'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['imgPro4'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE planmodas SET title = '$title', logo = '$logo', color1T = '$color1T', nombre = '$nombre', color2CC = '$color2CC', cargo = '$cargo', celular = '$celular', imgEnca = '$galeria1', facebook = '$facebook', instagram = '$instagram', pinterest = '$pinterest', descImgSueter = '$descImgSueter', imgSueteres = '$galeria2', descImgShoes = '$descImgShoes', imgShoes = '$galeria3', descImgAcce = '$descImgAcce', imgAccesorio = '$galeria4', colorTitulo = '$colorTitulo', titulo1 = '$titulo1', imgPro1 = '$galeria5', imgPro2 = '$galeria6', imgPro3 = '$galeria7', imgPro4 = '$galeria8', text1 = '$text1', text2 = '$text2', text3 = '$text3', text4 = '$text4', colorDes = '$colorDes', desc1 = '$desc1', desc2 = '$desc2', desc3 = '$desc3', desc4 = '$desc4', colorPre = '$colorPre', precio1 = '$precio1', precio2 = '$precio2', precio3 = '$precio3', precio4 = '$precio4', fecha='$hoy'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                echo "Hola mundo";
                $query = $link->query("INSERT INTO planmodas VALUES ('', '$title', '$logo', '$color1T', '$nombre', '$color2CC', '$cargo', '$celular', '$galeria1', '$facebook', '$instagram', '$pinterest', '$descImgSueter', '$galeria2', '$descImgShoes', '$galeria3', '$descImgAcce', '$galeria4', '$colorTitulo', '$titulo1', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$text1', '$text2', '$text3', '$text4', '$colorDes', '$desc1', '$desc2', '$desc3', '$desc4', '$colorPre', '$precio1', '$precio2', '$precio3', '$precio4', '$hoy', '1')");

                $query = $link->query("SELECT MAX(id) FROM planmodas");
                while ($dato = mysqli_fetch_array($query)) {
                    $id = $dato['MAX(id)'];
                }

                // Asocia registro con la empresa
                // ! Cambiar idColaborador. Debe traerse antes de guardar
                $query = $link->query("SELECT MAX(idColaborador) FROM relcolaborador WHERE idEmpresa = '$idEmpresa' AND activo = '1'");
                while ($dato = mysqli_fetch_array($query)) {
                    $idColaborador = $dato['MAX(idColaborador)'];
                }

                $query = $link->query("INSERT INTO reltarjeta VALUES ('', '$idColaborador', '1', '$id', '$hoy', '1')");
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
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
            $nombre = trim($_POST['nombre']);
            $cargo = trim($_POST['cargo']);
            $ints = trim($_POST['ints']);
            $what = trim($_POST['what']);
            $face = trim($_POST['face']);
            $twitter = trim($_POST['twitter']);
            $cargo1 = trim($_POST['cargo1']);
            $desccargo = trim($_POST['desccargo']);
            $subTituloA = trim($_POST['subTituloA']);
            $descSub = trim($_POST['descSub']);
            $birthday = trim($_POST['birthday']);
            $phone = trim($_POST['phone']);
            $city = trim($_POST['city']);
            $age = trim($_POST['age']);
            $degree = trim($_POST['degree']);
            $email = trim($_POST['email']);
            $descripcion2 = trim($_POST['descripcion2']);
            $sumary = trim($_POST['sumary']);
            $descripcion3 = trim($_POST['descripcion3']);
            $nombreSumary = trim($_POST['nombreSumary']);
            $descSumary = trim($_POST['descSumary']);
            $nombreEscu = trim($_POST['nombreEscu']);
            $descEducacion = trim($_POST['descEducacion']);
            $nombreProf = trim($_POST['nombreProf']);
            $descProfe = trim($_POST['descProfe']);
            $nombreExp = trim($_POST['nombreExp']);
            $descExpe = trim($_POST['descExpe']);
            $portaFo = trim($_POST['portaFo']);
            $descripcionPort = trim($_POST['descripcionPort']);
            $all1 = trim($_POST['all1']);
            $app1 = trim($_POST['app1']);
            $card1 = trim($_POST['card1']);
            $web1 = trim($_POST['web1']);
            $tituloServi = trim($_POST['tituloServi']);
            $descServ = trim($_POST['descServ']);
            $loremIpsum = trim($_POST['loremIpsum']);
            $descLorem = trim($_POST['descLorem']);
            $sedPer = trim($_POST['sedPer']);
            $descSed = trim($_POST['descSed']);
            $magni = trim($_POST['magni']);
            $descMagni = trim($_POST['descMagni']);
            $localidad = trim($_POST['localidad']);


            $idEmpresa = $_POST['idEmpresa'];

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planentrenador");
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
            // imgPerfil
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgPerfil"]) && $_FILES["imgPerfil"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgPerfil"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria2 = "imgPerfil.$extension";
                    $rutaCompleta = $directorioDestino . $galeria2;

                    if (move_uploaded_file($_FILES["imgPerfil"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria2";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img1"]) && $_FILES["img1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "img1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["img1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img2"]) && $_FILES["img2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "img2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["img2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img3"]) && $_FILES["img3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria5 = "img3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["img3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img4
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img4"]) && $_FILES["img4"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img4"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria6 = "img4.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["img4"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img5
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img5"]) && $_FILES["img5"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img5"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria7 = "img5.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["img5"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img6
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img6"]) && $_FILES["img6"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img6"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria8 = "img6.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["img6"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img7
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img7"]) && $_FILES["img7"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img7"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria9 = "img7.$extension";
                    $rutaCompleta = $directorioDestino . $galeria9;

                    if (move_uploaded_file($_FILES["img7"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria9";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img8
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img8"]) && $_FILES["img8"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img8"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria10 = "img8.$extension";
                    $rutaCompleta = $directorioDestino . $galeria10;

                    if (move_uploaded_file($_FILES["img8"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria10";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img9
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img9"]) && $_FILES["img9"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img9"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria11 = "img9.$extension";
                    $rutaCompleta = $directorioDestino . $galeria11;

                    if (move_uploaded_file($_FILES["img9"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria11";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }

            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM planentrenador WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {
                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgEncabezado'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgPerfil'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['img1'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['img2'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['img3'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['img4'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['img5'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['img6'];
                    }
                    if ($galeria9 == '') {
                        $galeria9 = $dato['img7'];
                    }
                    if ($galeria10 == '') {
                        $galeria10 = $dato['img8'];
                    }
                    if ($galeria11 == '') {
                        $galeria11 = $dato['img9'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE planentrenador SET nombre = '$nombre', cargo = '$cargo', imgEncabezado = '$galeria1', ints = '$ints', what = '$what', face = '$face', twitter = '$twitter', about1 = '$about1', descAbout = '$descAbout', imgPerfil = '$galeria2', subTituloA = '$subTituloA', descSub = '$descSub', birthday = '$birthday', phone = '$phone', city = '$city', age = '$age', degree = '$degree', email = '$email', descripcion2 = '$descripcion2', sumary = '$sumary', descripcion3 = '$descripcion3', nombreSumary = '$nombreSumary', descSumary = '$descSumary', nombreEscu = '$nombreEscu', descEducacion = '$descEducacion', nombreProf = '$nombreProf', descProfe = '$descProfe', nombreExp = '$nombreExp', descExpe = '$descExpe', portaFo = '$portaFo', descripcionPort = '$descripcionPort', all1 = '$all1', app1 = '$app1', card1 = '$card1', web1 = '$web1', img1 = '$galeria3', img2 = '$galeria4', img3 = '$galeria5', img4 = '$galeria6', img5 = '$galeria7', img6 = '$galeria8', img7 = '$galeria9', img8 = '$galeria10', img9 = '$galeria11', tituloServi = '$tituloServi', descServ = '$descServ', loremIpsum = '$loremIpsum', descLorem = '$descLorem', sedPer = '$sedPer',  descSed = '$descSed',  magni = '$magni',  descMagni = '$descMagni', localidad = '$localidad'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                $query = $link->query("INSERT INTO planentrenador VALUES ('', '$nombre', '$cargo', '$galeria1', '$ints', '$what', '$face', '$twitter', '$about1', '$descAbout', '$galeria2', '$subTituloA', '$descSub', '$birthday', '$phone', '$city', '$age', '$degree', '$email', '$descripcion2', '$sumary', '$descripcion3', '$nombreSumary', '$descSumary', '$nombreEscu', '$descEducacion', '$nombreProf', '$descProfe', '$nombreExp', '$descExpe', '$portaFo', '$descripcionPort', '$all1', '$app1', '$card1', '$web1', '$galeria3', '$galeria4', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$galeria9', '$galeria10', '$galeria11', '$tituloServi', '$descServ', '$loremIpsum', '$descLorem', '$sedPer', '$descSed', '$magni', '$descMagni', '$localidad', '1')");

                $query = $link->query("SELECT MAX(id) FROM planentrenador");
                while ($dato = mysqli_fetch_array($query)) {
                    $id = $dato['MAX(id)'];
                }

                // Asocia registro con la empresa
                $query = $link->query("INSERT INTO relplantilla VALUES ('', '$idEmpresa', '1', '$id', '1')");

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
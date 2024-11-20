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
            $nombreEncab = trim($_POST['nombreEncab']);
            $nombrePerfil = trim($_POST['nombrePerfil']);
            $descripcion1 = trim($_POST['descripcion1']);
            $about1 = trim($_POST['about1']);
            $descripcion2 = trim($_POST['descripcion2']);
            $subT1 = trim($_POST['subT1']);
            $text1 = trim($_POST['text1']);
            $birth = trim($_POST['birth']);
            $phone = trim($_POST['phone']);
            $city = trim($_POST['city']);
            $age = trim($_POST['age']);
            $degree = trim($_POST['degree']);
            $phemail = trim($_POST['phemail']);
            $text = trim($_POST['text']);
            $subT2 = trim($_POST['subT2']);
            $text2 = trim($_POST['text2']);
            $subT3 = trim($_POST['subT3']);
            $text3 = trim($_POST['text3']);
            $subT4 = trim($_POST['subT4']);
            $text4 = trim($_POST['text4']);
            $subT5 = trim($_POST['subT5']);
            $text5 = trim($_POST['text5']);
            $subT6 = trim($_POST['subT6']);
            $text6 = trim($_POST['text6']);
            $subT7 = trim($_POST['subT7']);
            $text7 = trim($_POST['text7']);
            $subT8 = trim($_POST['subT8']);
            $text8 = trim($_POST['text8']);
            $subT9 = trim($_POST['subT9']);
            $text9 = trim($_POST['text9']);
            $subT10 = trim($_POST['subT10']);
            $text10 = trim($_POST['text10']);
            $subT11 = trim($_POST['subT11']);
            $text11 = trim($_POST['text11']);
            $portafolio = trim($_POST['portafolio']);
            $descripcion3 = trim($_POST['descripcion3']);
            $all1 = trim($_POST['all1']);
            $app1 = trim($_POST['app1']);
            $card1 = trim($_POST['card1']);
            $web1 = trim($_POST['web1']);
            $descripcion4 = trim($_POST['descripcion4']);
            $service = trim($_POST['service']);
            $texto1 = trim($_POST['texto1']);
            $texto2 = trim($_POST['texto2']);
            $texto3 = trim($_POST['texto3']);
            $texto4 = trim($_POST['texto4']);
            $texto5 = trim($_POST['texto5']);
            $texto6 = trim($_POST['texto6']);
            $subTesti = trim($_POST['subTesti']);
            $descripcion5 = trim($_POST['descripcion5']);
            $testi1 = trim($_POST['testi1']);
            $nomTes1 = trim($_POST['nomTes1']);
            $testi2 = trim($_POST['testi2']);
            $nomTes2 = trim($_POST['nomTes2']);
            $testi3 = trim($_POST['testi3']);
            $nomTes3 = trim($_POST['nomTes3']);
            $contact = trim($_POST['contact']);
            $descripcion6 = trim($_POST['descripcion6']);
            $fase = trim($_POST['fase']);
            $whatsapp = trim($_POST['whatsapp']);
            $instagram = trim($_POST['instagram']);
            $twitter = trim($_POST['twitter']);
            // $activo = trim($_POST['activo']);

            $idEmpresa = $_POST['idEmpresa'];

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planconta");
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
            // imgEncabezado
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

                $query = $link->query("SELECT * FROM planconta WHERE id = '$id'");
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
                $query = $link->query("UPDATE planconta SET imgEncabezado = '$galeria1', imgPerfil = '$galeria2', nombreEncab = '$nombreEncab', nombrePerfil = '$nombrePerfil', descripcion1 = '$descripcion1', about1 = '$about1', descripcion2 = '$descripcion2', subT1 = '$subT1', text1 = '$text1', birth = '$birth', phone = '$phone', city = '$city', age = '$age', degree = '$degree', phemail = '$phemail', text = '$text', subT2 = '$subT2', text2 = '$text2', subT3 = '$subT3', text3 = '$text3', subT4 = '$subT4', text4 = '$text4', subT5 = '$subT5', text5 = '$text5', subT6 = '$subT6', text6 = '$text6', subT7 = '$subT7', text7 = '$text7', subT8 = '$subT8', text8 = '$text8', subT9 = '$subT9', text9 = '$text9', subT10 = '$subT10', text10 = '$text10', portafolio = '$portafolio', descripcion3 = '$descripcion3', all1 = '$all1', app1 = '$app1', card1 = '$card1', web1 = '$web1', img1 = '$galeria3', img2 = '$galeria4', img3 = '$galeria5', img4 = '$galeria6', img5 = '$galeria7', img6 = '$galeria8', img7 = '$galeria9', img8 = '$galeria10', img9 = '$galeria11', descripcion4 = '$descripcion4', service = '$service', texto1 = '$texto1', texto2 = '$texto2', texto3 = '$texto3', texto4 = '$texto4', texto5 = '$texto5', texto6 = '$texto6', subTesti = '$subTesti', descripcion5 = '$descripcion5', testi1 = '$testi1', nomTes1 = '$nomTes1', testi2 = '$testi2', nomTes2 = '$nomTes2', testi3 = '$testi3', nomTes3 = '$nomTes3', contact = '$contact', descripcion6 = '$descripcion6', fase = '$fase', whatsapp = '$whatsapp', instagram = '$instagram', twitter = '$twitter'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                $query = $link->query("INSERT INTO planconta VALUES ('', '$galeria1', '$galeria2', '$nombreEncab', '$nombrePerfil', '$descripcion1', '$about1', '$descripcion2', '$subT1', '$text1', '$birth', '$phone', '$city', '$age', '$degree', '$phemail', '$text', '$subT2', '$text2', '$subT3', '$text3', '$subT4', '$text4', '$subT5', '$text5', '$subT6', '$text6', '$subT7', '$text7', '$subT8', '$text8', '$subT9', '$text9', '$subT10', '$text10', '$subT11', '$text11','$portafolio', '$descripcion3', '$all1', '$app1', '$card1', '$web1', '$galeria3', '$galeria4', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$galeria9', '$galeria10', '$galeria11', '$descripcion4', '$service', '$texto1', '$texto2', '$texto3', '$texto4', '$texto5', '$texto6', '$subTesti', '$descripcion5', '$testi1', '$nomTes1', '$testi2', '$nomTes2', '$testi3', '$nomTes3', '$contact', '$descripcion6', '$fase', '$whatsapp', '$instagram', '$twitter', '1')");

                $query = $link->query("SELECT MAX(id) FROM planconta");
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
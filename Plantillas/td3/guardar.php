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
            $tituloEnc = trim($_POST['tituloEnc']);
            $tituloNombre = trim($_POST['tituloNombre']);
            $tituloSubNom = trim($_POST['tituloSubNom']);
            $name = trim($_POST['name']);
            $profile = trim($_POST['profile']);
            $email = trim($_POST['email']);
            $celular = trim($_POST['celular']);
            $subTitu = trim($_POST['subTitu']);
            $descripcion1 = trim($_POST['descripcion1']);
            $tituloPort = trim($_POST['tituloPort']);
            $descPorta = trim($_POST['descPorta']);
            $nomImg1 = trim($_POST['nomImg1']);
            $nomImg2 = trim($_POST['nomImg2']);
            $nomImg3 = trim($_POST['nomImg3']);
            $nomImg4 = trim($_POST['nomImg4']);
            $nomImg5 = trim($_POST['nomImg5']);
            $nomImg6 = trim($_POST['nomImg6']);
            $fechaImg1 = trim($_POST['fechaImg1']);
            $fechaImg2 = trim($_POST['fechaImg2']);
            $fechaImg3 = trim($_POST['fechaImg3']);
            $fechaImg4 = trim($_POST['fechaImg4']);
            $fechaImg5 = trim($_POST['fechaImg5']);
            $fechaImg6 = trim($_POST['fechaImg6']);
            $blogtitulo = trim($_POST['blogtitulo']);
            $descBlog = trim($_POST['descBlog']);
            $tituloBlog1 = trim($_POST['tituloBlog1']);
            $tituloBlog2 = trim($_POST['tituloBlog2']);
            $tituloBlog3 = trim($_POST['tituloBlog3']);
            $descBlog1 = trim($_POST['descBlog1']);
            $descBlog2 = trim($_POST['descBlog2']);
            $descBlog3 = trim($_POST['descBlog3']);
            $subTget = trim($_POST['subTget']);
            $desGet = trim($_POST['desGet']);
            $direccion = trim($_POST['direccion']);
            $face = trim($_POST['face']);
            $ins = trim($_POST['ins']);
            $what = trim($_POST['what']);
            $twitter = trim($_POST['twitter']);

            $idEmpresa = $_POST['idEmpresa'];

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planfotografo");
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

            // imgEnc
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgEnc"]) && $_FILES["imgEnc"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgEnc"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria1 = "imgEnc.$extension";
                    $rutaCompleta = $directorioDestino . $galeria1;

                    if (move_uploaded_file($_FILES["imgEnc"]["tmp_name"], $rutaCompleta)) {
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
            // imgP1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgP1"]) && $_FILES["imgP1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgP1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "imgP1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["imgP1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgP2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgP2"]) && $_FILES["imgP2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgP2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "imgP2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["imgP2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgP3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgP3"]) && $_FILES["imgP3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgP3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria5 = "imgP3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["imgP3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgP4
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgP4"]) && $_FILES["imgP4"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgP4"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria6 = "imgP4.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["imgP4"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgP5
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgP5"]) && $_FILES["imgP5"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgP5"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria7 = "imgP5.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["imgP5"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgP6
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgP6"]) && $_FILES["imgP6"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgP6"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria8 = "imgP6.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["imgP6"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgname1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgBlog1"]) && $_FILES["imgBlog1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgBlog1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria9 = "imgBlog1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria9;

                    if (move_uploaded_file($_FILES["imgBlog1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria9";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgname2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgBlog2"]) && $_FILES["imgBlog2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgBlog2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria10 = "imgBlog2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria10;

                    if (move_uploaded_file($_FILES["imgBlog2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria10";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgname3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgBlog3"]) && $_FILES["imgBlog3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgBlog3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria11 = "imgBlog3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria11;

                    if (move_uploaded_file($_FILES["imgBlog3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria11";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }

            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM planfotografo WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {
                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgEnc'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgPerfil'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['imgP1'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['imgP2'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['imgP3'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['imgP4'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['imgP5'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['imgP6'];
                    }
                    if ($galeria9 == '') {
                        $galeria9 = $dato['imgBlog1'];
                    }
                    if ($galeria10 == '') {
                        $galeria10 = $dato['imgBlog2'];
                    }
                    if ($galeria11 == '') {
                        $galeria11 = $dato['imgBlog3'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE planfotografo SET tituloEnc = '$tituloEnc', imgEnc = '$galeria1', tituloNombre = '$tituloNombre', tituloSubNom = '$tituloSubNom', imgPerfil = '$galeria2', name = '$name', profile = '$profile', email = '$email', celular = '$celular', subTitu = '$subTitu', descripcion1 = '$descripcion1', tituloPort = '$tituloPort', descPorta = '$descPorta', imgP1 = '$galeria3', imgP2 = '$galeria4', imgP3 = '$galeria5', imgP4 = '$galeria6', imgP5 = '$galeria7', imgP6 = '$galeria8', nomImg1 = '$nomImg1', nomImg2 = '$nomImg2', nomImg3 = '$nomImg3', nomImg4 = '$nomImg4', nomImg5 = '$nomImg5', nomImg6 = '$nomImg6', fechaImg1 = '$fechaImg1', fechaImg2 = '$fechaImg2', fechaImg3 = '$fechaImg3', fechaImg4 = '$fechaImg4', fechaImg5 = '$fechaImg5', fechaImg6 = '$fechaImg6', blogtitulo = '$blogtitulo', descBlog = '$descBlog', imgBlog1 = '$galeria9', imgBlog2 = '$galeria10', imgBlog3 = '$galeria11', tituloBlog1 = '$tituloBlog1', tituloBlog2 = '$tituloBlog2', tituloBlog3 = '$tituloBlog3', descBlog1 = '$descBlog1', descBlog2 = '$descBlog2', descBlog3 = '$descBlog3', subTget = '$subTget', desGet = '$desGet', direccion = '$direccion', face = '$face', ins = '$ins', what = '$what', twitter = '$twitter'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                $query = $link->query("INSERT INTO planfotografo VALUES ('', '$tituloEnc', '$galeria1', '$tituloNombre', '$tituloSubNom', '$galeria2', '$name', '$profile', '$email', '$celular', '$subTitu', '$descripcion1', '$tituloPort', '$descPorta', '$galeria3', '$galeria4', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$nomImg1', '$nomImg2', '$nomImg3', '$nomImg4', '$nomImg5', '$nomImg6', '$fechaImg1', '$fechaImg2', '$fechaImg3', '$fechaImg4', '$fechaImg5', '$fechaImg6', '$blogtitulo', '$descBlog', '$galeria9', '$galeria10', '$galeria11', '$tituloBlog1', '$tituloBlog2', '$tituloBlog3', '$descBlog1', '$descBlog2', '$descBlog3', '$subTget', '$desGet', '$direccion', '$face', '$ins', '$what', '$twitter', '1')");

                $query = $link->query("SELECT MAX(id) FROM planfotografo");
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
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
            $colortitulo = trim($_POST['colortitulo']);
            $negocio = trim($_POST['negocio']);
            $colorEncabezado = trim($_POST['colorEncabezado']);
            $nombre = trim($_POST['nombre']);
            $celular = trim($_POST['celular']);
            $colorT1 = trim($_POST['colorT1']);
            $titulo1 = trim($_POST['titulo1']);
            $descChech = trim($_POST['descChech']);
            $colorTiServ = trim($_POST['colorTiServ']);
            $colorDesc = trim($_POST['colorDesc']);
            $subTitulo1 = trim($_POST['subTitulo1']);
            $descSub1 = trim($_POST['descSub1']);
            $subTitulo2 = trim($_POST['subTitulo2']);
            $descSub2 = trim($_POST['descSub2']);
            $colorCarrusel = trim($_POST['colorCarrusel']);
            $titulo2 = trim($_POST['titulo2']);
            $descripcionTitulo2 = trim($_POST['descripcionTitulo2']);
            $color3 = trim($_POST['color3']);
            $perfil1 = trim($_POST['perfil1']);
            $color4 = trim($_POST['color4']);
            $descripcion1 = trim($_POST['descripcion1']);
            $perfil2 = trim($_POST['perfil2']);
            $descripcion2 = trim($_POST['descripcion2']);
            $perfil3 = trim($_POST['perfil3']);
            $descripcion3 = trim($_POST['descripcion3']);
            $color5 = trim($_POST['color5']);
            $tituloNavar = trim($_POST['tituloNavar']);
            $descNavar = trim($_POST['descNavar']);
            $facebook = trim($_POST['facebook']);
            $twitter = trim($_POST['twitter']);
            $pinteres = trim($_POST['pinteres']);
            $youtube = trim($_POST['youtube']);


            $idEmpresa = $_POST['idEmpresa'];
            $idColaborador = $_POST['idColaborador'];
            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planalimento");
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
            // imgFrontal
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgFrontal"]) && $_FILES["imgFrontal"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgFrontal"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria2 = "imgFrontal.$extension";
                    $rutaCompleta = $directorioDestino . $galeria2;

                    if (move_uploaded_file($_FILES["imgFrontal"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria2";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgSub1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgSub1"]) && $_FILES["imgSub1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgSub1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "imgSub1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["imgSub1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgSub2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgSub2"]) && $_FILES["imgSub2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgSub2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "imgSub2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["imgSub2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
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
                    $galeria5 = "img1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["img1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
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
                    $galeria6 = "img2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["img2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
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
                    $galeria7 = "img3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["img3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
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
                    $galeria8 = "img4.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["img4"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
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
                    $galeria9 = "imgP1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria9;

                    if (move_uploaded_file($_FILES["imgP1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria9";
                    } else {
                        echo "Error al subir galeria 6.";
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
                    $galeria10 = "imgP2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria10;

                    if (move_uploaded_file($_FILES["imgP2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria 6 subido y almacenado con éxito. Nombre: $galeria10";
                    } else {
                        echo "Error al subir galeria 6.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgP3

            // imgFin


            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM planalimento WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {

                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgEncabezado'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgFrontal'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['imgSub1'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['imgSub2'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['img1'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['img2'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['img3'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['img4'];
                    }
                    if ($galeria9 == '') {
                        $galeria9 = $dato['imgP1'];
                    }
                    if ($galeria10 == '') {
                        $galeria10 = $dato['imgP2'];
                    }
                    if ($galeria11 == '') {
                        $galeria11 = $dato['imgP3'];
                    }
                    if ($galeria12 == '') {
                        $galeria12 = $dato['imgFin'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE planalimento SET title = '$title', imgEncabezado = '$galeria1', colorEncabezado = '$colorEncabezado', negocio = '$negocio', nombre = '$nombre', celular = '$celular', imgFrontal = '$galeria2', colorT1 = '$colorT1', titulo1 = '$titulo1', descChech = '$descChech', colorTiServ = '$colorTiServ', subTitulo1 = '$subTitulo1', subTitulo2 = '$subTitulo2', colorDesc = '$colorDesc',  descSub1 = '$descSub1',descSub2 = '$descSub2', imgSub1 = '$galeria3', imgSub2 = '$galeria4', colorCarrusel = '$colorCarrusel', tituloCarr = '$tituloCarr', img1 = '$galeria5', img2 = '$galeria6', img3 = '$galeria7', img4 = '$galeria8', color3 = '$color3', perfil1 = '$perfil1', perfil2 = '$perfil2', imgP1 = '$galeria9', imgP2 = '$galeria10', desP1 = '$desP1', desP2 = '$desP2',  fecha='$hoy' WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                $query = $link->query("INSERT INTO planalimento VALUES ('', '$title', '$galeria1', '$colorEncabezado', '$negocio', '$nombre', '$celular', '$galeria2', '$colorT1', '$titulo1', '$descChech', '$colorTiServ', '$subTitulo1', '$subTitulo2', '$colorDesc', '$descSub1', '$descSub2', '$galeria3', '$galeria4', '$colorCarrusel', '$tituloCarr', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$color3', '$perfil1', '$perfil2', '$galeria9', '$galeria10', '$desP1', '$desP2',  '$hoy', '1')");

                $query = $link->query("SELECT MAX(id) FROM planalimento");
                while ($dato = mysqli_fetch_array($query)) {
                    $id = $dato['MAX(id)'];
                }

                // Asocia registro con la empresa
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
<html lang="en">

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
            $colorLogo = trim($_POST['colorLogo']);
            $nomLogo = trim($_POST['nomLogo']);
            $colorEnc = trim($_POST['colorEnc']);
            $nombre = trim($_POST['nombre']);
            $cargo = trim($_POST['cargo']);
            $telefono = trim($_POST['telefono']);
            $colorServ = trim($_POST['colorServ']);
            $servicios = trim($_POST['servicios']);
            $colorTserv = trim($_POST['colorTserv']);
            $tituloSer1 = trim($_POST['tituloSer1']);
            $tituloSer2 = trim($_POST['tituloSer2']);
            $tituloSer3 = trim($_POST['tituloSer3']);
            $tituloSer4 = trim($_POST['tituloSer4']);
            $colorDeServ = trim($_POST['colorDeServ']);
            $descSer1 = trim($_POST['descSer1']);
            $descSer2 = trim($_POST['descSer2']);
            $descSer3 = trim($_POST['descSer3']);
            $descSer4 = trim($_POST['descSer4']);
            $colorWho = trim($_POST['colorWho']);
            $tituloWho = trim($_POST['tituloWho']);
            $colorDesc = trim($_POST['colorDesc']);
            $descWho = trim($_POST['descWho']);
            $colorComen = trim($_POST['colorComen']);
            $tituloComent = trim($_POST['tituloComent']);
            $colorC = trim($_POST['colorC']);
            $descC1 = trim($_POST['descC1']);
            $descC2 = trim($_POST['descC2']);
            $nombreC1 = trim($_POST['nombreC1']);
            $nombreC2 = trim($_POST['nombreC2']);

            $idEmpresa = $_POST['idEmpresa'];

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planestilista");
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

            // imgEncabezado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgEncabezado"]) && $_FILES["imgEncabezado"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgEncabezado"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria2 = "imgEncabezado.$extension";
                    $rutaCompleta = $directorioDestino . $galeria2;

                    if (move_uploaded_file($_FILES["imgEncabezado"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria2";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgEnc2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgEnc2"]) && $_FILES["imgEnc2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgEnc2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria1 = "imgEnc2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria1;

                    if (move_uploaded_file($_FILES["imgEnc2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria1";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgServ1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgServ1"]) && $_FILES["imgServ1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgServ1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "imgServ1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["imgServ1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgServ2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgServ2"]) && $_FILES["imgServ2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgServ2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "imgServ2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["imgServ2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgServ3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgServ3"]) && $_FILES["imgServ3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgServ3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria5 = "imgServ3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["imgServ3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgServ4
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgServ4"]) && $_FILES["imgServ4"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgServ4"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria6 = "imgServ4.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["imgServ4"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // img3Perfil
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["img3Perfil"]) && $_FILES["img3Perfil"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["img3Perfil"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria7 = "img3Perfil.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["img3Perfil"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgEnc3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgEnc3"]) && $_FILES["imgEnc3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgEnc3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria8 = "imgEnc3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["imgEnc3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }


            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM planestilista WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {

                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgEncabezado'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgEnc2'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['imgServ1'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['imgServ2'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['imgServ3'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['imgServ4'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['img3Perfil'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['imgEnc3'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE planestilista SET title ='$title', colorLogo ='$colorLogo', nomLogo ='$nomLogo', colorEnc ='$colorEnc', nombre ='$nombre', cargo ='$cargo', telefono ='$telefono', imgEncabezado ='$galeria1', imgEnc2 ='$galeria2', colorServ ='$colorServ', servicios ='$servicios', imgServ1 ='$galeria3', imgServ2 ='$galeria4', imgServ3 ='$galeria5', imgServ4 ='$galeria6', colorTserv ='$colorTserv', tituloSer1 ='$tituloSer1', tituloSer2 ='$tituloSer2', tituloSer3 ='$tituloSer3', tituloSer4 ='$tituloSer4', colorDeServ ='$colorDeServ', descSer1 ='$descSer1', descSer2 ='$descSer2', descSer3 ='$descSer3', descSer4 ='$descSer4', img3Perfil ='$galeria7', colorWho ='$colorWho', tituloWho ='$tituloWho', colorDesc ='$colorDesc', descWho ='$descWho', imgEnc3 ='$galeria8', colorComen ='$colorComen', tituloComent ='$tituloComent', colorC ='$colorC', descC1 ='$descC1', descC2 ='$descC2', nombreC1 ='$nombreC1', nombreC2 ='$nombreC2', fecha='$hoy'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                echo "Hola mundo";
                $query = $link->query("INSERT INTO planestilista VALUES ('', '$title', '$colorLogo', '$nomLogo', '$colorEnc', '$nombre', '$cargo', '$telefono', '$galeria1', '$galeria2', '$colorServ', '$servicios', '$galeria3', '$galeria4', '$galeria5', '$galeria6', '$colorTserv', '$tituloSer1', '$tituloSer2', '$tituloSer3', '$tituloSer4', '$colorDeServ', '$descSer1', '$descSer2', '$descSer3', '$descSer4', '$galeria7', '$colorWho', '$tituloWho', '$colorDesc', '$descWho', '$galeria8', '$colorComen', '$tituloComent', '$colorC', '$descC1', '$descC2', '$nombreC1', '$nombreC2', '$hoy', '1')");
                // ME QUEDE AQUI
                $query = $link->query("SELECT MAX(id) FROM planestilista");
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
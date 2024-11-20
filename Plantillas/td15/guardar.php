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
            $color1 = trim($_POST['color1']);
            $nombre = trim($_POST['nombre']);
            $color2 = trim($_POST['color2']);
            $cargo = trim($_POST['cargo']);
            $slogan = trim($_POST['slogan']);
            $facebook = trim($_POST['facebook']);
            $githup = trim($_POST['githup']);
            $color3 = trim($_POST['color3']);
            $titulo1 = trim($_POST['titulo1']);
            $colo4Titulo = trim($_POST['colo4Titulo']);

            $punTitulo1 = trim($_POST['punTitulo1']);
            $punTitulo2 = trim($_POST['punTitulo2']);
            $punTitulo3 = trim($_POST['punTitulo3']);
            $punTitulo4 = trim($_POST['punTitulo4']);
            $color5Desc = trim($_POST['color5Desc']);
            $punDesc1 = trim($_POST['punDesc1']);
            $punDesc2 = trim($_POST['punDesc2']);
            $punDesc3 = trim($_POST['punDesc3']);
            $punDesc4 = trim($_POST['punDesc4']);
            $color6Por = trim($_POST['color6Por']);
            $tituliPort = trim($_POST['tituliPort']);
            $color7TP = trim($_POST['color7TP']);
            $tituloPrem = trim($_POST['tituloPrem']);
            $color8Date = trim($_POST['color8Date']);
            $fecha1 = trim($_POST['fecha1']);
            $fecha2 = trim($_POST['fecha2']);
            $tituloP1 = trim($_POST['tituloP1']);
            $tituloP2 = trim($_POST['tituloP2']);
            $color9Desc = trim($_POST['color9Desc']);
            $descP1 = trim($_POST['descP1']);
            $descP2 = trim($_POST['descP2']);
            $color10Con = trim($_POST['color10Con']);
            $contacto = trim($_POST['contacto']);
            $color11Con = trim($_POST['color11Con']);
            $desCon = trim($_POST['desCon']);
            $color12 = trim($_POST['color12']);
            $direccion = trim($_POST['direccion']);
            $telefono = trim($_POST['telefono']);
            $email = trim($_POST['email']);

            $idEmpresa = $_POST['idEmpresa'];

            // RECEPCIÓN DE IMÁGENES

            // Directorio donde se almacenarán las imágenes
            if (!empty($id)) {
                $directorioDestino = "img/$id/";

                $rutaCompleta = "img/$id";
            } else {

                $query = $link->query("SELECT MAX(id) from planfrelanser");
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
            // imgLogo
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgLogo"]) && $_FILES["imgLogo"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgLogo"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria3 = "imgLogo.$extension";
                    $rutaCompleta = $directorioDestino . $galeria3;

                    if (move_uploaded_file($_FILES["imgLogo"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria3";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgDiseño1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgDiseño1"]) && $_FILES["imgDiseño1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgDiseño1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria4 = "imgDiseño1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria4;

                    if (move_uploaded_file($_FILES["imgDiseño1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria4";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgDiseño2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgDiseño2"]) && $_FILES["imgDiseño2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgDiseño2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria5 = "imgDiseño2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria5;

                    if (move_uploaded_file($_FILES["imgDiseño2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria5";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgDiseño3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgDiseño3"]) && $_FILES["imgDiseño3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgDiseño3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria6 = "imgDiseño3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria6;

                    if (move_uploaded_file($_FILES["imgDiseño3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria6";
                    } else {
                        echo "Error al subir el galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgWeb1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgWeb1"]) && $_FILES["imgWeb1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgWeb1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria7 = "imgWeb1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria7;

                    if (move_uploaded_file($_FILES["imgWeb1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria7";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgWeb2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgWeb2"]) && $_FILES["imgWeb2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgWeb2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria8 = "imgWeb2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria8;

                    if (move_uploaded_file($_FILES["imgWeb2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria8";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgWeb3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgWeb3"]) && $_FILES["imgWeb3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgWeb3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria9 = "imgWeb3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria9;

                    if (move_uploaded_file($_FILES["imgWeb3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria9";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgApp1
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgApp1"]) && $_FILES["imgApp1"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgApp1"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria10 = "imgApp1.$extension";
                    $rutaCompleta = $directorioDestino . $galeria10;

                    if (move_uploaded_file($_FILES["imgApp1"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria10";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgApp2
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgApp2"]) && $_FILES["imgApp2"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgApp2"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria11 = "imgApp2.$extension";
                    $rutaCompleta = $directorioDestino . $galeria11;

                    if (move_uploaded_file($_FILES["imgApp2"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria11";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }
            // imgApp3
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES["imgApp3"]) && $_FILES["imgApp3"]["error"] == 0) {

                    $infoArchivo = pathinfo($_FILES["imgApp3"]["name"]);
                    $extension = $infoArchivo["extension"];
                    $galeria12 = "imgApp3.$extension";
                    $rutaCompleta = $directorioDestino . $galeria12;

                    if (move_uploaded_file($_FILES["imgApp3"]["tmp_name"], $rutaCompleta)) {
                        echo "Galeria subido y almacenado con éxito. Nombre: $galeria12";
                    } else {
                        echo "Error al subir galeria.";
                    }
                } else {
                    echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
                }
            }

            if (!empty($id)) { // Modificación de Landing Page

                $query = $link->query("SELECT * FROM planfrelanser WHERE id = '$id'");
                while ($dato = mysqli_fetch_array($query)) {

                    if ($galeria1 == '') {
                        $galeria1 = $dato['imgPerfil'];
                    }
                    if ($galeria2 == '') {
                        $galeria2 = $dato['imgEncabezado'];
                    }
                    if ($galeria3 == '') {
                        $galeria3 = $dato['imgLogo'];
                    }
                    if ($galeria4 == '') {
                        $galeria4 = $dato['imgDiseño1'];
                    }
                    if ($galeria5 == '') {
                        $galeria5 = $dato['imgDiseño2'];
                    }
                    if ($galeria6 == '') {
                        $galeria6 = $dato['imgDiseño3'];
                    }
                    if ($galeria7 == '') {
                        $galeria7 = $dato['imgWeb1'];
                    }
                    if ($galeria8 == '') {
                        $galeria8 = $dato['imgWeb2'];
                    }
                    if ($galeria9 == '') {
                        $galeria9 = $dato['imgWeb3'];
                    }
                    if ($galeria10 == '') {
                        $galeria10 = $dato['imgApp1'];
                    }
                    if ($galeria11 == '') {
                        $galeria11 = $dato['imgApp2'];
                    }
                    if ($galeria12 == '') {
                        $galeria12 = $dato['imgApp3'];
                    }
                }

                // Actualización de Registro 
                // tituloG3 = '$tituloG3'
                $query = $link->query("UPDATE planfrelanser SET title ='$title', imgPerfil ='$galeria1', imgEncabezado ='$galeria2', imgLogo ='$galeria3', color1='$color1', nombre='$nombre', color2='$color2', cargo='$cargo', slogan='$slogan', facebook ='$facebook', githup ='$githup', color3 ='$color3', titulo1 ='$titulo1', colo4Titulo ='$colo4Titulo', punTitulo1 ='$punTitulo1', punTitulo2 ='$punTitulo2', punTitulo3 ='$punTitulo3', punTitulo4 ='$punTitulo4', color5Desc ='$color5Desc', punDesc1 ='$punDesc1', punDesc2 ='$punDesc2', punDesc3 ='$punDesc3', punDesc4 ='$punDesc4', color6Por ='$color6Por', tituliPort ='$tituliPort', imgDiseño1 ='$galeria4', imgDiseño2 ='$galeria5', imgDiseño3 ='$galeria6', imgWeb1 ='$galeria7', imgWeb2 ='$galeria8', imgWeb3 ='$galeria9', imgApp1 ='$galeria10', imgApp2 ='$galeria11', imgApp3 ='$galeria12', color7TP ='$color7TP', tituloPrem ='$tituloPrem', color8Date ='$color8Date', fecha1 ='$fecha1', fecha2 ='$fecha2', tituloP1 ='$tituloP1', tituloP2 ='$tituloP2', color9Desc ='$color9Desc', descP1 ='$descP1', descP2 ='$descP2', color10Con ='$color10Con', contacto ='$contacto', color11Con ='$color11Con', desCon ='$desCon', color12 ='$color12', direccion ='$direccion', telefono ='$telefono', email ='$email', fecha='$hoy'  WHERE (id = '$id')");

            ?>
                <script>
                    window.open("index.php?id=<?php echo $id; ?>", "_blank");
                    window.close();
                </script>
            <?php
            } else {

                // Crea registro
                echo "Hola mundo";
                $query = $link->query("INSERT INTO planfrelanser VALUES ('', '$title', '$galeria1', '$galeria2', '$galeria3', '$color1', '$nombre', '$color2', '$cargo', '$slogan', '$facebook', '$githup', '$color3', '$titulo1', '$colo4Titulo', '$punTitulo1', '$punTitulo2', '$punTitulo3', '$punTitulo4', '$color5Desc', '$punDesc1', '$punDesc2', '$punDesc3', '$punDesc4', '$color6Por', '$tituliPort', '$galeria4', '$galeria5', '$galeria6', '$galeria7', '$galeria8', '$galeria9', '$galeria10', '$galeria11', '$galeria12', '$color7TP', '$tituloPrem', '$color8Date', '$fecha1', '$fecha2', '$tituloP1', '$tituloP2', '$color9Desc', '$descP1', '$descP2', '$color10Con', '$contacto', '$color11Con', '$desCon', '$color12', '$direccion', '$telefono', '$email', '$hoy', '1')");
                // ME QUEDE AQUI
                $query = $link->query("SELECT MAX(id) FROM planfrelanser");
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
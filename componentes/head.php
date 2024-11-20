<?php
// error_reporting(0); // Para que no sean visibles los errores en pantalla
session_start(); // Renovar la sesión
if (isset($_SESSION['usuario'])) {  // * El usuario ha iniciado sesión personal
    $acceso = 1; // El usuario inició sesión personal
    $SesionID = $_SESSION['usuario']; // OBTENCIÓN DE USUARIO DE SESIÓN
    // if (isset($_SESSION['idEmpresa'])) {  // * El usuario ha iniciado sesión empresarial
    //   $acceso = 2; // El usuario inició sesión empresarial
    //   $EmpresaID = $_SESSION['idEmpresa']; // OBTENCIÓN DE EMPRESA
    // }
}
// carpeta PRINCIPAL
if ($pre == 1) {
    $pre = "";
}
// carpeta CATALOGOS
if ($pre == 2) {
    $pre = "../";
}
date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
$hoy = date("Y/m/d H:i:s"); // Fecha actual en formato ISO 8601
?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>DIGITALIZÁNDOTE</title>
    <meta
        content="width=devi
        ce-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />
    <link rel="icon" href="<?php echo $pre; ?>img/logo.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo $pre; ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo $pre; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $pre; ?>assets/css/plugins.min.css" />
    <link rel="stylesheet" href="<?php echo $pre; ?>assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo $pre; ?>assets/css/demo.css" />
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script src="<?php echo $pre; ?>assets/css/style.css"></script>
    <script src="<?php echo $pre; ?>assets/js/carrosel.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .carousel-caption h5,
        .carousel-caption p {
            text-align: center;
            margin: 0 auto;
        }
    </style>


</head>
<style>
    #seccion-con-fondo {
        background-image: url('assets/img/blogpost.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 20px;
        color: white;
    }
</style>
</head>
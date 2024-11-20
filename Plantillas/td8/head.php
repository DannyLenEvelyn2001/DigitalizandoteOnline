<?php
// error_reporting(0);
// Para que no sean visibles los errores en pantalla
session_start(); // Renovar la sesión
if (isset($_SESSION['usuario'])) {  // * El usuario ha iniciado sesión personal
    $acceso = 1; // El usuario inició sesión personal
    $SesionID = $_SESSION['usuario']; // OBTENCIÓN DE USUARIO DE SESIÓN
    // if (isset($_SESSION['idEmpresa'])) {  // * El usuario ha iniciado sesión empresarial
    //     $acceso = 2; // El usuario inició sesión empresarial
    //     $EmpresaID = $_SESSION['idEmpresa']; // OBTENCIÓN DE EMPRESA
    // }
}
date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
$hoy = date("Y/m/d h:i:s"); // Fecha actual en formato estándar
?>

<title>Espacios de coworking </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>

<!-- animation css files -->
<link rel="stylesheet" href="css/animation-aos.css">
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<!-- //animation css files -->

<!-- css files -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
<link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
<!-- //css files -->

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->
<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- =======================================================
    * digitalizandote.digital
    * Plantilla Tarjeta Digital  1
    * Author: BootstrapMade.com
    * Integrador : NetRabbit, S.A. de C.V.
    * Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
    * Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
  ======================================================== -->


<style type="text/css">
    #Layer1 {
        position: absolute;
        width: 41px;
        height: 39px;
        z-index: 100;
        left: 0px;
        top: 690px;
        bottom: 10x;
        right: 0px;
        position: fixed;
    }
</style>
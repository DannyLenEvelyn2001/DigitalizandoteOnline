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
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>PROFESOR</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- =======================================================
      * digitalizandote.digital
      * Plantilla Tarjeta Digital  1
      * Author: BootstrapMade.com
      * Integrador : NetRabbit, S.A. de C.V.
      * Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
      * Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
    ======================================================== -->

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<style type="text/css">
    #Layer1 {
        position: absolute;
        width: 41px;
        height: 39px;
        z-index: 100;
        left: 0px;
        top: 565px;
        bottom: 10x;
        right: 0px;
        position: fixed;
    }
</style>
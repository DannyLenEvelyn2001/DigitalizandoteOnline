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

<title>Fotografo Online</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
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


<style type="text/css">
    #Layer1 {
        position: absolute;
        width: 41px;
        height: 39px;
        z-index: 100;
        left: 0px;
        top: 400px;
        bottom: 10x;
        right: 0px;
        position: fixed;
    }
</style>
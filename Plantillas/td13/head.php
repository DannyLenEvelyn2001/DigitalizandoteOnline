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
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title  -->
<title>Diseñadora de Modas</title>

<!-- Favicon  -->
<link rel="icon" href="img/core-img/favicon.ico">

<!-- Core Style CSS -->
<link rel="stylesheet" href="css/core-style.css">
<link rel="stylesheet" href="style.css">
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
        z-index: 1000;
        left: 0px;
        top: 450px;
        bottom: 10x;
        right: 0px;
        position: fixed;
    }
</style>
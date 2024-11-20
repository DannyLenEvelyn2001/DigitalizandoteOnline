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
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="img/favicon.ico">
<title>Desarrollador Frelanser</title>

<!-- Global stylesheets -->
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/devicons/css/devicons.min.css" rel="stylesheet">
<link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

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
        left: 268px;
        top: 650px;
        bottom: 10x;
        right: 0px;
        position: fixed;
    }
</style>
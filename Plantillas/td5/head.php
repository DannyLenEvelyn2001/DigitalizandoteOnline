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

<head>
    <title>Mi Negocio</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom  files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
    <!----//webfonts---->

    <style type="text/css">
        #Layer1 {
            position: absolute;
            width: 41px;
            height: 39px;
            z-index: 100;
            left: 0px;
            top: 200px;
            bottom: 10x;
            right: 0px;
            position: fixed;
        }
    </style>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .titulosector {
            color: #343a40;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hr {
            border: 1px solid #343a40;
            margin-bottom: 20px;
        }

        .tituloimput {
            font-weight: bold;
        }

        .form-label {
            margin-top: 10px;
        }

        .input-group-text {
            background-color: #343a40;
            color: #fff;
        }

        .form-control {
            border: 1px solid #343a40;
            border-radius: 0;
        }

        .form-text {
            font-size: 0.9em;
            color: #6c757d;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            margin-top: 20px;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>
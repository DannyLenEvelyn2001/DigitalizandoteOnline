<?php
include("head.php");
include("../../conexion/conexion.php");

if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

    $idlpi = $_POST["idlpi"]; // Tarjeta a inhabilitar
    $idreltar = $_POST["idreltar"]; // Tarjeta a inhabilitar
    $idlph = $_POST["idlph"]; // Tarjeta a habilitar

    if (!empty($idlpi)) {
        $link->query("UPDATE reltarjeta SET activo = '0' WHERE (idReltarjeta = '$idreltar')");
        $link->query("UPDATE planfrelanser SET activo = '0' WHERE (id = '$idlpi')");
    } elseif (!empty($idlph)) {
        $link->query("UPDATE planfrelanser SET activo = '1' WHERE (id = '$idlph')");
    }
} else {
    header("Location: ../../Principal/plantilla.php");
}

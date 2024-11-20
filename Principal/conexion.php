<?php
date_default_timezone_set("America/Mexico_City");

$fecha_actual = date('Y-m-d');
$timemex = date("H:i:s.v", time());

$link = mysqli_connect("localhost", "root", "", "u759056297_digitalizando");

if (!$link) {
    die('Error en la conexión: ' . mysqli_connect_error());
}

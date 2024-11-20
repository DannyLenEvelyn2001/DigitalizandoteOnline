<?php
date_default_timezone_set("Mexico/General");

$fecha_actual = date('Y-m-d');
$timemex = date("H:i:s.v", time());

// ----------------------- HOSTING -----------------------
//$link = mysqli_connect("localhost", "u759056297_soporte", "Isi2023#$%&", "u759056297_tikets") or die("No hay Conexion");
$link = mysqli_connect("localhost", "root", "", "u759056297_digitalizando") or die("No hay Conexion");

// ----------------------- LOCAL -----------------------
// $link = mysqli_connect("localhost", "root", "", "u759056297_inmujiga") or die("No hay Conexion");

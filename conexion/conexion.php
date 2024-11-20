<?php
date_default_timezone_set("Mexico/General");

$fecha_actual = date('Y-m-d');
$timemex = date("H:i:s.v", time());

// ----------------------- HOSTING -----------------------
// ALTER TABLE `u759056297_digitalizando`.`planconta`
// CHANGE COLUMN `idplanDisePhoto` `idplanConta` INT(11) NOT NULL AUTO_INCREMENT ;

//$link = mysqli_connect("localhost", "u759056297_soporte", "Isi2023#$%&", "u759056297_tikets") or die("No hay Conexion");
$link = mysqli_connect("localhost", "root", "", "u759056297_digitalizando") or die("No hay Conexion");
if (mysqli_connect_errno()) {
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}

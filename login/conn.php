<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "u759056297_digitalizando";

// * -------- CONEXIÓN --------
$link = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname") or die("No hay Conexion");
if (!$link) {
    die("Fallo la conexión: " . mysqli_connect_error());
}

// ? -------- UTILIDADES --------
$tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
$hoy = date("Y/m/d H:i:s"); // Fecha actual en formato ISO 8601
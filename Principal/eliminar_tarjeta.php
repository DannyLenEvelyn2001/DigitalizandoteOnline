<?php
include('../login/conn.php'); // Asegúrate de incluir la conexión a la base de datos

if (isset($_POST['idTarjeta'])) {
    $idTarjeta = $_POST['idTarjeta'];

    // Eliminar la tarjeta de la base de datos
    $query = $link->query("DELETE FROM relplantilla WHERE idTarjeta = '$idTarjeta'");

    if ($query) {
        // Opcional: También puedes eliminar datos relacionados en otras tablas si es necesario
        echo "Tarjeta eliminada exitosamente.";
    } else {
        echo "Error al eliminar la tarjeta.";
    }
}

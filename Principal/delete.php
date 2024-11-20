<?php
// Incluir el archivo de conexión a la base de datos
include '../login/conn.php';

// Verificar si se ha pasado un ID de empresa válido
if (isset($_GET['id'])) {
    $idEmpresa = intval($_GET['id']);

    // Consulta para eliminar la empresa con el ID especificado
    $query = "UPDATE empresa SET activo = '0' WHERE idEmpresa = ?";

    if ($stmt = $link->prepare($query)) {
        $stmt->bind_param("i", $idEmpresa);
        if ($stmt->execute()) {
            // Redirigir de vuelta a la página de listado de empresas después de eliminar
            header("Location: empresa.php");
            exit();
        } else {
            echo "Error al eliminar la empresa: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $link->error;
    }
} else {
    echo "ID de empresa no válido.";
}

// Cerrar la conexión a la base de datos
$link->close();

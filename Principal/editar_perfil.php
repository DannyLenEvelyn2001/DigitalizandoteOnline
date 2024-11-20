<?php
// editar_perfil.php

// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$email = $_POST['email'];

// Manejar subida de foto (si se envió una nueva foto)
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = uniqid() . "-" . $_FILES['foto']['name'];
    $foto_ruta = "tables/img/" . $foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], $foto_ruta);
} else {
    // No se envió una nueva foto, mantener la foto existente en la base de datos
    $foto = null;
}

// ID del usuario que se está editando (puedes obtenerlo de la sesión o de otra manera)
$idusuneg = 1; // Aquí deberías obtener dinámicamente el ID del usuario a partir de la sesión u otro método

// Actualizar datos en la base de datos
if ($foto) {
    $sql = "UPDATE usunegocios SET 
            nombre = ?, 
            apellidos = ?, 
            celular = ?, 
            email = ?, 
            foto = ? 
            WHERE idusuneg = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("sssssi", $nombre, $apellidos, $celular, $email, $foto, $idusuneg);
} else {
    $sql = "UPDATE usunegocios SET 
            nombre = ?, 
            apellidos = ?, 
            celular = ?, 
            email = ? 
            WHERE idusuneg = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("ssssi", $nombre, $apellidos, $celular, $email, $foto, $idusuneg);
}

if ($stmt->execute()) {
    echo "Perfil actualizado correctamente.";
} else {
    echo "Error al actualizar el perfil: " . $stmt->error;
}

$stmt->close();
$link->close();

<?php
include '../login/conn.php';
session_start();

$idUsuario = $_SESSION['usuario']; // Asegúrate de que el idUsuario esté en la sesión

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$foto = $_FILES['foto'];

// Verificar si se cargó una nueva foto
if ($foto['name']) {
    $fotoNombre = $foto['name'];
    $fotoTemp = $foto['tmp_name'];
    $destino = "../img/" . $fotoNombre;
    move_uploaded_file($fotoTemp, $destino);
} else {
    // Si no se sube una nueva foto, conservar la anterior
    $query = "SELECT foto FROM perfil WHERE idUsuario = ?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $fotoNombre = $row['foto'];
}

// Actualizar datos en la base de datos
$query = "UPDATE perfil SET nombre = ?, apellido = ?, celular = ?, email = ?, foto = ? WHERE idUsuario = ?";
$stmt = $link->prepare($query);
$stmt->bind_param("sssssi", $nombre, $apellido, $celular, $email, $fotoNombre, $idUsuario);
$stmt->execute();

header("Location: perfil.php");
exit();

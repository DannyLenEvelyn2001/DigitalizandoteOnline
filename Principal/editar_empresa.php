<?php
include('../login/conn.php');

$response = [
    'success' => false,
    'message' => 'Error al procesar la solicitud.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idEmpresa = $_POST['idEmpresa'];
    $nombre = strtoupper($_POST['nombre']);
    $descripcion = strtoupper($_POST['descripcion']);
    $direccion = strtoupper($_POST['direccion']);
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Validar y sanitizar los datos (ejemplo básico)
    // $idEmpresa = intval($idEmpresa);
    // $nombre = $link->real_escape_string($nombre);
    // $descripcion = $link->real_escape_string($descripcion);
    // $direccion = $link->real_escape_string($direccion);
    // $telefono = $link->real_escape_string($telefono);
    // $email = $link->real_escape_string($email);

    $sql = "UPDATE empresa SET nombre = '$nombre', descripcion = '$descripcion', direccion = '$direccion', telefono = '$telefono', email = '$email'
            WHERE idEmpresa = $idEmpresa";

    if ($link->query($sql) === true) {
        $response['success'] = true;
        $response['message'] = 'Empresa actualizada correctamente.';
    } else {
        $response['message'] = 'Error al actualizar la empresa: ' . $link->error;
    }
}

// Devolver respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

<?php
include('../login/conn.php');

$response = [
    'success' => false,
    'message' => 'Error al procesar la solicitud.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idColaborador = $_POST['idColaborador'];
    $idEmpresa = $_POST['idEmpresa'];
    $nombre = strtoupper($_POST['nombre']);
    $cargo = strtoupper($_POST['cargo']);
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    // Validar y sanitizar los datos (ejemplo básico)
    // Aquí deberías implementar validaciones adecuadas

    // Corregido: actualizar la tabla colaborador
    $sql = $link->query("UPDATE relcolaborador SET idEmpresa = '$idEmpresa' WHERE idColaborador = $idColaborador AND activo = 1");

    $sql = "UPDATE colaborador SET nombre = '$nombre',  cargo = '$cargo',  tel = '$tel',  email = '$email' WHERE idColaborador = $idColaborador";


    if ($link->query($sql) === true) {
        $response['success'] = true;
        $response['message'] = 'Colaborador actualizado correctamente.';
    } else {
        $response['message'] = 'Error al actualizar el colaborador: ' . $link->error;
    }
}

// Devolver respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

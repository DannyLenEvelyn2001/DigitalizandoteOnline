<?php
include('../login/conn.php');

$response = [
    'success' => false,
    'message' => 'Error al procesar la solicitud.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idEmpresa = $_POST['idEmpresa'];
    $nombre = strtoupper($_POST['nombre']);
    $cargo = strtoupper($_POST['cargo']);
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    // Validar y sanitizar los datos (ejemplo básico)
    // Aquí deberías implementar validaciones adecuadas

    $query = $link->query("INSERT INTO colaborador VALUES ('', '$nombre', '$cargo', '$tel', '$email', '$hoy', '1')");

    $query = $link->query("SELECT MAX(idColaborador) FROM colaborador");
    $dato = $query->fetch_assoc();
    $idColaborador = $dato['MAX(idColaborador)'];

    $sql = "INSERT INTO relcolaborador VALUES ('', '$idEmpresa', '$idColaborador', '$hoy', '1')";

    if ($link->query($sql) === TRUE) {
        $response['success'] = true;
        $response['message'] = 'Colaborador creado exitosamente';
    } else {
        $response['message'] = 'Error al crear el colaborador: ' . $link->error;
    }
}

header('Content-Type: application/json');
echo json_encode($response);

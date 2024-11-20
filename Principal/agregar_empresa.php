<?php
session_start(); // Renovar la sesión
if (isset($_SESSION['usuario'])) {  // * El usuario ha iniciado sesión personal
    $acceso = 1; // El usuario inició sesión personal
    $SesionID = $_SESSION['usuario']; // OBTENCIÓN DE USUARIO DE SESIÓN
    // if (isset($_SESSION['idEmpresa'])) {  // * El usuario ha iniciado sesión empresarial
    //     $acceso = 2; // El usuario inició sesión empresarial
    //     $EmpresaID = $_SESSION['idEmpresa']; // OBTENCIÓN DE EMPRESA
    // }
}
include('../login/conn.php');
$response = [
    'success' => false,
    'message' => 'Error al procesar la solicitud.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreEm = strtoupper($_POST['nombre']);
    $desc = strtoupper($_POST['desc']);
    $direccion = strtoupper($_POST['direccion']);
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    // $activo = $_POST['activo'];

    // Validar y sanitizar los datos (ejemplo básico)
    // Aquí deberías implementar validaciones adecuadas

    $query = $link->query("INSERT INTO empresa VALUES ('', '$nombreEm', '$desc', '$direccion', '$telefono', '$email', '$hoy', '1')");

    $query = $link->query("SELECT MAX(idEmpresa) FROM empresa");
    $dato = $query->fetch_assoc();
    $idEmpresa = $dato['MAX(idEmpresa)'];

    $sql = "INSERT INTO relempresa VALUES ('', '$SesionID', '$idEmpresa', '$hoy', '1')";

    if ($link->query($sql) === TRUE) {
        $response['success'] = true;
        $response['message'] = 'Empresa creada exitosamente';
    } else {
        $response['message'] = 'Error al crear la empresa: ' . $link->error;
    }
}

header('Content-Type: application/json');
echo json_encode($response);

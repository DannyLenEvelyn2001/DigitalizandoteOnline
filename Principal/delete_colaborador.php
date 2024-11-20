<?php
// Incluir el archivo de conexión a la base de datos
include '../login/conn.php';

$response = [
    'success' => false,
    'message' => 'Error al procesar la solicitud.'
];

// Verificar si se ha pasado un ID de colaborador válido mediante POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decodificar el cuerpo de la solicitud JSON
    $data = json_decode(file_get_contents("php://input"), true);
    $idColaborador = isset($data['idColaborador']) ? intval($data['idColaborador']) : null;

    if ($idColaborador) {
        // Consulta para eliminar el colaborador con el ID especificado
        $query = "UPDATE colaborador SET activo = '0' WHERE idColaborador = ?";

        if ($stmt = $link->prepare($query)) {
            $stmt->bind_param("i", $idColaborador);
            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = 'Colaborador eliminado correctamente.';
            } else {
                $response['message'] = 'Error al eliminar el colaborador: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $response['message'] = 'Error en la preparación de la consulta: ' . $link->error;
        }
    } else {
        $response['message'] = 'ID de colaborador no válido.';
    }
} else {
    $response['message'] = 'Solicitud inválida.';
}

// Devolver respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión a la base de datos
$link->close();

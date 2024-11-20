<?php
// * ACTUALIZADO POR ENCASTIN 23/05/2024
include_once 'conn1.php'; // ? Incluir el archivo de conexión a la base de datos
date_default_timezone_set('America/Mexico_City'); // ? Zona Horaria de PHP
$hoy = date("Y/m/d H:i:s"); // ? Fecha actual en formato estándar

// ? Crear objeto de conexión
$DBO = Conexion::Conectar();

// ? Obtener datos del formulario o establecer valores predeterminados
$usuario = (isset($_POST['usuario'])) ?  strtoupper($_POST['usuario']) : '';
$tipo_servicio = (isset($_POST['tipo_servicio'])) ?  strtoupper($_POST['tipo_servicio']) : '';
$nom_servicio = (isset($_POST['nom_servicio'])) ?  strtoupper($_POST['nom_servicio']) : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$costo = (isset($_POST['costo'])) ? $_POST['costo'] : '';
$activo = (isset($_POST['activo'])) ? $_POST['activo'] : '';

// ! Importante obtener valores ID y Opción
$idservicio = (isset($_POST['idservicio'])) ? $_POST['idservicio'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

// ? Definir arreglo para almacenar los datos a devolver
$json = array();

// ? Switch para manejar las diferentes opciones
switch ($opcion) {
    case 1: // * Opción para crear nuevo registro
        // ? Busca el registro existente
        $query = $DBO->prepare("SELECT idservicio, activo FROM servicio WHERE usuario = :usuario");
        $query->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() == 0) {
            // ? Consulta para insertar el nuevo registro en la base de datos
            $query = "INSERT INTO servicio VALUES ('', '$usuario', '$tipo_servicio', '$nom_servicio', '$descripcion', '$costo', '$activo')";
            $dato = $DBO->prepare($query);
            $dato->execute();

            // ? Selecciona el registro recién insertado
            $query = "SELECT * FROM servicio ORDER BY idservicio DESC LIMIT 1";
            $dato = $DBO->prepare($query);
            $dato->execute();
            $json = $dato->fetchAll(PDO::FETCH_ASSOC); // Almacena los datos en el arreglo
        } else {
            // ? Obtiene los datos del servicio existente
            $dato = $query->fetch(PDO::FETCH_ASSOC);
            $idservicio = $dato['idservicio'];

            // ? Re-habilita el registro existente
            $query = "UPDATE servicio SET activo = '1' WHERE idservicio = :idservicio";
            $dato = $DBO->prepare($query);
            $dato->bindParam(':idservicio', $idservicio, PDO::PARAM_INT);
            $dato->execute();
        }
        break;
    case 2: // * Opción para editar un registro existente
        // ? Consulta para actualizar el registro
        $query = "UPDATE servicio SET usuario='$usuario', tipo_servicio='$tipo_servicio', nom_servicio='$nom_servicio', descripcion='$descripcion', costo='$costo', activo='$activo' WHERE idservicio='$idservicio' ";
        $dato = $DBO->prepare($query);
        $dato->execute();

        // ? Consulta para obtener los datos del registro actualizado
        $query = "SELECT * FROM servicio WHERE idservicio='$idservicio' ";
        $dato = $DBO->prepare($query);
        $dato->execute();
        $json = $dato->fetchAll(PDO::FETCH_ASSOC); // Almacenar los datos en el arreglo
        break;
    case 3: // * Opción para eliminar un registro
        // ? Consulta para eliminar el registro de la base de datos
        $query = "UPDATE servicio SET activo = '0' WHERE idservicio='$idservicio'";
        $dato = $DBO->prepare($query);
        $dato->execute();
        break;
    case 4: // * Opción para obtener todos los registros
        // ? Consulta para obtener todos los registros de la base de datos
        $query = "SELECT * FROM servicio WHERE activo = 1";
        $dato = $DBO->prepare($query);
        $dato->execute();
        $json = $dato->fetchAll(PDO::FETCH_ASSOC); // Almacenar los datos en el arreglo
        break;
}

// ? Devolver los datos en formato JSON
print json_encode($json, JSON_UNESCAPED_UNICODE);

// ? Cerrar la conexión a la base de datos
$DBO = null;

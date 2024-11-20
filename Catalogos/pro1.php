<?php
// * ACTUALIZADO POR ENCASTIN 23/05/2024
include_once 'conn1.php'; // ? Incluir el archivo de conexión a la base de datos
date_default_timezone_set('America/Mexico_City'); // ? Zona Horaria de PHP
$hoy = date("Y/m/d H:i:s"); // ? Fecha actual en formato estándar

// ? Crear objeto de conexión
$DBO = Conexion::Conectar();

// ? Obtener datos del formulario o establecer valores predeterminados
$categoria_producto = (isset($_POST['categoria_producto'])) ?  strtoupper($_POST['categoria_producto']) : '';
$nombreProduc = (isset($_POST['nombreProduc'])) ?  strtoupper($_POST['nombreProduc']) : '';
$cantidad = (isset($_POST['cantidad'])) ?  strtoupper($_POST['cantidad']) : '';
$costo = (isset($_POST['costo'])) ? $_POST['costo'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$activo = (isset($_POST['activo'])) ? $_POST['activo'] : '';

// ! Importante obtener valores ID y Opción
$idproducto = (isset($_POST['idproducto'])) ? $_POST['idproducto'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

// ? Definir arreglo para almacenar los datos a devolver
$json = array();

// ? Switch para manejar las diferentes opciones
switch ($opcion) {
    case 1: // * Opción para crear nuevo registro
        // ? Busca el registro existente
        $query = $DBO->prepare("SELECT idproducto, activo FROM producto WHERE categoria_producto = :categoria_producto");
        $query->bindParam(':categoria_producto', $categoria_producto, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() == 0) {
            // ? Consulta para insertar el nuevo registro en la base de datos
            $query = "INSERT INTO producto VALUES ('', '$categoria_producto', '$nombreProduc', '$cantidad', '$costo', '$descripcion', '$activo')";
            $dato = $DBO->prepare($query);
            $dato->execute();

            // ? Selecciona el registro recién insertado
            $query = "SELECT * FROM producto ORDER BY idproducto DESC LIMIT 1";
            $dato = $DBO->prepare($query);
            $dato->execute();
            $json = $dato->fetchAll(PDO::FETCH_ASSOC); // Almacena los datos en el arreglo
        } else {
            // ? Obtiene los datos del producto existente
            $dato = $query->fetch(PDO::FETCH_ASSOC);
            $idproducto = $dato['idproducto'];

            // ? Re-habilita el registro existente
            $query = "UPDATE producto SET activo = '1' WHERE idproducto = :idproducto";
            $dato = $DBO->prepare($query);
            $dato->bindParam(':idproducto', $idproducto, PDO::PARAM_INT);
            $dato->execute();
        }
        break;
    case 2: // * Opción para editar un registro existente
        // ? Consulta para actualizar el registro
        $query = "UPDATE producto SET categoria_producto='$categoria_producto', nombreProduc='$nombreProduc', cantidad='$cantidad', costo='$costo', descripcion='$descripcion', activo='$activo' WHERE idproducto='$idproducto' ";
        $dato = $DBO->prepare($query);
        $dato->execute();

        // ? Consulta para obtener los datos del registro actualizado
        $query = "SELECT * FROM producto WHERE idproducto='$idproducto' ";
        $dato = $DBO->prepare($query);
        $dato->execute();
        $json = $dato->fetchAll(PDO::FETCH_ASSOC); // Almacenar los datos en el arreglo
        break;
    case 3: // * Opción para eliminar un registro
        // ? Consulta para eliminar el registro de la base de datos
        $query = "UPDATE producto SET activo = '0' WHERE idproducto='$idproducto'";
        $dato = $DBO->prepare($query);
        $dato->execute();
        break;
    case 4: // * Opción para obtener todos los registros
        // ? Consulta para obtener todos los registros de la base de datos
        $query = "SELECT * FROM producto WHERE activo = 1";
        $dato = $DBO->prepare($query);
        $dato->execute();
        $json = $dato->fetchAll(PDO::FETCH_ASSOC); // Almacenar los datos en el arreglo
        break;
}

// ? Devolver los datos en formato JSON
print json_encode($json, JSON_UNESCAPED_UNICODE);

// ? Cerrar la conexión a la base de datos
$DBO = null;

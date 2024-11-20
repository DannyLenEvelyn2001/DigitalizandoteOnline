<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    // * CREADO POR ENCASTIN 24/05/2024

    // error_reporting(0); // Para que no sean visibles los errores en pantalla
    session_start(); // Renovar la sesión
    date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
    $hoy = date("Y/m/d H:i:s"); // Fecha actual en formato ISO 8601

    include 'conn.php'; // * Incluyendo la Conexión
    ?>

    <title>Registro</title>
</head>

<body>

    <?php
    // ? Verificar email existente
    $query = $link->query("SELECT * FROM usuario WHERE email = '$_POST[email]'");

    if (mysqli_num_rows($query) == 0) { // * Correo electrónico dispnible

        $password = trim($_POST['password']);
        $confirmpassword = trim($_POST['confirmpassword']);
        $deacuerdo = $_POST['deacuerdo'];

        if ($password == $confirmpassword) { // * Nueva contraseña y su confirmación son iguales

            if ($deacuerdo == 1) { // * Términos y condiciones aceptados

                $nombre = trim(strtoupper($_POST['nombre']));
                $apellidos = trim(strtoupper($_POST['apellidos']));
                $celular = trim(strtoupper($_POST['celular']));
                $email = trim($_POST['email']);

                // ? Cifrado de contraseña
                $password = password_hash($password, PASSWORD_BCRYPT);

                // * Registro de usuario en BD
                $query = $link->query("INSERT INTO usuario VALUES ('', '$nombre', '$apellidos','', '$celular', '$email', '$password', '', '', '', '', '$deacuerdo', '$hoy', '1');");

                // * Creación de registro exitosa
                $mensaje = "¡Registrado correctamente! Inicie sesión con email y contraseña.";
                $exito = 1; // ? Bandera que indica si el procedimiento fué exitoso
            } else {
                $mensaje = "Debes aceptar los términos y condiciones para registrarse.";
            }
        } else {
            $mensaje = "La contraseña y la confirmación no coinciden, favor de verificar.";
        }
    } else {
        $mensaje = "Correo electrónico ya registrado, favor de verificar.";
    }

    $emailsoporte = 'vicmah9@gmail.com';

    // <!-- Mensaje de status -->
    if (isset($mensaje)) { ?>

        <script>
            alert("<?php echo $mensaje; ?>");

            <?php if ($exito == 1) { ?>
                window.location.href = "login.php"; // ? Redirección si el registro fué exitoso
            <?php } else { ?>
                history.back(); // ? Redirección al formulario si se encontró un problema
            <?php } ?>
        </script>

    <?php
        $link->close(); // ? Cierre de BD
    }
    ?>
</body>

</html>
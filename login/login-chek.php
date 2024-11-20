<?php
// * CREADO POR ENCASTIN 24/05/2024
error_reporting(0); // Para que no sean visibles los errores en pantalla
session_start(); // Renovar la sesión
date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
$hoy = date("Y/m/d H:i:s"); // Fecha actual en formato ISO 8601

include 'conn.php'; // * Incluyendo la Conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") { // ?Verificar si se envió el formulario

    $email = trim($_POST['email']);

    // ? Consulta SQL para buscar el usuario en la base de datos
    $query = mysqli_query($link, "SELECT idUsuario, password FROM usuario WHERE email ='$email' AND activo = 1");

    if (mysqli_num_rows($query) != 0) { // * El usuario fue encontrado

        $dato = mysqli_fetch_assoc($query);
        $password = $dato['password'];
        $idUsuario = $dato['idUsuario'];

        if (password_verify($_POST['password'], $password)) { // * Desencriptado de contraseña

            // ? Creación de Variables de sesión
            $_SESSION['usuario'] = $idUsuario;

            // $query = mysqli_query($link, "SELECT idEmpresa FROM empresa WHERE idUsuario ='$idUsuario' AND activo = 1");
            // $dato = mysqli_fetch_assoc($query);
            // $idEmpresa = $dato['idEmpresa'];

            // // ? Creación de Variables de sesión
            // $_SESSION['idEmpresa'] = $idEmpresa;

            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);

            echo "<script>window.location.href = '../Principal/index.php';</script>"; // * Redirección al iniciar sesión
        } else {
            // ! Contraseña incorrecta
            $error = "Correo electrónico o contraseña incorrecto, favor de verificar.";
        }
    } else {
        // ! Usuario no encontrado
        $error = "Usuario no encontrado, favor de verificar.";
    }
}

// ! <!-- Mensaje de error (se muestra si las credenciales son incorrectas) -->
if (isset($error)) { ?>
    <script>
        alert("<?php echo $error; ?>")
        history.back();
    </script>
<?php }
$link->close(); // ? Cierre de BD
?>
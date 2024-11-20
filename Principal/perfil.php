<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Renovar la sesión solo si no está iniciada
}
include '../login/conn.php'; // Incluyendo la conexión a la base de datos
$pre = 2;
include "../componentes/head.php";

if (!isset($_SESSION['usuario'])) {
    die("Error: Usuario no autenticado.");
}

$idUsuario = $_SESSION['usuario']; // Obteniendo el idUsuario de la sesión

// Obtener datos del perfil del usuario actual
$query = "SELECT * FROM perfil WHERE idUsuario = ?";
$stmt = $link->prepare($query); // Cambiar $conn a $link
$stmt->bind_param("i", $idUsuario);
$stmt->execute();
$result = $stmt->get_result();
$perfil = $result->fetch_assoc();

// Si el perfil no existe, inicializar las variables en blanco
if (!$perfil) {
    $perfil = [
        'foto' => '',
        'nombre' => '',
        'apellido' => '',
        'celular' => '',
        'email' => ''
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <?php include "../componentes/menu.php"; ?>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <?php include "../componentes/navbar.php"; ?>
            </div>

            <div id="seccion-con-fondo" class="container">
                <div class="page-inner">
                    <h1 class="text-center" style="background-color: Navy; color:white; border-radius: 5px;">Perfil de Usuario</h1><br><br>

                    <form action="perfil1.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group text-center">
                            <label for="foto">Foto de Perfil:</label><br>
                            <img src="../img/logo.png<?php echo htmlspecialchars($perfil['foto']); ?>" alt="Foto de Perfil" class="rounded-circle" width="150" height="150">
                            <input type="file" name="foto" id="foto" class="form-control mt-2">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo htmlspecialchars($perfil['nombre']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo htmlspecialchars($perfil['apellido']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="tel" name="celular" id="celular" class="form-control" value="<?php echo htmlspecialchars($perfil['celular']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($perfil['email']); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Actualizar Perfil</button>
                    </form>
                </div>
            </div>
            <?php include "../componentes/footer.php"; ?>
        </div>
    </div>
    <?php include "../componentes/script.php"; ?>
</body>

</html>
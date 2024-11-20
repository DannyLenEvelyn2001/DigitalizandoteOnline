<html lang="es">

<head>
    <?php
    error_reporting(0); // Para que no sean visibles los errores en pantalla
    session_start(); // Renovar la sesión
    if (isset($_SESSION['usuario'])) {  // * El usuario ha iniciado sesión personal
        $acceso = 1; // El usuario inició sesión personal
        $UsuarioID = $_SESSION['usuario']; // OBTENCIÓN DE USUARIO DE SESIÓN
    }
    date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
    $hoy = date("Y/m/d H:i:s"); // Fecha actual en formato estándar

    include 'conn.php'; // * Incluyendo la Conexión
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <!-- // * CREADO POR ENCASTIN 24/05/2024 -->

    <!-- // ? Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- // ? Favicons -->
    <link href="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" rel="icon">
    <link href="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" rel="apple-touch-icon">
</head>

<body class="bg-light">
    <?php
    // ! Validación de Sesión
    if ($acceso == 1) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida
    ?>

        <div class="container my-5">
            <div class="row g-3 justify-content-center">

                <div class="col-12 mb-4">
                    <h1 class="text-center">Dashboard</h1>
                </div>

                <div class="col-6">
                    <div class="card p-3 border-0 shadow-lg rounded-3">

                        <div class="text-center"><img src="https://gifs.org.es/gifs/2020/09/7215/gif-para-saludar.gif" alt="Logo" class="m-4" width="200px"></div>

                        <?php
                        $query = $link->query("SELECT nombre FROM usunegocios WHERE idusuneg = $UsuarioID");
                        $dato = mysqli_fetch_assoc($query);
                        $nombre = $dato['nombre'];
                        ?>
                        <h2 class="text-center mb-4">Hola <?php echo "$nombre"; ?>, has iniciado sesión correctamente.</h2>

                        <a href="logout.php" class="btn btn-outline-danger btn-lg">Cerrar Sesión</a>

                    </div>
                </div>

            </div>
        </div>

        <!-- // ? Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php
    } else { ?>
        <script>
            window.location.href = 'login.php'; // ? Página de redireccionamiento en caso de no haber iniciado sesión.
        </script>
    <?php
    } // ! Fin de la validación de Sesión

    $link->close(); // ? Cierre de BD
    ?>
</body>

</html>
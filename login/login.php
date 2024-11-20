<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <title>Iniciar Sesión | Digitalizándote</title>
    <link rel="stylesheet" href="assets\css\stylee.css">
</head>

<body>
    <header>
        <h2 class="logo"><img src="../regneg/assets/img/Logo_t.png" alt=""></h2>
        <nav class="navigation">
            <a href="../digitalizandoteP/index.php">Principal</a>
        </nav>
    </header>

    <div class="wrapper">

        <div class="form-box login">
            <h2>Iniciar Sesión</h2>
            <form action="login-chek.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Usuario: </label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Contraseña: </label>
                </div>
                <div class="rember-forgot">
                    <a href="#">Olvido su contraseña?</a>
                </div>
                <button type="submit" class="btn" name="boton1">
                    Ingresar
                </button>

                <div class="login-register">
                    <p>No tienes cuenta? <a href="registro.php" class="register-link">Registrar</a></p>
                </div>
            </form>
        </div>

    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>


</html>
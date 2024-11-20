<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>
    <!-- // * CREADO POR ENCASTIN 24/05/2024 -->

    <!-- // ? Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- // ? Favicons -->
    <link href="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" rel="icon">
    <link href="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="assets\css\stylee.css">
</head>

<body class="bg-light">
    <div class="container my-5">
        <div class="row g-3 justify-content-center">

            <div class="col-12 mb-4">
                <h1 class="text-center">Registro</h1>
            </div>

            <div class="col-6">
                <div class="card p-3 border-0 shadow-lg rounded-3">

                    <div class="text-center"><img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="Logo" class="m-4" width="200px"></div>

                    <form class="row g-3" action="reg-crearcuenta.php" method="POST">

                        <div class="col-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe tu nombre" required>
                        </div>
                        <div class="col-6">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Escribe tus apellidos" required>
                        </div>
                        <div class="col-6">
                            <label for="celular" class="form-label">Celular</label>
                            <input type="text" class="form-control" name="celular" id="celular" placeholder="Telefono" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@mail.com" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mínimo 8 caractéres" required>
                        </div>
                        <div class="col-md-6">
                            <label for="confirmpassword" class="form-label">Confirmar Password</label>
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirma tu password" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="deacuerdo" id="deacuerdo" value="1" required>
                                <label class="form-check-label" for="deacuerdo">
                                    Estoy de acuerdo con los <a href="#" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Términos y Condiciones</a> del sitio
                                </label>
                            </div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                        </div>

                        <p class="m-0">¿Ya tienes una cuenta? <a href="login.php" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Iniciar Sesión</a></p>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- // ? Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGITALIZÁNDOTE</title>
    <style>
        /* Estilos básicos para el navbar */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #333;
            padding: 10px 20px;
            color: white;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        /* .h3 {

            background-color: #0ab0d1;
        } */

        .navbar button {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .navbar button:hover {
            background-color: #1E90FF;
            font-size: 26px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <!-- Logo -->
        <div class="logo" style="color:DeepSkyBlue;">Digitalizándote <div class="h2" style="color:DarkTurquoise;">Tu mejor opción para ti</div>
        </div>

        <!-- Botón de regreso -->
        <button onclick=" goBack()">Regresar</button>
    </div>

    <script>
        function goBack() {
            window.location.href = '../../Principal/index.php';
        }
    </script>

</body>

</html>
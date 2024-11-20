<?php
include '../login/conn.php'; // * Incluyendo la Conexión
?>
<!DOCTYPE html>
<html lang="es">

<?php
$pre = 2;
include "../componentes/head.php";
include "components/acentos.php";
?>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.php" class="logo">
                        <img src="../img/logoazul.png" alt="navbar brand" class="navbar-brand" height="79" width="200" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <!-- INICIO DEL MENU -->
            <?php include "../componentes/menu.php"; ?>
            <!-- FINAL DEL MENU -->
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.php" class="logo">
                            <img src="../img/logoazul.png" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- NAVBAR DE LA CABEZA -->
                <!-- Navbar Header -->
                <?php include "../componentes/navbar.php"; ?>
                <!-- FINAL DEL NAVBAR -->
            </div>

            <!-- cuerpo -->
            <div id="seccion-con-fondo" class="container">
                <div class="page-inner">

                    <div class="d-flex align-items-center justify-content-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h1 class="text-center" style="color: black; font-weight: bold; font-size: 40px; border-radius: 20px;">Mis Tarjetas</h1>
                        </div>
                    </div>

                    <select class="form-select form-select-lg mb-3" aria-label="Seleccione una empresa" onchange="traerTarjetas(this.value);" id="valueEmpresa">
                        <option value="" selected>Seleccione una empresa</option>
                        <?php
                        $query = $link->query("SELECT idEmpresa FROM relempresa WHERE idUsuario = $SesionID AND activo = 1");
                        while ($dato = mysqli_fetch_array($query)) {
                            $idEmpresa = $dato['idEmpresa'];

                            $query1 = $link->query("SELECT nombre FROM empresa WHERE idEmpresa = $idEmpresa");
                            while ($dato = mysqli_fetch_array($query1)) {
                                $nombre = $dato['nombre'];

                                echo "<option value='$idEmpresa'>$nombre</option>";
                            }
                        }
                        ?>
                    </select>

                    <div id="traerTarjetas"></div>

                </div>
            </div>
            <?php include "../componentes/footer.php"; ?>
        </div>

        <!-- Scripts -->
        <?php include "../componentes/script.php"; ?>
        <script>
            function traerTarjetas(idEmpresa) {
                var archivoPHP = 'plantilla1.php';
                var idajaxContent = '#traerTarjetas';
                $.ajax({
                    type: "POST",
                    url: archivoPHP + "?idEmpresa=" + idEmpresa + "&idUsuario=<?= $SesionID ?>",
                    success: function(result) {
                        $(idajaxContent).html(result);
                    },
                    error: function() {
                        $(idajaxContent).html("<div class='alert alert-warning' role='alert'><i class='fa-solid fa-circle-exclamation me-2'></i>Se produjo un error al obtener el dato. Por favor recargue la página.</div>");
                    }
                });

                document.getElementById('idEmpresaVal').value = idEmpresa;
            }

            function abrirVentanaEmergente(url) {
                var Ancho = 350;
                var Alto = 900;
                var opciones = 'width=' + Ancho + ',height=' + Alto + ',scrollbars=yes,resizable=yes';
                window.open(url, 'EditarPlantilla', opciones);
            }
        </script>

</body>

</html>
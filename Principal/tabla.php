<?php


include 'conexion.php'; // * Incluyendo la Conexión
?>
<!DOCTYPE html>
<html lang="en">
<?php
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
                            <img
                                src="../img/logoazul.png"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20" />
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
                <!-- NAVBAR DE LA CABEZA  -->
                <!-- Navbar Header -->
                <?php
                include "navbar.php";
                ?>
                <!-- FINAL DEL NAVBAR -->
            </div>
            <!-- cuerpo -->
            <div id="seccion-con-fondo" class="container">
                <div class="page-inner">
                    <h1 class="text-center" style="background-color: Navy; color:white; border-radius: 5px;">Mis Colaboradores</h1><br><br>

                    <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#modalAgregarColaborador">Agregar Colaborador</button>

                    <!-- Modal para agregar Colaborador -->
                    <div class="modal fade" id="modalAgregarColaborador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Colaborador</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="formAgregarColaborador">
                                        <!-- Select para elegir la empresa -->
                                        <div class="mb-3">
                                            <label for="idEmpresa" class="form-label">Empresa</label>
                                            <select class="form-control" id="idEmpresa" name="idEmpresa" required>
                                                <?php
                                                $empresas = $link->query("SELECT idEmpresa, nombreEm FROM empresa");
                                                while ($empresa = $empresas->fetch_assoc()) {
                                                    echo "<option value='" . $empresa['idEmpresa'] . "'>" . $empresa['nombreEm'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cargo" class="form-label">Cargo</label>
                                            <input type="text" class="form-control" id="cargo" name="cargo" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tel" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" id="tel" name="tel" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="activo" class="form-label">Activo</label>
                                            <select class="form-control" id="activo" name="activo" required>
                                                <option value="1">Sí</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar Colaborador</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para editar Colaborador -->
                    <div class="modal fade" id="modalEditarColaborador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Colaborador</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="formEditarColaborador">
                                        <input type="hidden" id="edit_idColaborador" name="idColaborador"> <!-- Campo oculto para almacenar el idColaborador -->
                                        <!-- Select para elegir la empresa -->
                                        <div class="mb-3">
                                            <label for="edit_idEmpresa" class="form-label">Empresa</label>
                                            <select class="form-control" id="edit_idEmpresa" name="idEmpresa" required>
                                                <?php
                                                $empresas = $link->query("SELECT idEmpresa, nombreEm FROM empresa");
                                                while ($empresa = $empresas->fetch_assoc()) {
                                                    echo "<option value='" . $empresa['idEmpresa'] . "'>" . $empresa['nombreEm'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="edit_nombre" name="nombre" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_cargo" class="form-label">Cargo</label>
                                            <input type="text" class="form-control" id="edit_cargo" name="cargo" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_tel" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" id="edit_tel" name="tel" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="edit_email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_activo" class="form-label">Activo</label>
                                            <select class="form-control" id="edit_activo" name="activo" required>
                                                <option value="1">Sí</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabla para mostrar la lista de Colaboradores -->



                    <!-- INICIO DEL CORROSEL -->

                    <!-- FIN DEL CARROSEL -->

                </div>
            </div>
            <?php
            include "footer.php";
            ?>
        </div>

        <!--LOS COLRES DE CONFIGURACION DEL SISTEMA
     Custom template | don't include it in your project! -->

        <!-- End Custom template -->
    </div>
    <!--   Core JS Fi les   -->
    <!-- jQuery Scrollbar -->
    <!-- Chart JS -->
    <!-- jQuery Sparkline -->
    <!-- Chart Circle -->
    <!-- Datatables -->
    <!-- Bootstrap Notify -->
    <!-- jQuery Vector Maps -->
    <!-- Sweet Alert -->
    <!-- Kaiadmin JS -->
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <?php
    include "script.php";
    ?>

</body>

</html>
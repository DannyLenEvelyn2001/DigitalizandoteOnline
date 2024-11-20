<?php

$pre = 2;

include '../login/conn.php'; // * Incluyendo la Conexión
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>

<body>
    <?php
    // ! Validación de Sesión
    if ($acceso == 1) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida
    ?>
        <div class="wrapper">
            <?php
            $query = $DB->query("SELECT nombre FROM usunegocios WHERE idusuneg = $SesionID");
            $dato = mysqli_fetch_assoc($query);
            $nombre = $dato['nombre'];
            ?>
            <!-- Sidebar -->
            <div class="sidebar" data-background-color="dark">
                <div class="sidebar-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../Principal/index.php" class="logo">
                            <img
                                src="<?php echo $pre; ?>img/logoazul.png"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="79" width="200" />
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
                <?php
                include "../componentes/menu.php";

                ?>
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
                                    src="<?php echo $pre; ?>img/logoazul.png"
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
                    include "../componentes/navbar.php";

                    ?>
                    <!-- FINAL DEL NAVBAR -->
                </div>
                <!-- cuerpo -->
                <div id="seccion-con-fondo" class="container">
                    <div class="page-inner">
                        <header class="m-4"> <!-- // ? Título -->
                            <h3 class='text-center fw-bold'>PRODUCTOS</h3>
                        </header>
                        <div class="container"> <!-- // ? Contenedor -->

                            <div class="row my-3"> <!-- // ? Botón Nuevo -->
                                <div class="col-lg-12">
                                    <button id="btnNuevo" type="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus me-2"></i>NUEVO</button>
                                </div>
                            </div> <!-- // ? Fin Botón Nuevo -->

                            <div class="row shadow-lg rounded-3"> <!-- // ? Tabla -->
                                <div class="col-lg-12">
                                    <div class="table-responsive p-3">
                                        <table id="tablaProductos" class="table table-striped table-bordered table-condensed">
                                            <thead class="text-center">
                                                <tr>
                                                    <th scope="col">idProducto</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Costo</th>
                                                    <th scope="col">Descripcion</th>
                                                    <th scope="col">Activo</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- // ? Fin Tabla -->

                        </div> <!-- // ? Fin Contenedor -->

                        <!-- // ? Modal Para Nuevo Registro -->
                        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5"></h1> <!-- Un título se coloca automáticamente -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="nuevoProducto">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Categoria</label>
                                                        <input type="text" class="form-control" id="categoria_producto">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Nombre</label>
                                                        <input type="text" class="form-control" id="nombreProduc">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Cantidad</label>
                                                        <input type="text" class="form-control" id="cantidad">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Costo</label>
                                                        <input type="text" class="form-control" id="costo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Descripcion</label>
                                                        <input type="text" class="form-control" id="descripcion">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Activo</label>
                                                        <input type="number" class="form-control" id="activo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- // ? Fin Modal Para Nuevo Registro-->
                        <!-- Modal para agregar Colaborador -->
                        <!-- Modal para editar Colaborador -->
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
        <!--   Core JS Files   -->
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

        <script>
            document.getElementById('plantilla-1').addEventListener('click', function() {
                var Ancho = screen.width / 3 - 100;
                var Alto = screen.height;
                const opciones1 = 'width=' + Ancho + ',height=' + Alto;
                window.open('../Plantillas/td1/landing-form.php?a=1', 'formularioPopup', opciones1);
                // window.open('../Plantillas/td1/landing-form.php?a=1', 'formularioPopup', 'width=400,height=400');
            });
        </script>

    <?php
    } else { ?>
        <script>
            window.location.href = '../login/login.php'; // ? Página de redireccionamiento en caso de no haber iniciado sesión.
        </script>
    <?php
    } // ! Fin de la validación de Sesión

    $DB->close(); // ? Cierre de BD
    ?>
</body>

</html>
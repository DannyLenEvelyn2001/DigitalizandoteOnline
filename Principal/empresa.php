<!DOCTYPE html>
<html lang="es">
<?php
include '../login/conn.php'; // * Incluyendo la Conexión
$pre = 2;
include "../componentes/head.php";
?>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.php" class="logo">
                        <img
                            src="../img/logoazul.png"
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
                include "../componentes/navbar.php";
                ?>
                <!-- FINAL DEL NAVBAR -->
            </div>
            <!-- cuerpo -->
            <div id="seccion-con-fondo" class="container">
                <div class="page-inner">
                    <h1 class="text-center" style="background-color: Navy; color:white; border-radius: 5px;">Mis Empresas/ Negocios</h1><br><br>

                    <div class="table-responsive">
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre de la Empresa</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // require("conexion.php");
                                $sql = $link->query("SELECT idEmpresa FROM relempresa WHERE idUsuario = $SesionID AND activo = 1");
                                while ($resultado = $sql->fetch_assoc()) {
                                    $idEmpresa = $resultado['idEmpresa'];
                                    $sql1 = $link->query("SELECT * FROM empresa WHERE idEmpresa = $idEmpresa AND activo = 1");
                                    while ($resultado = $sql1->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td scope="row"><?php echo strtoupper($resultado['nombre']) ?></td>
                                            <td scope="row"><?php echo strtoupper($resultado['descripcion']) ?></td>
                                            <td scope="row"><?php echo strtoupper($resultado['direccion']) ?></td>
                                            <td scope="row"><?php echo $resultado['telefono'] ?></td>
                                            <td scope="row"><?php echo $resultado['email'] ?></td>
                                            <td>

                                                <!-- Botón para abrir el modal de edición -->
                                                <button type="button" class="btn btn-warning btn-editar" data-id="<?php echo $resultado['idEmpresa']; ?>" data-nombre="<?php echo $resultado['nombre']; ?>" data-desc="<?php echo $resultado['descripcion']; ?>" data-direccion="<?php echo $resultado['direccion']; ?>" data-telefono="<?php echo $resultado['telefono']; ?>" data-email="<?php echo $resultado['email']; ?>">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <!-- Botón para eliminar con confirmación -->
                                                <button type="button" class="btn btn-danger btn-eliminar" data-id="<?php echo $resultado['idEmpresa']; ?>">
                                                    <i class="fa-solid fa-eraser"></i>
                                                </button>

                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- MODAL PARA AGREGAR -->
                    <div class="container">
                        <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#modalAgregarEmpresa">Agregar Empresa</button>
                        <div class="modal fade" id="modalAgregarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Empresa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formAgregarEmpresa">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="desc" class="form-label">Descripción</label>
                                                <input type="text" class="form-control" id="desc" name="desc" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="direccion" class="form-label">Dirección</label>
                                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="telefono" class="form-label">Teléfono</label>
                                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Guardar Empresa</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL PARA EDITAR  -->
                    <div class="modal fade" id="modalEditarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Empresa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="formEditarEmpresa">
                                        <input type="hidden" id="edit_idEmpresa" name="idEmpresa"> <!-- Campo oculto para almacenar el idEmpresa -->
                                        <div class="mb-3">
                                            <label for="edit_nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="edit_nombre" name="nombre" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_desc" class="form-label">Descripción</label>
                                            <input type="text" class="form-control" id="edit_desc" name="descripcion" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_direccion" class="form-label">Dirección</label>
                                            <input type="text" class="form-control" id="edit_direccion" name="direccion" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_telefono" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" id="edit_telefono" name="telefono" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="edit_email" name="email" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- INICIO DEL CORROSEL -->

                    <!-- FIN DEL CARROSEL -->

                </div>
            </div>
            <?php
            include "../componentes/footer.php";
            ?>
            <script>
                // Manejar el envío del formulario de agregar empresa mediante AJAX
                document.getElementById('formAgregarEmpresa').addEventListener('submit', function(event) {
                    event.preventDefault(); // Evitar envío normal del formulario

                    // Obtener los datos del formulario
                    var formData = new FormData(this);

                    // Enviar la solicitud AJAX
                    fetch('agregar_empresa.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Empresa creada exitosamente');
                                // Opcional: cerrar el modal después de crear la empresa
                                var modalAgregarEmpresa = new bootstrap.Modal(document.getElementById('modalAgregarEmpresa'));
                                modalAgregarEmpresa.hide();
                                // Actualizar la tabla de empresas (opcional)
                                window.location.reload();
                            } else {
                                alert('Error al crear la empresa: ' + data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Hubo un problema al procesar la solicitud.');
                        });
                });
                // Manejar el clic en botones de eliminar con confirmación
                var btnEliminar = document.querySelectorAll('.btn-eliminar');
                btnEliminar.forEach(function(button) {
                    button.addEventListener('click', function() {
                        var idEmpresa = this.getAttribute('data-id');
                        if (confirm('¿Estás seguro de eliminar esta empresa?')) {
                            // Redireccionar a delete.php con el idEmpresa a eliminar
                            window.location.href = 'delete.php?id=' + idEmpresa;
                        }
                    });
                });

                // Manejar el clic en botones de editar para llenar el formulario de edición
                var btnEditar = document.querySelectorAll('.btn-editar');
                btnEditar.forEach(function(button) {
                    button.addEventListener('click', function() {
                        var idEmpresa = this.getAttribute('data-id');
                        var nombre = this.getAttribute('data-nombre');
                        var desc = this.getAttribute('data-desc');
                        var direccion = this.getAttribute('data-direccion');
                        var telefono = this.getAttribute('data-telefono');
                        var email = this.getAttribute('data-email');
                        var activo = this.getAttribute('data-activo');

                        // Llenar el formulario de edición con los datos de la empresa seleccionada
                        document.getElementById('edit_idEmpresa').value = idEmpresa;
                        document.getElementById('edit_nombre').value = nombre;
                        document.getElementById('edit_desc').value = desc;
                        document.getElementById('edit_direccion').value = direccion;
                        document.getElementById('edit_telefono').value = telefono;
                        document.getElementById('edit_email').value = email;


                        // Mostrar el modal de edición
                        var modalEditarEmpresa = new bootstrap.Modal(document.getElementById('modalEditarEmpresa'));
                        modalEditarEmpresa.show();
                    });
                });

                // Manejar el envío del formulario de edición mediante AJAX
                document.getElementById('formEditarEmpresa').addEventListener('submit', function(event) {
                    event.preventDefault(); // Evitar envío normal del formulario

                    // Obtener los datos del formulario
                    var formData = new FormData(this);

                    // Enviar la solicitud AJAX
                    fetch('editar_empresa.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Empresa actualizada exitosamente');
                                // Opcional: cerrar el modal después de actualizar la empresa
                                var modalEditarEmpresa = new bootstrap.Modal(document.getElementById('modalEditarEmpresa'));
                                modalEditarEmpresa.hide();
                                // Actualizar la tabla de empresas (opcional)
                                window.location.reload();
                            } else {
                                alert('Error al actualizar la empresa: ' + data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Hubo un problema al procesar la solicitud.');
                        });
                });
            </script>
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
    include "../componentes/script.php";
    ?>

</body>

</html>
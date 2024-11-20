<?php
$pre = 2;
?>
<!doctype html>
<html lang="es">

<head>
    <?php
    include "../componentes/head.php";
    ?>
</head>



<body>

    <div class="wrapper">

        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="<?php echo $pre; ?>Principal/index.php" class="logo">
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
                    <header class="m-4"> <!-- // ? Título -->
                        <h3 class='text-center fw-bold'>SERVICIOS</h3>
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
                                    <table id="tablaServicios" class="table table-striped table-bordered table-condensed">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">idservicio</th>
                                                <th scope="col">Usuario</th>
                                                <th scope="col">Servicio</th>
                                                <th scope="col">Npmbre del servicio</th>
                                                <th scope="col">Descripcion</th>
                                                <th scope="col">Costo</th>
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
                                <form id="nuevoServicio">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">Categoria</label>
                                                    <input type="text" class="form-control" id="usuario">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">Nombre</label>
                                                    <input type="text" class="form-control" id="tipo_servicio">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">nom_servicio</label>
                                                    <input type="text" class="form-control" id="nom_servicio">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">descripcion</label>
                                                    <input type="text" class="form-control" id="descripcion">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">costo</label>
                                                    <input type="text" class="form-control" id="costo">
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
            include "../componentes/footer.php";
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
    include "../componentes/script.php";

    ?>
    <!-- Librerías JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

    <!-- // ? Script Acciones de Datatables -->
    <script>
        // Esperar a que el documento esté listo para ejecutar código jQuery
        $(document).ready(function() {
            var idUsuario, opcion; // Variables para almacenar el ID del registro y la opción seleccionada
            opcion = 4; // Opción por defecto para obtener datos

            // Configuración de DataTable
            tablaServicios = $('#tablaServicios').DataTable({
                "ajax": {
                    "url": "servicio1.php", // URL para obtener datos de la tabla
                    "method": 'POST', // Método HTTP utilizado
                    "data": {
                        opcion: opcion
                    }, // Datos adicionales enviados al servidor
                    "dataSrc": "" // Nombre del arreglo que contiene los datos devueltos por el servidor
                },
                "columns": [{ // Definición de las columnas de la tabla
                        "data": "idservicio", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "usuario", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "tipo_servicio", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "nom_servicio", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "descripcion", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "costo", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "activo", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    { // Columna para las acciones (editar y eliminar)
                        "defaultContent": "<div class='btn-group'><button class='btn btn-warning btnEditar'><i class='fa fa-pen me-2'></i>Editar</button><button class='btn btn-danger btnBorrar'><i class='fa fa-trash me-2'></i>Eliminar</button></div>",
                        "className": "text-center" // Centrar contenido de la columna
                    }
                ]
            });

            var fila; // Variable para almacenar la fila seleccionada

            // Enviar formulario al agregar nuevo registro
            $('#nuevoServicio').submit(function(e) {
                e.preventDefault(); // Evitar el comportamiento predeterminado del formulario
                usuario = $.trim($('#usuario').val()); // Obtener el valor del input
                tipo_servicio = $.trim($('#tipo_servicio').val()); // Obtener el valor del input
                nom_servicio = $.trim($('#nom_servicio').val()); // Obtener el valor del input
                descripcion = $.trim($('#descripcion').val()); // Obtener el valor del input
                costo = $.trim($('#costo').val()); // Obtener el valor del input
                activo = $.trim($('#activo').val()); // Obtener el valor del input
                $.ajax({
                    url: "servicio1.php", // URL a la que se enviarán los datos
                    type: "POST", // Método HTTP utilizado
                    datatype: "json", // Tipo de datos esperados en la respuesta
                    data: {
                        idservicio: idservicio,
                        usuario: usuario,
                        tipo_servicio: tipo_servicio,
                        nom_servicio: nom_servicio,
                        descripcion: descripcion,
                        costo: costo,
                        activo: activo,
                        opcion: opcion
                    }, // Datos enviados al servidor
                    success: function(data) { // Función a ejecutar si la solicitud tiene éxito
                        tablaServicios.ajax.reload(null, false); // Recargar la tabla
                    }
                });
                $('#modalCRUD').modal('hide'); // Ocultar el modal de CRUD
            });

            // Mostrar formulario para agregar nuevo registro
            $("#btnNuevo").click(function() {
                opcion = 1; // Establecer opción para agregar nuevo registro
                idservicio = null; // Restablecer ID del registro
                $("#nuevoServicio").trigger("reset"); // Restablecer el formulario
                // $(".modal-header").css("background-color", "#007bff"); // ? En caso de establecer color al formulario
                // $(".modal-header").css("color", "white"); // ? En caso de establecer color al formulario
                $(".modal-title").text("Nuevo Servicio"); // Establecer título del modal
                $('#modalCRUD').modal('show'); // Mostrar modal de CRUD
            });

            // Mostrar formulario para editar registro
            $(document).on("click", ".btnEditar", function() {
                opcion = 2; // Establecer opción para editar registro
                fila = $(this).closest("tr"); // Obtener la fila seleccionada
                idservicio = parseInt(fila.find('td:eq(0)').text()); // Obtener ID del registro
                usuario = fila.find('td:eq(1)').text(); // Obtener valor del registro
                tipo_servicio = fila.find('td:eq(2)').text(); // Obtener valor del registro
                nom_servicio = fila.find('td:eq(3)').text(); // Obtener valor del registro
                descripcion = fila.find('td:eq(4)').text(); // Obtener valor del registro
                costo = fila.find('td:eq(5)').text(); // Obtener valor del registro
                activo = fila.find('td:eq(6)').text(); // Obtener valor del registro
                $("#usuario").val(usuario); // Establecer valor al input
                $("#tipo_servicio").val(tipo_servicio); // Establecer valor al input
                $("#nom_servicio").val(nom_servicio); // Establecer valor al input
                $("#descripcion").val(descripcion); // Establecer valor al input
                $("#costo").val(costo); // Establecer valor al input
                $("#activo").val(activo); // Establecer valor al input
                // $(".modal-header").css("background-color", "#007bff"); // ? En caso de establecer color al formulario
                // $(".modal-header").css("color", "white"); // ? En caso de establecer color al formulario
                $(".modal-title").text("Editar Servicio"); // Establecer título del modal
                $('#modalCRUD').modal('show'); // Mostrar modal de CRUD
            });

            // Confirmación al eliminar registro
            $(document).on("click", ".btnBorrar", function() {
                fila = $(this); // Obtener el botón seleccionado
                idservicio = parseInt($(this).closest('tr').find('td:eq(0)').text()); // Obtener ID del registro
                opcion = 3; // Establecer opción para eliminar registro
                var respuesta = confirm("¿Está seguro de eliminar este usuario?"); // Confirmar eliminación
                if (respuesta) { // Si el usuario confirma la eliminación
                    $.ajax({
                        url: "servicio1.php", // URL a la que se enviarán los datos
                        type: "POST", // Método HTTP utilizado
                        datatype: "json", // Tipo de datos esperados en la respuesta
                        data: {
                            opcion: opcion,
                            idservicio: idservicio
                        }, // Datos enviados al servidor
                        success: function() { // Función a ejecutar si la solicitud tiene éxito
                            tablaServicios.row(fila.parents('tr')).remove().draw(); // Eliminar fila de la tabla
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
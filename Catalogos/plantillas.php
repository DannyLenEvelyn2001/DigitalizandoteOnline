<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/11069/11069067.png" />

    <title>Catalogo Plantillas</title>
    <!-- // * ACTUALIZADO POR ENCASTIN 23/05/2024 -->

    <!-- // ? Bootstrap | Datatables Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- // ? Íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- // ? Estilos Personalizados Datatables -->
    <link rel="stylesheet" href="assets/css/datatables.css">
</head>
<div id="Layer1">
    <a href="../Principal/index.php"><img src="assets/img/cerrar1.jpg"
            width="150" height="40" alt=""></a>
</div>

<body class="bg-light">

    <header class="m-4"> <!-- // ? Título -->
        <h3 class='text-center fw-bold'>Plantillas</h3>
    </header> <!-- // ? Fin Título -->

    <div class="container"> <!-- // ? Contenedor -->

        <div class="row my-3"> <!-- // ? Botón Nuevo -->
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus me-2"></i>NUEVO</button>
            </div>
        </div> <!-- // ? Fin Botón Nuevo -->

        <div class="row shadow-lg rounded-3"> <!-- // ? Tabla -->
            <div class="col-lg-12">
                <div class="table-responsive p-3">
                    <table id="tablaPlantilla" class="table table-striped table-bordered table-condensed">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">idPlantilla</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Nombre</th>
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
                <form id="nuevoPlantilla">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Categoria</label>
                                    <input type="text" class="form-control" id="categoria">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">nombre</label>
                                    <input type="text" class="form-control" id="nombre">
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

    <!-- Librerías JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

    <?php
    include "conn1.php"; // ? Idioma y Etiquetas de DataTtables.
    ?>

    <!-- // ? Script Acciones de Datatables -->
    <script>
        // Esperar a que el documento esté listo para ejecutar código jQuery
        $(document).ready(function() {
            var idUsuario, opcion; // Variables para almacenar el ID del registro y la opción seleccionada
            opcion = 4; // Opción por defecto para obtener datos

            // Configuración de DataTable
            tablaPlantilla = $('#tablaPlantilla').DataTable({
                "ajax": {
                    "url": "plantillas1.php", // URL para obtener datos de la tabla
                    "method": 'POST', // Método HTTP utilizado
                    "data": {
                        opcion: opcion
                    }, // Datos adicionales enviados al servidor
                    "dataSrc": "" // Nombre del arreglo que contiene los datos devueltos por el servidor
                },
                "columns": [{ // Definición de las columnas de la tabla
                        "data": "idcataPlantilla", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "categoria", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "nombre", // Mostrar dato
                        "className": "text-center" // Centrar contenido de la columna
                    },
                    {
                        "data": "descripcion", // Mostrar dato
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
            $('#nuevoPlantilla').submit(function(e) {
                e.preventDefault(); // Evitar el comportamiento predeterminado del formulario
                categoria = $.trim($('#categoria').val()); // Obtener el valor del input
                nombre = $.trim($('#nombre').val()); // Obtener el valor del input
                descripcion = $.trim($('#descripcion').val()); // Obtener el valor del input
                activo = $.trim($('#activo').val()); // Obtener el valor del input
                $.ajax({
                    url: "plantillas1.php", // URL a la que se enviarán los datos
                    type: "POST", // Método HTTP utilizado
                    datatype: "json", // Tipo de datos esperados en la respuesta
                    data: {
                        idcataPlantilla: idcataPlantilla,
                        categoria: categoria,
                        nombre: nombre,
                        descripcion: descripcion,
                        activo: activo,
                        opcion: opcion
                    }, // Datos enviados al servidor
                    success: function(data) { // Función a ejecutar si la solicitud tiene éxito
                        tablaPlantilla.ajax.reload(null, false); // Recargar la tabla
                    }
                });
                $('#modalCRUD').modal('hide'); // Ocultar el modal de CRUD
            });

            // Mostrar formulario para agregar nuevo registro
            $("#btnNuevo").click(function() {
                opcion = 1; // Establecer opción para agregar nuevo registro
                idcataPlantilla = null; // Restablecer ID del registro
                $("#nuevoPlantilla").trigger("reset"); // Restablecer el formulario
                // $(".modal-header").css("background-color", "#007bff"); // ? En caso de establecer color al formulario
                // $(".modal-header").css("color", "white"); // ? En caso de establecer color al formulario
                $(".modal-title").text("Nuevo Plantilla"); // Establecer título del modal
                $('#modalCRUD').modal('show'); // Mostrar modal de CRUD
            });

            // Mostrar formulario para editar registro
            $(document).on("click", ".btnEditar", function() {
                opcion = 2; // Establecer opción para editar registro
                fila = $(this).closest("tr"); // Obtener la fila seleccionada
                idcataPlantilla = parseInt(fila.find('td:eq(0)').text()); // Obtener ID del registro
                categoria = fila.find('td:eq(1)').text(); // Obtener valor del registro
                nombre = fila.find('td:eq(3)').text(); // Obtener valor del registro
                descripcion = fila.find('td:eq(4)').text(); // Obtener valor del registro
                activo = fila.find('td:eq(6)').text(); // Obtener valor del registro
                $("#categoria").val(categoria); // Establecer valor al input
                $("#nombre").val(nombre); // Establecer valor al input
                $("#descripcion").val(descripcion); // Establecer valor al input
                $("#activo").val(activo); // Establecer valor al input
                // $(".modal-header").css("background-color", "#007bff"); // ? En caso de establecer color al formulario
                // $(".modal-header").css("color", "white"); // ? En caso de establecer color al formulario
                $(".modal-title").text("Editar Plantilla"); // Establecer título del modal
                $('#modalCRUD').modal('show'); // Mostrar modal de CRUD
            });

            // Confirmación al eliminar registro
            $(document).on("click", ".btnBorrar", function() {
                fila = $(this); // Obtener el botón seleccionado
                idcataPlantilla = parseInt($(this).closest('tr').find('td:eq(0)').text()); // Obtener ID del registro
                opcion = 3; // Establecer opción para eliminar registro
                var respuesta = confirm("¿Está seguro de eliminar este usuario?"); // Confirmar eliminación
                if (respuesta) { // Si el usuario confirma la eliminación
                    $.ajax({
                        url: "plantillas1.php", // URL a la que se enviarán los datos
                        type: "POST", // Método HTTP utilizado
                        datatype: "json", // Tipo de datos esperados en la respuesta
                        data: {
                            opcion: opcion,
                            idcataPlantilla: idcataPlantilla
                        }, // Datos enviados al servidor
                        success: function() { // Función a ejecutar si la solicitud tiene éxito
                            tablaPlantilla.row(fila.parents('tr')).remove().draw(); // Eliminar fila de la tabla
                        }
                    });
                }
            });
        });
    </script>

</body>

</html>
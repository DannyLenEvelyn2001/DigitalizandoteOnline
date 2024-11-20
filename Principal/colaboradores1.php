<?php
include '../login/conn.php'; // * Incluyendo la Conexión

$idEmpresa = $_REQUEST['idEmpresa'];

if (!empty($idEmpresa)) {
?>

    <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#modalAgregarColaborador" id="btn-value">Agregar Colaborador</button>

    <!-- Tabla para mostrar la lista de Colaboradores -->
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consulta para obtener todos los colaboradores con el nombre de la empresa
                $result = $link->query("SELECT idColaborador FROM relcolaborador WHERE idEmpresa = $idEmpresa AND activo = 1");
                while ($row = $result->fetch_assoc()) {
                    $idColaborador = $row['idColaborador'];

                    $result1 = $link->query("SELECT * FROM colaborador WHERE idColaborador = $idColaborador AND activo = 1");
                    while ($row = $result1->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= strtoupper($row['nombre']); ?></td>
                            <td><?= strtoupper($row['cargo']); ?></td>
                            <td><?= $row['tel']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['activo'] ? 'Sí' : 'No'; ?></td>
                            <td>
                                <!-- Botón para abrir el modal de edición -->
                                <button type="button" class="btn btn-warning btn-editar" data-id="<?= $idColaborador ?>" data-idEmpresa="<?= $idEmpresa ?>" data-nombre="<?= $row['nombre']; ?>" data-cargo="<?= $row['cargo']; ?>" data-tel="<?= $row['tel']; ?>" data-email="<?= $row['email']; ?>">
                                    <i class="fa-solid fa-user-pen"></i>
                                </button>
                                <!-- Botón para eliminar con confirmación -->
                                <button type="button" class="btn btn-danger btn-eliminar"
                                    data-id="<?php echo $row['idColaborador']; ?>">
                                    <i class="fa-solid fa-user-slash"></i>
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

    <script>
        // Manejar el clic en el botón de editar Colaborador
        document.querySelectorAll('.btn-editar').forEach(button => {
            button.addEventListener('click', function() {
                var idColaborador = this.dataset.id;
                var idEmpresa = this.dataset.idempresa;
                var nombre = this.dataset.nombre;
                var cargo = this.dataset.cargo;
                var tel = this.dataset.tel;
                var email = this.dataset.email;
                // var activo = this.dataset.activo;

                // Rellenar los campos del modal de edición con los datos existentes
                document.getElementById('edit_idColaborador').value = idColaborador;
                document.getElementById('edit_idEmpresa').value = idEmpresa;
                document.getElementById('edit_nombre').value = nombre;
                document.getElementById('edit_cargo').value = cargo;
                document.getElementById('edit_tel').value = tel;
                document.getElementById('edit_email').value = email;
                // document.getElementById('edit_activo').value = activo;

                // Mostrar el modal de edición
                var modalEditar = new bootstrap.Modal(document.getElementById('modalEditarColaborador'));
                modalEditar.show();
            });
        });

        // Manejar el envío del formulario de edición de Colaborador mediante AJAX
        document.getElementById('formEditarColaborador').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar envío normal del formulario

            // Obtener los datos del formulario
            var formData = new FormData(this);

            // Enviar la solicitud AJAX
            fetch('editar_colaboradores.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Recargar la página o actualizar la tabla de manera dinámica
                        location.reload();
                    } else {
                        alert('Error al editar colaborador.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Ocurrió un error al enviar la solicitud.');
                });
        });

        // Manejar el clic en el botón de eliminar Colaborador
        document.querySelectorAll('.btn-eliminar').forEach(button => {
            button.addEventListener('click', function() {
                if (confirm('¿Estás seguro de que deseas eliminar este colaborador?')) {
                    var idColaborador = this.dataset.id;

                    // Enviar la solicitud AJAX para eliminar el colaborador
                    fetch('delete_colaborador.php', {
                            method: 'POST',
                            body: JSON.stringify({
                                idColaborador: idColaborador
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Recargar la página o actualizar la tabla de manera dinámica
                                location.reload();
                            } else {
                                alert('Error al eliminar colaborador.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Ocurrió un error al enviar la solicitud.');
                        });
                }
            });
        });
    </script>
<?php
}
?>
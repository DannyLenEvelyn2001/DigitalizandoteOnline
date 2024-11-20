<?php
include '../login/conn.php'; // * Incluyendo la Conexión
include "components/acentos.php";

$idEmpresa = $_REQUEST['idEmpresa'];
$idUsuario = $_REQUEST['idUsuario'];


if (!empty($idEmpresa) && !empty($idUsuario)) {
?>

    <div class="card mb-3">
        <div class="card-header">¿No tienes tarjetas?</div>
        <div class="card-body pt-2">
            <h5 class="card-title text-black mb-3">Crear tarjeta</h5>

            <div class="row">
                <div class="col-md-3">
                    <label for="selectEmpresa" class="form-label">Empresa</label>
                    <select class="form-select" id="selectEmpresa" disabled>
                        <!-- <option value="" disabled>Seleccione una empresa</option> -->
                        <?php
                        $query1 = $link->query("SELECT nombre FROM empresa WHERE idEmpresa = $idEmpresa");
                        while ($dato = mysqli_fetch_array($query1)) {
                            $nombre = $dato['nombre'];

                            echo "<option selected disabled>$nombre</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="selectColaborador" class="form-label">Colaborador</label>
                    <select class="form-select" id="selectColaborador">
                        <option value="" disabled selected>Seleccione un colaborador</option>
                        <?php
                        $query = $link->query("SELECT idColaborador FROM relcolaborador WHERE idEmpresa = $idEmpresa");
                        while ($dato = mysqli_fetch_array($query)) {
                            $idColaborador = $dato['idColaborador'];

                            $query1 = $link->query("SELECT nombre FROM colaborador WHERE idColaborador = $idColaborador");
                            while ($dato = mysqli_fetch_array($query1)) {
                                $nombre = acentosmayus(strtoupper($dato['nombre']));

                                echo "<option  value='$idColaborador'>$nombre</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="selectCategoria" class="form-label">Categoría</label>
                    <select class="form-select" id="selectCategoria">
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <?php
                        $query = $link->query("SELECT plantilla, carpeta FROM plantilla WHERE activo = 1 ORDER BY plantilla ASC");
                        while ($dato = mysqli_fetch_array($query)) {
                            $plantilla = acentosmayus(strtoupper($dato['plantilla']));
                            $carpeta = $dato['carpeta'];

                            echo "<option value='../Plantillas/$carpeta/landing-form.php?a=$idEmpresa'>$plantilla</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-1">
                    <label for="btn" class="form-label">&nbsp;</label>
                    <button class="btn btn-primary py-2" id="btn" onclick="crearTarjeta();">Crear</button>
                </div>

            </div>

        </div> <!-- Card body -->
    </div> <!-- Card -->

    <div class="table-responsive rounded-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Colaborador</th>
                    <th class="text-center" scope="col">Plantilla</th>
                    <th class="text-end" scope="col">Acciones</th>
                    <th class="text-end" scope="col"><button class="btn btn-secondary btn-sm" onclick="location.reload();"><i class="fa-solid fa-rotate-right me-2"></i>Recargar</button></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $cont = 1;
                $nombreColab = "";
                // echo "Empresa = $idEmpresa";

                $query = $link->query("SELECT idColaborador FROM relcolaborador WHERE idEmpresa = '$idEmpresa' AND activo = '1'");
                while ($dato = mysqli_fetch_array($query)) {
                    $idColaborador = $dato['idColaborador'];

                    $query1 = $link->query("SELECT nombre FROM colaborador WHERE idColaborador = '$idColaborador' AND activo = '1'");
                    while ($dato = mysqli_fetch_array($query1)) {
                        $nombreColab = $dato['nombre'];
                    }

                    $query2 = $link->query("SELECT idReltarjeta, idPlantilla, idTarjeta FROM reltarjeta WHERE (idColaborador = '$idColaborador') AND activo = '1'");
                    while ($dato = mysqli_fetch_array($query2)) {
                        $idReltarjeta = $dato['idReltarjeta'];
                        $idPlantilla = $dato['idPlantilla'];
                        $idTarjeta = $dato['idTarjeta'];

                        $query3 = $link->query("SELECT plantilla, carpeta FROM plantilla WHERE idPlantilla = '$idPlantilla'");
                        while ($dato = mysqli_fetch_array($query3)) {
                            $nombrePlantilla = $dato['plantilla'];
                            $carpeta = $dato['carpeta'];
                        }

                        $dominio = "https://github.com/DannyLenEvelyn2001/DIGITALIZANDOTE.git";
                ?>
                        <tr>
                            <td class="text-center" scope="col"><?= $cont ?></td>
                            <td class="text-center" scope="col"><?= $nombreColab ?></td>
                            <td class="text-center" scope="col"><?= acentosmayus(strtoupper($nombrePlantilla)) ?></td>
                            <td class="text-center" scope="col" colspan="2">
                                <a class="btn btn-info" href="<?= "../Plantillas/$carpeta/?id=$idTarjeta" ?>" target=_BLANK><i class="fa-solid fa-eye"></i></a>
                                <button class="btn btn-primary" portapapeles="<?= "$dominio/Plantillas/$carpeta/?id=$idTarjeta" ?>" onclick='copiar(this)'><i class="fa-solid fa-share-nodes"></i></button>
                                <button class="btn btn-warning" data-idlp='<?= $idTarjeta ?>' data-idplantilla='<?= $idPlantilla ?>' data-idempresa='<?= $idEmpresa ?>' onclick='landingedit(this.dataset.idplantilla, this.dataset.idlp, this.dataset.idempresa)'><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-danger" data-idlp='<?= $idTarjeta ?>' data-idplantilla='<?= $idPlantilla ?>' data-reltarjeta='<?= $idReltarjeta ?>' onclick='confirmarInhabilitar(this.dataset.idplantilla, this.dataset.idlp, this.dataset.reltarjeta)'><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                <?php
                        $cont++;
                    }
                } ?>
            </tbody>
        </table>
    </div>

    <script>
        // Función para copiar enlace al portapapeles
        function copiar(boton) {
            var atributo = boton.getAttribute("portapapeles"); // Obtener el atributo deseado (en este caso, portapapeles)
            var elementoTemporal = document.createElement("textarea"); // Crear un elemento de texto oculto
            elementoTemporal.value = atributo;
            document.body.appendChild(elementoTemporal); // Añadir el elemento temporal al DOM
            elementoTemporal.select(); // Seleccionar y copiar el atributo al portapapeles
            document.execCommand("copy");
            document.body.removeChild(elementoTemporal); // Eliminar el elemento temporal
            alert("Enlace copiado al portapapeles"); // Mostrar un mensaje o realizar cualquier otra acción después de copiar
        }

        // Función para abrir ventana emergente y previsualización
        // document.getElementById('selectCategoria').addEventListener('change', function() {
        //     var selectedOption = this.options[this.selectedIndex];
        //     if (selectedOption.value !== "") {
        //         var Ancho = 350;
        //         var Alto = 900;
        //         var opciones = 'width=' + Ancho + ',height=' + Alto + ',resizable=yes,scrollbars=yes';
        //         window.open(selectedOption.value, 'ventanaPopup', opciones);
        //     }
        // });

        // Función para abrir ventana emergente y previsualización
        function crearTarjeta() {
            var idColaborador = document.getElementById('selectColaborador').value;
            var categoria = document.getElementById('selectCategoria').value;

            var Ancho = screen.width / 3 - 100;
            var Alto = screen.height;
            const opciones = 'width=' + Ancho + ',height=' + Alto + ',resizable=yes,scrollbars=yes';
            window.open(categoria + '&b=' + idColaborador, 'ventanaPopup', opciones);
        }

        // Función para editar tarjeta
        function landingedit(idplatilla, idlp, idempresa) { // Mostrar una ventana de confirmación
            var Ancho = screen.width / 3 - 100;
            var Alto = screen.height;
            const opciones1 = 'width=' + Ancho + ',height=' + Alto;
            window.open('../Plantillas/td' + idplatilla + '/landing-form-edit.php?id=' + idlp + '&a=' + idempresa, 'formularioPopup', opciones1);
        }

        // Función para confirmar la inhabilitación de la tarjeta
        function confirmarInhabilitar(idplatilla, idlp, idreltar) { // Mostrar una ventana de confirmación
            const confirmacion = window.confirm('¿Está seguro de inhabilitar esta tarjeta?');
            if (confirmacion) { // Si el usuario confirmó, ejecutar la función inhabilitar
                inhabilitar(idplatilla, idlp, idreltar);
            }
        }

        // Función para inhabilitar la tarjeta
        function inhabilitar(idplatilla, idlp, idreltar) {
            fetch('../Plantillas/td' + idplatilla + '/inhabilitar.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'idlpi=' + idlp + '&idreltar=' + idreltar
                })
                .then(response => {
                    if (response.ok) { // Se pueden realizar acciones adicionales aquí si es necesario
                        // alert('tarjeta inhabilitada correctamente.');
                        location.reload()
                    } else {
                        alert('Error al inhabilitar la tarjeta, vuelva a intentarlo.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>

<?php
}
?>
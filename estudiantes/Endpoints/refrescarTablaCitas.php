<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';
require_once BD . 'db.php';
$id = $_POST['id'];
$citas = getCitas($id);
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="tableCita">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Asignatura</th>
        <th>Estado</th>
        <th>Respuesta</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($citas as $cita){?>
        <tr>
            <td><?php echo $cita->nombreCita?></td>
            <td class="center"><?php echo $cita->nombreAsignatura?></td>
            <td class="center"><?php echo $cita->estado?></td>
            <td class="center"><?php echo $cita->respuesta?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script>
    $('#tableCita').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "Listado de Reportes",
                exportOptions: {
                    columns: [ 0, 2, 3, 4, 5, 6, 7, 10]
                },
            },
            {
                extend: 'pdfHtml5',
                title: "Listado de Reportes",
                exportOptions: {
                    columns: [ 0, 2, 3, 4, 5, 6, 7, 10]
                }

            }
        ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },

        }
    });
</script>

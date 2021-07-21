<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';
require_once BD . 'db.php';
$codigo = $_POST['codigo'];
$grupos = get_grupos($codigo);
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="dataTables-example">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Asignatura</th>
        <th>Periodo</th>
        <th>Estado</th>

        <th> <div align="center">Acciones</div></th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($grupos as $grupo){?>
        <tr>
            <td><?php echo $grupo->codigo?></td>
            <td class="center"><?php echo $grupo->nombre?></td>
            <td class="center"><?php echo $grupo->asignatura?></td>
            <td class="center"><?php echo $grupo->periodo?></td>
            <td class="center"><?php echo $grupo->estado?></td>
            <td class="center">
                <div align="right">
                    <button class="btn btn-info" onclick="Matricular(<?php echo $grupo->id?>)">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Matricular
                    </button>
                </div>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script>
    $('#dataTables-example').DataTable({
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

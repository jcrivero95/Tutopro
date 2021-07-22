<?php
$citas = getCitasTeacher($this->session->userdata("id"));
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example">
    <thead>
    <tr>
        <th>Estudiante</th>
        <th>Cita</th>
        <th>Asignatura</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
<?php foreach($citas as $cita) {?>
        <tr>
            <td><?php echo $cita->estudiante?> <?php echo $cita->apellido?></td>
            <td><?php echo $cita->nombreCita?></td>
            <td class="center"><?php echo $cita->nombreGrupo?> - <?php echo $cita->nombreAsignatura?></td>
            <td class="center"><?php echo $cita->fecha?></td>
            <td class="center">
                <?php echo $cita->estado?>
            </td>
            <td class="center">
                <button class="btn btn-success btn-setting" onclick="showCitas(<?php echo $cita->id ?>)">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    Responder
                </button>
                <button class="btn btn-danger" onclick="rechazar(<?php echo $cita->id ?>)">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Rechazar
                </button>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>

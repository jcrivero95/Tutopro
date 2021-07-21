<?php
$citas = getCitasProgramadas($this->session->userdata("id"));
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example1">
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
            <td class="center"><?php echo $cita->nombreAsignatura?></td>
            <td class="center"><?php echo $cita->fecha?></td>
            <td class="center">
                <?php echo $cita->estado?>
            </td>
            <td class="center">
                <button class="btn btn-primary btn-setting" onclick="showCitasProcesadas(<?php echo $cita->id ?>)">
                    <i class="fa fa-files-o" aria-hidden="true"></i>

                </button>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>

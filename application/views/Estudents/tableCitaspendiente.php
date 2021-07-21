<?php
$citas = getCitas($this->session->userdata("id"));
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example">
    <thead>
    <tr>
        <th>Cita</th>
        <th>Asignatura</th>
        <th>Estado</th>
        <th>Respuesta</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($citas as $cita){?>
        <tr>
            <td><?php echo $cita->nombreCita?></td>
            <td class="center"><?php echo $cita->nombreGrupo?> - <?php echo $cita->nombreAsignatura?></td>
            <td class="center"><?php echo $cita->estado?></td>
            <td class="center"><?php echo $cita->respuesta?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
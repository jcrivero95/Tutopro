<?php
$citas = getProcesadas($this->session->userdata("id"));
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example1">
    <thead>
    <tr>
        <th>Cita</th>
        <th>Asignatura</th>
        <th>Estado</th>
        <th>Respuesta</th>
        <th>Nombre</th>
        <th>Desripción</th>
        <th>Contenido</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($citas as $cita){?>
        <tr>
            <td><?php echo $cita->nombreCita?></td>
            <td class="center"><?php echo $cita->nombreAsignatura?></td>
            <td class="center"><?php echo $cita->estado?></td>
            <td class="center"><?php echo $cita->respuesta?></td>
            <td class="center"><?php echo $cita->nombre?></td>
            <td class="center"><?php echo $cita->descripcion?></td>
            <td class="center">
                <a class="btn btn-link" target="_blank" href="<?php echo $cita->url; ?>"> <i class="fa fa-link" aria-hidden="true"></i></a>
               <?php if($cita->idCita != $cita->file) {?>
                <a class="btn btn-link" style="color: #3bbc17; font-size:18px;" download="<?php echo $cita->file ?>" href="<?php echo base_url()?>queries/subidas/<?php echo $cita->file; ?>"> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>

</script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';
require_once BD . 'db.php';
$id = $_POST['id'];
$citas = get_AllCitas($id);
?>
<?php foreach($citas as $cita){?>
<form>
    <h3>SOLICITUD DE LA CITA:</h3>
    <p><?php echo $cita->solicitud?></p>
    <input type="hidden" id="idCita" value="<?php echo $cita->id?>">
    <input type="hidden" id="estado" value="rechazada">
    <div class="row">
        <div class="col-md-6">
            <label>Respuesta:</label>
            <textarea class="form-control" id="respuesta" rows="5" placeholder="Respoder solicitud de cita...."></textarea>
        </div>
    </div>
    <br>
<div>
</div><br>
    <div>
        <button type="button" class="btn btn-danger" onclick="saveRespuesta()">Enviar</button>
    </div>

</form>
<?php } ?>

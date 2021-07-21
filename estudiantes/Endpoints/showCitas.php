<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';
require_once BD . 'db.php';
$id = $_POST['id'];
$citas = get_AllCitas($id);
?>
<?php foreach($citas as $cita){?>
<form>
    <h3>SOLISITUD DE LA CITA:</h3>
    <p><?php echo $cita->solicitud?></p>
    <input type="hidden" id="idCita" value="<?php echo $cita->id?>">
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
        <button type="button" class="btn btn-primary" onclick="saveRespuesta()">Enviar</button>
    </div>

</form>
<?php } ?>

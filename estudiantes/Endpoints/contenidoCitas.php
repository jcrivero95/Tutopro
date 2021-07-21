<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';
require_once BD . 'db.php';
$id = $_POST['id'];
$citas = get_AllCitas($id);
?>
<?php foreach($citas as $cita){?>
<form>
    <input type="hidden" id="idCita" name="idCita" value="<?php echo $cita->id?>">
    <h3>AGREGAR CONTENIDO</h3>
    <div class="row">
        <div class="col-md-6">
            <label>Nombre</label>
            <input type="text" id="nombreContenido" name="nombreContenido" class="form-control">
        </div>
        <div class="col-md-6">
            <label>Url</label>
            <input type="text" id="url" name="url" class="form-control">
        </div>
    </div>
    <br>
<div>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Descripcion...."></textarea>
</div><br>
    <div>
        <input type="file" id="file" name="file">
    </div><br>
    <div>
        <button type="button" class="btn btn-primary" onclick="uploadHV()">Agregar contenido</button>
    </div>

</form>
<?php } ?>

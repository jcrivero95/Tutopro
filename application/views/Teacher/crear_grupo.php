<?php
$asignaturas = get_asignatura($this->session->userdata("id"));
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Grupo</a>
            </li>
            <li>
                <a href="#">Registrar</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Registrar nuevo grupo</h2>

                </div>

                <div class="box-content">
                    <input type="hidden" value="<?php echo $this->session->userdata("id")?>" id="id">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Codigo</label>
                            <input type="text" id="codigo" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Nombre</label>
                            <input type="text" id="nombre" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Periodo</label>
                            <input type="number" id="periodo" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Asignatura</label>
                            <select id="asignatura" class="form-control">
                                <?php foreach ($asignaturas as $asignatura){?>
                                <option value="<?php echo $asignatura->id ?>"><?php echo $asignatura->nombre ?></option>
                                <?php } ?>
                            </select>

                        </div>

                    </div>
                    <br>
                    <button class="btn btn-primary" onclick="saveGrupo()">Crear grupo</button>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
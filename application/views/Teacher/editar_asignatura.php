<?php
$asignaturas = get_asignatura($this->session->userdata("id"));
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>asignatura/listar">Asignatura</a>
            </li>
            <li>
                <a href="#">Editar</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Registrar nueva asignatura</h2>

                </div>

                <div class="box-content">
                    <input type="hidden" value="<?php echo $datos->id?>" id="id">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Codigo</label>
                            <input type="text" id="codigo" class="form-control" value="<?php echo utf8_decode($datos->codigo)?>">
                        </div>
                        <div class="col-md-6">
                            <label>Nombre</label>
                            <input type="text" id="nombre" class="form-control" value="<?php echo utf8_encode($datos->nombre)?>">
                        </div>

                    </div>

                    <br>
                    <button class="btn btn-primary" onclick="updateAsignatura()">Actualizar</button>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
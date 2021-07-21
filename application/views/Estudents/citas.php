<?php
$grupos = getGrupos($this->session->userdata("id"));
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                    <a href="">Gestionar</a>
            </li>

            <li>
                <a href="">Citas</a>
            </li>

        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Asignación de citas</h2>

                </div>

                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" id="idEstudiante" value="<?php echo $this->session->userdata("id")?>">
                                <label>Nombre </label>
                                <input type="text" placeholder="Nombre" class="form-control" id="nombreCita">
                            </div>
                            <div class="col-md-4">
                                <label>Asignatura</label>
                                <select class="form-control" id="matricula">
                                    <?php foreach($grupos as $grupo){?>
                                    <option value="<?php echo $grupo->id?>"><?php echo $grupo->nombreGrupo?> - <?php echo $grupo->nombreAsignatura?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Fecha</label>
                                <input type="text"  id="fecha_cita" >
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="descripcionCita" class="form-label">Descripción de la solicitud</label>
                                <textarea class="form-control" id="descripcionCita" rows="5"></textarea>
                            </div><br>
                            <button class="btn btn-primary" onclick="agendarCita()">Guardar</button>
                        </div>
                        <div class="col-md-6">
                            <div id="calendar" class="col-centered">
                        </div>
                    </div><br>
                    </div>
                </div>
            </div><br>
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Citas pendientes</h2>

                </div>

                <div class="box-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="tableCitasProcesos">
                                <?php require_once 'application/views/Estudents/tableCitaspendiente.php'?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Citas procesadas</h2>

                </div>

                <div class="box-content">
                    <div class="row">
                        <div class="col-md-12">
                            <?php require_once 'application/views/Estudents/tableCitasprocesada.php'?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
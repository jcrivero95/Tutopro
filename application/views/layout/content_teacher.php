<?php
$grupos = countGrupos($this->session->userdata("id"));
$asignaturas = countAsignatura($this->session->userdata("id"));
$citasP = countCitasPendientes($this->session->userdata("id"));
$citas = countCitasProcesada($this->session->userdata("id"));
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Panel de control</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2> Panel de control</h2>

                </div>
                <div class="box-content">
                    <div class=" row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a data-toggle="tooltip" title="6 new members." class="well top-block" href="<?php echo base_url()?>grupos/listar">
                                <i class="fa fa-users"></i>

                                <div>Total Grupos</div>
                                <?php foreach ($grupos as $grupo){?>
                                <div><?php echo $grupo->countgrupos?></div>
                                <span class="notification"><?php echo $grupo->countgrupos?></span>
                                <?php }?>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url()?>asignatura/listar">
                                <i class="fa fa-cubes" aria-hidden="true"></i>

                                <div>Total Asignaturas</div>
                                <?php foreach ($asignaturas as $asignatura){?>
                                <div><?php echo $asignatura->countasignatura?></div>
                                <span class="notification green"><?php echo $asignatura->countasignatura?></span>
                                <?php } ?>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="<?php echo base_url()?>citasProfesor">
                                <i class="fa fa-calendar" aria-hidden="true"></i>

                                <div>Citas Pendientes</div>
                                <?php foreach ($citasP as $cita){?>
                                <div><?php echo $cita->countaCitaP?></div>
                                <span class="notification yellow"><?php echo $cita->countaCitaP?></span>
                                <?php } ?>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="<?php echo base_url()?>citasProfesor">
                                <i class="fa fa-calendar" aria-hidden="true"></i>

                                <div>Citas Procesadas</div>
                                <?php foreach ($citas as $cita){?>
                                    <div><?php echo $cita->countaCitas?></div>
                                    <span class="notification red"><?php echo $cita->countaCitas?></span>
                                <?php } ?>
                            </a>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
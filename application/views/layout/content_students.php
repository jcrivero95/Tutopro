<?php
$citasP = citasProgramadaseEstudent($this->session->userdata("id"));
$citasPen = citasPendenteEstudent($this->session->userdata("id"));
$citas = totalCitasEstudent($this->session->userdata("id"));

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
                            <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>

                                <div>Citas Creadas</div>
                                <?php foreach($citas as $cita){?>
                                <div><?php echo $cita->countCitas?></div>
                                <span class="notification"><?php echo $cita->countCitas?></span>
                                <?php }?>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>

                                <div>Citas Pendientes</div>

                                <?php foreach($citasPen as $cita){?>
                                    <div><?php echo $cita->countCitas?></div>
                                    <span class="notification"><?php echo $cita->countCitas?></span>
                                <?php }?>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                <div>Citas Programadas</div>
                                <?php foreach($citasP as $cita){?>
                                    <div><?php echo $cita->countCitas?></div>
                                    <span class="notification"><?php echo $cita->countCitas?></span>
                                <?php }?>
                            </a>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
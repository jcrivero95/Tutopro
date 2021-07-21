<?php

?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Citas</a>
            </li>
            <li>
                <a href="#">Listado</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Citas por responder</h2>

                </div>

                <div class="box-content">
                    <input type="hidden" id="idTeacher" value="<?php echo $this->session->userdata("id")?>">
                  <?php
                 require_once 'application/views/Teacher/tableCitasPorResponder.php'
                  ?>
                    <div id="RespuestaCitas"></div>
                </div>

            </div><br>

            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Citas programadas</h2>

                </div>

                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            require_once 'application/views/Teacher/tableCitasProgramadas.php'
                            ?>
                            <div id="contenidoCitas"></div>
                        </div>
                        <div class="col-md-6">
                            <div id='calendarTeacher'></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->


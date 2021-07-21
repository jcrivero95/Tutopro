<?php

?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Matriculas</a>
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
        <input type="hidden" id="idStudent" value=" <?php echo $this->session->userdata("id")?>">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Codigo del grupo</label>
                                <input type="text" class="form-control" id="codigo_grupo">
                            </div>
                            <div class="col-md-6">
                                <br>
                                <button class="btn btn-primary" onclick="buscarPorCodigo()">Buscar</button>
                            </div>
                        </div>

                    <br>

                    <div id="Resultado_busqueda">

                    </div>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
<?php
$matriculas = getMatriculas($this->session->userdata("id"));
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
                    <h2>Matriculas</h2>

                </div>

                <div class="box-content">
                    <div>
                    <a class="btn btn-primary" href="<?php echo base_url()?>matriculas/matricular">Matricular Materia</a>
                    </div>
                        <br>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example1">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Grupo</th>
                            <th>Materia</th>
                            <th>Periodo</th>
                            <th>Profesor</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($matriculas as $cita) {?>
                            <tr>
                                <td><?php echo $cita->codigoGrupo?></td>
                                <td><?php echo $cita->nombreGrupo?></td>
                                <td class="center"><?php echo $cita->nombreMateria?></td>
                                <td class="center"><?php echo $cita->periodo?></td>
                                <td class="center">
                                    <?php echo $cita->nombreProfesor?> <?php echo $cita->apellido?>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>

                    <br>

                    <div id="Resultado_busqueda">

                    </div>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
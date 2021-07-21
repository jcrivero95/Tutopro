<?php
$asignaturas = get_asignatura($this->session->userdata("id"));
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Asignaturas</a>
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
                    <h2>Listados de profesores</h2>

                </div>

                <div class="box-content">
                    <a href="<?php echo base_url();?>asignatura/registrar" class="btn btn-primary">Nueva Asignatura</a>
                    <br><br>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>

                         <!--   <th> <div align="center">Acciones</div></th>-->


                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($asignaturas as $asignatura){?>
                            <tr>
                                <td><?php echo $asignatura->codigo?></td>
                                <td class="center"><?php echo $asignatura->nombre?></td>
                               <!-- <td class="center">
                                    <div align="right">
                                    <a class="btn btn-info" href="#">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        Eliminar
                                    </a>
                                    </div>
                                </td>-->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
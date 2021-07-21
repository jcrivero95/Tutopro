<?php
$grupos = get_grupo($this->session->userdata("id"));
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Grupos</a>
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
                    <a href="<?php echo base_url();?>grupos/registrar" class="btn btn-primary">Nuevo Grupo</a>
                    <br><br>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Asignatura</th>
                            <th>Periodo</th>
                            <th>Estado</th>

                          <!--  <th> <div align="center">Acciones</div></th>-->


                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($grupos as $grupo){?>
                            <tr>
                                <td><?php echo $grupo->codigo?></td>
                                <td class="center"><?php echo $grupo->nombre?></td>
                                <td class="center"><?php echo $grupo->asignatura?></td>
                                <td class="center"><?php echo $grupo->periodo?></td>
                                <td class="center"><?php echo $grupo->estado?></td>
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
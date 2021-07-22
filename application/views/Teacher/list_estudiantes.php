<?php
$teachers = get_student();
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Estudiantes</a>
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
                    <h2>Listados de Estudiantes</h2>

                </div>

                <div class="box-content">
                    <a href="<?php echo base_url();?>profesores/registrar" class="btn btn-primary">Registrar profesor</a>
                    <br><br>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="example">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Identificación</th>
                            <th>Email</th>
                          <!--  <th>Acciones</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($teachers as $teacher){?>
                        <tr>
                            <td><?php echo $teacher->nombre?></td>
                            <td class="center"><?php echo $teacher->apellido?></td>
                            <td class="center"><?php echo $teacher->numero_id?></td>
                            <td class="center"><?php echo $teacher->email?></td>
                           <!-- <td class="center">
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Editar
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    Eliminar
                                </a>
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
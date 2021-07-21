<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Responder</a>
            </li>
            <li>
                <a href="#">Citas</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Responder Cita</h2>

                </div>

                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nombre del contenido</label>
                            <input type="text" id="nombre" class="form-control" value="<?php echo $cita->id; ?>"
                                   disabled>
                        </div>
                        <div class="col-md-6">
                            <p></p>
                        </div>
                    </div>


                    <textarea class="form-control" id="respuesta" rows="5"></textarea>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
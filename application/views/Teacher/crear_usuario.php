<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Profesores</a>
            </li>
            <li>
                <a href="#">Registrar</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Registrar nuevo profesor</h2>

                </div>

                <div class="box-content">
                    <input type="hidden" value="<?php echo $email->id; ?>" id="id">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="text" id="email" class="form-control" value="<?php echo $email->email; ?>"
                                   disabled>
                        </div>
                        <div class="col-md-4">
                            <label>Contraseña</label>
                            <input type="password" id="pass" class="form-control" placeholder="Digite una contraseña">
                        </div>

                    </div>
                    <br>
                    <button class="btn btn-primary" onclick="saveUserTeacher()">Crear usuario</button>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
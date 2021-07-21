
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

                    <div class="row">
                        <div class="col-md-3">
                            <label>Nombres</label>
                            <input type="text" id="nombre" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Apellidos</label>
                            <input type="text" id="apellidos" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Tipo de identificación</label>
                           <select id="tipo_id" class="form-control">
                               <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                               <option value="Cedula extranjera">Cedula extranjera</option>
                               <option value="Pasaporte">Pasaporte</option>
                           </select>
                        </div>

                        <div class="col-md-3">
                            <label>Numero de identificación</label>
                            <input type="text" id="numero_id" class="form-control">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <label>Teléfono</label>
                            <input type="text" id="telefono" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Correo electronico</label>
                            <input type="text" id="email" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label>Contraseña</label>
                            <input type="text" id="password" class="form-control">
                        </div>

                    </div><br>
                    <button class="btn btn-primary" onclick="saveTeacher()">Registrar</button>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
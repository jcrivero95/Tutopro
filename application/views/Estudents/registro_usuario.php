<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Tutopro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">


    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">


    <link href="<?php echo base_url()?>css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url()?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/animate.min.css' rel='stylesheet'>


    <script src="<?php echo base_url()?>bower_components/jquery/jquery.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/bootstrap.min.css"/>


    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/bootstrap.rtl.min.css"/>


</head>

<body>
<div class="ch-container">
    <div class="row">

        <!-- content starts -->
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url()?>registro">Atras</a>
                </li>
            </ul>
        </div>


        <div class="row">
            <div class="col-md-12 center login-header">
                <h2>REGISTRA USUARIO Y CONTRASEÑA</h2>
            </div>
            <!--/span-->
        </div><!--/row-->
        <div class="row">
            <div class="well col-md-5 center login-box">
                <form>
                    <fieldset>
                        <div class="row">
                        <div class="col-md-6">
                            <label>Correo electronico</label>
                            <input type="text" class="form-control" placeholder="Digite su Email" id="email" required >
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña</label>
                            <input type="text" class="form-control" placeholder="Digite su Password" id="password" required >
                        </div>
                        </div><br>

                        <div class="clearfix"></div>


                        <div class="clearfix"></div>

                        <p class="center col-md-5">
                            <button type="button" onclick="saveUserStudents()" class="btn btn-primary">Guardar</button>
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url()?>js/jquery.cookie.js"></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url()?>bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url()?>bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url()?>js/jquery.noty.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url()?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url()?>js/jquery.raty.min.js"></script>

<script src="<?php echo base_url()?>js/functions.js"></script>


</body>
</html>

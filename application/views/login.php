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
    <link href='<?php echo base_url()?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url()?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url()?>css/animate.min.css' rel='stylesheet'>


    <script src="<?php echo base_url()?>bower_components/jquery/jquery.min.js"></script>

</head>

<body>
<div class="ch-container">
    <div class="row">

            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url()?>registro">Registrate</a>
                    </li>
                </ul>
            </div>


        <div class="row">
            <div class="col-md-12 center login-header">
                <h2>BIENVENIDOS</h2>
            </div>
            <!--/span-->
        </div><!--/row-->


        <script type="text/javascript">
            <?php if($this->session->flashdata("error")):?>
            alert('Error Usuario o Password Incorrectos');
            <?php endif; ?>
        </script>



        <div class="row">
            <div class="well col-md-5 center login-box">
                <div class="alert alert-info">
                    Inicie Sesion con su Email y Contraseña

                </div>
                <form action="<?php echo base_url();?>login/login" method="post">
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email" required >
                        </div>
                        <div class="clearfix"></div><br>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock "></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password" required >
                        </div>
                        <div class="clearfix"></div>


                        <div class="clearfix"></div>

                        <p class="center col-md-5">
                            <button type="submit" class="btn btn-primary">Iniciar</button>
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
<!-- calender plugin -->
<!-- select or dropdown enhancer -->
<script src="<?php echo base_url()?>bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url()?>bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url()?>js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url()?>bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url()?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->

<!-- application script for Charisma demo -->
<script src="<?php echo base_url()?>js/charisma.js"></script>


</body>
</html>

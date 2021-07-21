<?php
$teachers = countTeacher();
?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Panel de control</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2> Panel de control</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
                            <i class="fa fa-user"></i>

                            <div>Total Profesores</div>
                            <?php foreach ($teachers as $tc){?>
                            <div><?php echo $tc->profesores?></div>
                            <span class="notification"><?php echo $tc->profesores?></span>
                            <?php } ?>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--/span-->

    </div><!--/row-->
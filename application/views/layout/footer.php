<?php
$eventos = showEvents($this->session->userdata("id"));
$events = showEventsTeacher($this->session->userdata("id"));
?>
</div><!--/row-->

<!-- content ends -->
</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

<!-- Ad, you can remove it -->

<!-- Ad ends -->


<!--<footer class="row">
    <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank"></a> Copyright © Tutopro</p>
    <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Version: <a
           >1.0.0</a></p>
</footer>-->

</div><!--/.fluid-container-->

<!-- external javascript -->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
<!-- calender plugin
<script src='<?php echo base_url(); ?>bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>-->
<script src='<?php echo base_url()?>fullcalendar/js/moment.min.js'></script>
<script src='<?php echo base_url()?>fullcalendar/js/fullcalendar/fullcalendar.min.js'></script>
<script src='<?php echo base_url()?>fullcalendar/js/fullcalendar/fullcalendar.js'></script>
<script src='<?php echo base_url()?>fullcalendar/js/fullcalendar/locale/es.js'></script>
<!-- data table plugin -->
<script src="<?php echo base_url(); ?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url(); ?>bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url(); ?>bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
<!-- library for making tables responsive -->

<!-- tour plugin -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
<script src="<?php echo base_url(); ?>js/functions.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<!-- application script for Charisma demo -->


<script>
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "Listado de Reportes",
                exportOptions: {
                    columns: [0, 2, 3, 4, 5, 6, 7, 10]
                },
            },
            {
                extend: 'pdfHtml5',
                title: "Listado de Reportes",
                exportOptions: {
                    columns: [0, 2, 3, 4, 5, 6, 7, 10]
                }

            }
        ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },

        }
    });

    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "Listado de Reportes",
                exportOptions: {
                    columns: [0, 2, 3, 4, 5, 6, 7, 10]
                },
            },
            {
                extend: 'pdfHtml5',
                title: "Listado de Reportes",
                exportOptions: {
                    columns: [0, 2, 3, 4, 5, 6, 7, 10]
                }

            }
        ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },

        }
    });

    $(function () {

        $('#calendar').fullCalendar({
            themeSystem: 'bootstrap3',
            header: {
                language: 'es',
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            weekNumbers: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                <?php foreach ($eventos as $evento){?>
                {

                    title: '<?php echo $evento->nombreEvento?>',
                    start: '<?php echo $evento->fechaFin?>',
                    color: '#0071c5',
                },
                <?php }?>
            ]
        });

    });

    $(function () {

        $('#calendarTeacher').fullCalendar({
            themeSystem: 'bootstrap3',
            header: {
                language: 'es',
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            weekNumbers: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                <?php foreach ($events as $evento){?>
                {

                    title: '<?php echo $evento->nombreEvento?>',
                    start: '<?php echo $evento->fechaFin?>',
                    color: '#0071c5',
                },
                <?php }?>
            ]
        });

    });

    $('#fecha_cita').datetimepicker({ footer: true, modal: true });


</script>


</body>
</html>


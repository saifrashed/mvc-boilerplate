<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="https://internetinbeeld.nl">Blue Bloq</a>.</strong>
    All rights reserved. Developed by <a href="https://saifrashed.nl" target="_blank">Saif Rashed</a>
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

</div>

<!-- Scripts -->
<script src="<?= JQUERY ?>"></script>
<script src="<?= JQUERY_UI ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?= BOOTSTRAP_JS ?>"></script>
<script src="<?= CHART_JS ?>"></script>
<script src="<?= SPARKLINE_JS ?>"></script>
<script src="<?= JQUERY_VMAP_JS ?>"></script>
<script src="<?= JQUERY_VMAP_USA_JS ?>"></script>
<script src="<?= JQUERY_KNOB_JS ?>"></script>
<script src="<?= MOMENT_JS ?>"></script>
<script src="<?= DATERANGEPICKER_JS ?>"></script>
<script src="<?= TEMPUSDOMINUS_BOOTSTRAP_JS ?>"></script>
<script src="<?= SUMMERNOTE_JS ?>"></script>
<script src="<?= DATATABLES_JS ?>"></script>
<script src="<?= DATATABLES_BOOTSTRAP_JS ?>"></script>
<script src="<?= OVERLAYSCROLLBARS_JS ?>"></script>

<!-- Main scripts -->
<script src="<?= MAIN_SCRIPT ?>"></script>
<script src="<?= DASHBOARD_SCRIPT ?>"></script>
<script src="<?= DEMO_SCRIPT ?>"></script>

<!-- Datatable initialise -->
<script>
    $(function () {
        $('#example2').DataTable({
            "paging":       true,
            "lengthChange": true,
            "searching":    true,
            "ordering":     true,
            "info":         true,
            "autoWidth":    true,
        });

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
    });
</script>


</body>
</html>
